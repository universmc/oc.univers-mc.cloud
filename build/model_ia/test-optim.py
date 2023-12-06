import torch
from torch.utils.data import Dataset, DataLoader
from transformers import GPT2Tokenizer, GPT2Model, GPT2Config
import numpy as np

# Charger le modèle GPT-2 pré-entraîné et le tokenizer
model_name = "gpt2"
tokenizer = GPT2Tokenizer.from_pretrained(model_name)
model = GPT2Model.from_pretrained(model_name)

# Convertir le texte en tokens d'ASCII
text = """[
╔══════════════════════════╗
║       COMMAND CENTER     ║
╟──────────────────────────╢
║  [1] Activate Systems   ║
║  [2] Security Override   ║
║  [3] Run Diagnostics     ║
║  [4] Access Logs         ║
║  [5] Shutdown            ║
╚══════════════════════════╝
/------------------------------------------\
|          WELCOME TO PROJECT X            |
|------------------------------------------|
|  > Initiate Quantum Encryption           |
|  > Analyze Neural Network Data          |
|  > Execute Deep Learning Algorithms     |
|  > View Real-time Satellite Feeds       |
|  > Access Classified Archives           |
|  > Terminate Unauthorized Access        |
\------------------------------------------/

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

"   _________________________________________
"  /══════════════════════════════════════════
"  ║   WELCOME TO CYBERNETIC HUB INTERFACE    ║
"  ║------------------------------------------║
"  ║   [1] Neural Enhancements                ║
"  ║   [2] Augmented Reality Calibration      ║
"  ║   [3] Biometric Data Analysis            |
"  ║   [4] Quantum Neural Network Integration |
"  ║   [5] Exit Interface                     |
"  ║__________________________________________/
"   ═════════════════════════════════════════
"

]"""
ascii_tokens = tokenizer.encode(text, add_special_tokens=True)

# Créer un Dataset personnalisé
class ASCIITextDataset(Dataset):
    def __init__(self, ascii_tokens, transform=None):
        self.ascii_tokens = ascii_tokens
        self.transform = transform

    def __len__(self):
        return len(self.ascii_tokens)

    def __getitem__(self, idx):
        sample = {"input_ids": self.ascii_tokens[idx]}

        if self.transform:
            sample = self.transform(sample)

        return sample

# Définir une fonction de transformation si nécessaire
def transform_function(sample):
    # Ajouter des transformations personnalisées si nécessaire
    return sample

# Créer le DataLoader
dataset = ASCIITextDataset(ascii_tokens, transform=transform_function)
dataloader = DataLoader(dataset, batch_size=1, shuffle=False)

# Exemple d'utilisation du DataLoader
for batch in dataloader:
    input_ids = batch["input_ids"]
    # Traiter input_ids avec le modèle
    with torch.no_grad():
        outputs = model(input_ids)
    # Faire quelque chose avec les résultats
    print(outputs)
