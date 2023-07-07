import cv2
import tensorflow as tf
from tensorflow.keras import Model
from tensorflow.keras.applications.resnet50 import ResNet50
from tensorflow.keras.preprocessing import image
from tensorflow.keras.applications.resnet50 import preprocess_input, decode_predictions
from tensorflow.keras.layers import GlobalMaxPooling2D
import dask.dataframe as dd
from sklearn.metrics.pairwise import pairwise_distances
import pandas as pd
import os
import numpy as np
from flask import Flask, request, jsonify
from flask_cors import CORS
import random
from sklearn.neighbors import KNeighborsClassifier
import string
from sklearn.decomposition import PCA
from tensorflow.keras.preprocessing.image import ImageDataGenerator, load_img, img_to_array
from tensorflow.keras.applications import VGG16
from tensorflow.keras.layers import Conv2D, MaxPooling2D, GlobalAveragePooling2D, Activation, Dropout, Flatten, Dense, Input, Layer
from tensorflow.keras.applications import VGG16
from tensorflow.keras.models import Model, Sequential
from tensorflow.keras.preprocessing.image import ImageDataGenerator, load_img, img_to_array
import matplotlib.pyplot as plt
import seaborn as sns
import json
import shutil
app = Flask(__name__)
CORS(app)
DATASET_PATH = "./search_by_image"
# path = '/kaggle/input/fashion-product-images-dataset/fashion-dataset/images'

def get_all_filenames(directory):
    """
    Returns a set of all filenames in the given directory.
    """
    data_frame = pd.DataFrame()
    filenames = set()
    df = []
    for filename in os.listdir(directory):
          if os.path.isfile(os.path.join(directory, filename)):
              df.append([filename.split('.')[0],filename])
              filenames.add(filename)
    data_frame = pd.DataFrame(df,columns=['id','name'])
    return filenames, data_frame

images,data_frame = get_all_filenames(DATASET_PATH)
img_size = 224
datagen = ImageDataGenerator(rescale=1/255.) 
generator = datagen.flow_from_dataframe(dataframe=data_frame,
                                        directory='./search_by_image',
                                        target_size=(img_size,img_size),
                                        x_col='name',
                                        class_mode=None,
                                        batch_size=32,
                                        shuffle=False,
                                        classes=None)
base_model = VGG16(include_top=False, input_shape=(img_size,img_size,3))

for layer in base_model.layers:
    layer.trainable = False
    
input_layer = Input(shape=(img_size,img_size,3))
x = base_model(input_layer)
output = GlobalAveragePooling2D()(x)

embeddings = Model(inputs=input_layer, outputs=output)
# embeddings.summary()

X = embeddings.predict(generator, verbose=1)

pca = PCA(2)
X_pca = pca.fit_transform(X)
# data_frame[['id','name']] = X_pca
path = './search_by_image'

def read_img(image_path):
    image = load_img(os.path.join(path,image_path),target_size=(img_size,img_size,3))
    image = img_to_array(image)
    image = image/255.
    return image

y = data_frame['id']
nearest_neighbours = KNeighborsClassifier(n_neighbors=7)
nearest_neighbours.fit(X,y)

def predict(data_frame):
  _, df = get_all_filenames('./predict')
  datagen = ImageDataGenerator(rescale=1/255.) 
  generator = datagen.flow_from_dataframe(dataframe=df,
                                          directory='./predict',
                                          target_size=(img_size,img_size),
                                          x_col='name',
                                          class_mode=None,
                                          batch_size=32,
                                          shuffle=False,
                                          classes=None)
  data = embeddings.predict(generator, verbose=1)
  dist, index = nearest_neighbours.kneighbors(X=data.reshape(1,-1))

  return [data_frame['id'][x] for x in index]

def get_random_string(length):
    # choose from all lowercase letter
    letters = string.ascii_lowercase
    result_str = ''.join(random.choice(letters) for i in range(length))
    return result_str

@app.route('/search_by_image',methods=['POST'])
def search_by_image():
    print('-----------------------')
    imagefile = request.files['imagefile']
  
    if imagefile.filename == '':
        return False
    else:
        name = get_random_string(22)
        print('00000000000000000000')
        print(imagefile.filename.split('.')[-1])
        imagefile.save('./predict/'+name+'.'+imagefile.filename.split('.')[-1])
        # imagefile.save('./upload/'+name+'.'+imagefile.filename.split('.')[-1])

        # Copy file from src_path to dest_path
        src_path = './predict/'+name+'.'+imagefile.filename.split('.')[-1]
        dest_path = './upload/'+name+'.'+imagefile.filename.split('.')[-1]
        shutil.copy(src_path, dest_path)
        data = predict(data_frame)
        data = [data[0].iloc[x] for x in range(len(data[0]))]
        os.remove('./predict/'+name+'.'+imagefile.filename.split('.')[-1])
        return jsonify(data=data, img='../upload/'+name+'.'+imagefile.filename.split('.')[-1])
app.run(debug=True)