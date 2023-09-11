import re
import tensorflow as tf
from tensorflow import keras

# 1. Load and preprocess data
def load_data_from_corpus(filename):
    with open(filename, 'r', encoding='utf-8') as file:
        content = file.read()
        
    # Utiliser une expression régulière pour extraire les dates et le contenu associé
    pattern = r'## (\d{4}-\d{2}-\d{2})\n(.+?)(?=## \d{4}-\d{2}-\d{2}|\Z)'
    entries = re.findall(pattern, content, re.DOTALL)

    dates = [entry[0] for entry in entries]
    texts = [entry[1].strip() for entry in entries]
    
    return dates, texts

def preprocess_data(dates, texts):
    # Cette fonction transformera les textes et/ou les dates en un format utilisable par votre modèle.
    # Par exemple, vous pourriez convertir les textes en séquences de tokens et les dates en entiers ou en one-hot vectors.
    # Pour cet exemple, nous supposerons que les dates ne sont pas utilisées directement dans le modèle.
    
    # Convertir les textes en séquences de tokens
    tokenizer = keras.preprocessing.text.Tokenizer()
    tokenizer.fit_on_texts(texts)
    sequences = tokenizer.texts_to_sequences(texts)
    input_data = keras.preprocessing.sequence.pad_sequences(sequences, padding='post')

    # Supposons que les "output_data" soient une version simplifiée de nos données (par exemple, la longueur du texte)
    output_data = [len(text) for text in texts]

    return input_data, output_data

# 2. Load data
dates, texts = load_data_from_corpus('corpus.md')
input_data, output_data = preprocess_data(dates, texts)

# 3. Define and train model (comme avant)
model = keras.Sequential([
    keras.layers.InputLayer(input_shape=(input_data.shape[1],)),
    keras.layers.Embedding(input_dim=len(tokenizer.word_index) + 1, output_dim=64),
    keras.layers.GlobalAveragePooling1D(),
    keras.layers.Dense(128, activation='relu'),
    keras.layers.Dense(1)  # Puisque l'output est une longueur de texte, donc une valeur unique.
])

model.compile(optimizer='adam', loss='mean_squared_error')
model.fit(input_data, output_data, epochs=10)

# 4. Save model
model.save('./model-neofr.h5')