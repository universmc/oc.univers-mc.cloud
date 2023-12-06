import torch
from torch.utils.data import Dataset, DataLoader
from transformers import GPT2Tokenizer, GPT2LMHeadModel

# Charger le modèle GPT-2 pré-entraîné et le tokenizer
model_name = "gpt2"
tokenizer = GPT2Tokenizer.from_pretrained(model_name)
model = GPT2LMHeadModel.from_pretrained(model_name)

# Convertir le texte en tokens d'ASCII
text = """[
"
"  +------------------------[ ASCII Style Level Progression ]------------------------+
"5 |                                                                         ▓▓▓▓▓▓ |
"  |                                                                         ▓▓▓▓▓▓ |
"4 |                                                                         ▓▓▓▓▓▓ |
"  |                                                                         ▓▓▓▓▓▓ |
"3 |                                                                         ▓▓▓▓▓▓ |
"  |                                                                         ▓▓▓▓▓▓ |
"2 |                                                                         ▓▓▓▓▓▓ |
"  |                                                                         ▓▓▓▓▓▓ |
"1 |                                                                         ▓▓▓▓▓▓ |
"  |                                                                         ▓▓▓▓▓▓ |
"0 +-------------------------------------------------------------------------+
"    Jan   Feb   Mar   Apr   May   Jun   Jul   Aug   Sep   Oct   Nov   Dec
"                                  [ Time (Months) ]
...
"""

ascii_tokens = tokenizer.encode(text, add_special_tokens=True, return_tensors="pt")

# Exemple d'utilisation du modèle
with torch.no_grad():
    outputs = model(input_ids=ascii_tokens)

# Imprimer les sorties du modèle
print(outputs)
