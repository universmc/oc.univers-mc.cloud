from flask import Flask, request, jsonify
from NeoFS import generate_code

app = Flask(__name__)

@app.route('/generate-code', methods=['POST'])
def generate():
    prompt = request.json.get('prompt')
    current_code = request.json.get('current_code')
    
    new_code = generate_code(prompt, current_code)
    
    return jsonify({'new_code': new_code})

if __name__ == '__main__':
    app.run(debug=True)
