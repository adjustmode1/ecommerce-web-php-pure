import cv2
import tensorflow as tf
from tensorflow.keras import Model
import os
from flask import Flask, request, jsonify
from flask_cors import CORS
import random
import string
import os
import numpy as np

import tensorflow as tf
from tensorflow.keras.preprocessing import image
from tensorflow.keras.applications.resnet_v2 import ResNet101V2, preprocess_input
from tensorflow.keras.models import  Model
from tensorflow.keras.preprocessing.image import load_img, img_to_array
from tensorflow.keras.models import Model
from tensorflow.keras.preprocessing.image import load_img, img_to_array
import json
from tqdm import tqdm, trange
from PIL import Image
from time import sleep
import shutil
app = Flask(__name__)
CORS(app)
DATASET_PATH = "./search_by_image"

model = ResNet101V2(
    weights="imagenet",
)
for layer in model.layers:
    layer.trainable = False
extractions = Model(inputs=model.inputs, outputs = model.get_layer("avg_pool").output)

vectors = []
paths = []

def preprocess_image(img):
    img = img.resize((224,224))
    img = img.convert("RGB")
    x = image.img_to_array(img)
    x = np.expand_dims(x, axis=0)
    x = preprocess_input(x)
    return x

def image_to_vector(model, image_path):
    img = Image.open(image_path)
    img_tensor = preprocess_image(img)

    vector = model.predict(img_tensor)[0]

    vector = vector / np.linalg.norm(vector)
    return vector

def migrate():
    list_dir = os.listdir(DATASET_PATH)
    with tqdm(range(len(list_dir)), colour="blue") as pbar:
        for index in pbar:
            image_path = list_dir[index]
            if(image_path.split('.')[-1] == 'jpg'):
                # Noi full path
                image_path_full = os.path.join(DATASET_PATH,image_path)
                # Trich dac trung
                image_vector = image_to_vector(extractions,image_path_full)
                # Add dac trung va full path vao list
                vectors.append(image_vector)
                paths.append(image_path_full)
        sleep(0.001)
    return 0
    
path = './search_by_image'

def predict(path_search,length):
  search_vector = image_to_vector(extractions, path_search)
  distance = np.linalg.norm(vectors - search_vector, axis=1)
  ids = np.argsort(distance)[:length]
  return [(paths[id], distance[id]) for id in ids]

def get_random_string(length):
    # choose from all lowercase letter
    letters = string.ascii_lowercase
    result_str = ''.join(random.choice(letters) for i in range(length))
    return result_str
@app.route('/migrate',methods=['GET'])
def pull():
    migrate()
    return jsonify(data=1)
    
@app.route('/search_by_image',methods=['POST'])
def search_by_image():
    imagefile = request.files['imagefile']
  
    if imagefile.filename == '':
        return False
    else:
        name = get_random_string(22)
        print(imagefile.filename.split('.')[-1])
        imagefile.save('./predict/'+name+'.'+imagefile.filename.split('.')[-1])

        # Copy file from src_path to dest_path
        data = predict('./predict/'+name+'.'+imagefile.filename.split('.')[-1],8)
        print(data)
        return jsonify({"data":str(data)})
app.run(debug=True)