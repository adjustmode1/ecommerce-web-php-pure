import os

import numpy as np
import pandas as pd
from PIL import Image
from flask import Flask, request, jsonify
from tensorflow.keras.applications.vgg16 import VGG16, preprocess_input
from tensorflow.keras.models import Model
from tensorflow.keras.preprocessing import image

app = Flask(__name__)


class FeatureExtractor:
    def __init__(self):
        base_model = VGG16(weights='imagenet')
        self.model = Model(inputs=base_model.input, outputs=base_model.get_layer('fc1').output)

    def extract(self, img):
        img = img.resize((224, 224))
        img = img.convert('RGB')
        x = image.img_to_array(img)
        x = np.expand_dims(x, axis=0)
        x = preprocess_input(x)
        feature = self.model.predict(x)[0]
        return feature / np.linalg.norm(feature)


fe = FeatureExtractor()
# Train
features = []
# base_path = 'C:/xampp/htdocs/penguin/upload'
base_path = './upload'
ind = 0
_all = len(os.listdir(base_path))
print(_all)
for img_path in os.listdir(base_path):
    if os.path.isdir(base_path + '/' + img_path):
        continue
    ind += 1
    if ind % 10 == 0:
        print(f'Running: {ind}/{_all}')
    feature = fe.extract(img=Image.open(base_path + '/' + img_path))
    feature = pd.DataFrame([feature])
    feature['image'] = img_path
    features.append(feature)
features = pd.concat(features, axis=0)

base_test_path = 'search_by_image'


def query(img_input_name):
    img = Image.open(base_test_path + '/' + img_input_name)
    query = fe.extract(img)
    features_data = features.copy()
    features_data = features_data.drop(columns=['image'])
    features_data = features_data.values
    dists = np.linalg.norm(features_data - query, axis=1)

    ids = np.argsort(dists)[:30]
    lookalike_imgs = features.iloc[ids, :]['image']
    scores = pd.DataFrame({'image': lookalike_imgs,
                           'score': dists[ids]})
    scores = scores.reset_index(drop=True)
    ans = []
    for a in range(len(scores)):
        ans.append(scores['image'][a])
    return ans


@app.route("/search_by_image", methods=['GET'])
def home():
    img = request.args.get('img')
    ans = query(img)
    print(ans)
    return jsonify({
        'result': ans
    })
app.run()
