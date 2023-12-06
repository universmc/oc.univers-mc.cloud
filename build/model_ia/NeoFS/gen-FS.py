from flask import Flask, request, jsonify
import h5py
from your_model_library import ModelArchitecture

app = Flask(__name__)

model = ModelArchitecture()
model.load('./model-neofr.h5')

@app.route('/generate-code', methods=['POST'])
def generate_code():
    prompt = request.json['prompt']
    generated_code = model.predict(prompt)
    return jsonify({"code": generated_code})

if __name__ == '__main__':
    app.run()
