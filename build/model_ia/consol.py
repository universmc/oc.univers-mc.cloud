import torch
from torch.utils.data import Dataset, DataLoader
from transformers import GPT2Tokenizer, GPT2LMHeadModel

# Charger le modèle GPT-2 pré-entraîné et le tokenizer
model_name = "gpt2"
tokenizer = GPT2Tokenizer.from_pretrained(model_name)
model = GPT2LMHeadModel.from_pretrained(model_name)

# Convertir le texte en tokens d'ASCII
text = """[

╔════════════════════════════════════╗
║    SPACE COMMAND CONSOLE - ALPHA   ║     
╟────────────────────────────────────╢
║   Location: Starship Omega         ║
║   Status: Nominal                  ║
║   Navigation: Engaged              ║
║   Energy Levels: 85%               ║
║   Oxygen Levels: 98%               ║
║   System Diagnostics: OK           ║
╚════════════════════════════════════╝
...
"""

ascii_tokens = tokenizer.encode(text, add_special_tokens=True, return_tensors="pt")

# Exemple d'utilisation du modèle
with torch.no_grad():
    outputs = model(input_ids=ascii_tokens)

# Imprimer les sorties du modèle
print(outputs)
