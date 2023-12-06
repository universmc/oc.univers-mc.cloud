import tkinter as tk
from tkinter import messagebox

def execute_command():
    # Ici, récupérez les valeurs des widgets et exécutez votre logique
    # Par exemple, si vous avez un champ de texte pour une époque:
    epoch = epoch_entry.get()
    
    # Supposons que vous ayez une fonction `train_model` pour démarrer la formation :
    # train_model(epoch)

    # Ici, je vais simplement afficher une boîte de message
    messagebox.showinfo("Info", f"Starting training for epoch {epoch}")

app = tk.Tk()
app.title("NeoFS Training GUI")

label = tk.Label(app, text="Enter Epoch:")
label.pack(pady=20)

epoch_entry = tk.Entry(app)
epoch_entry.pack(pady=20)

button = tk.Button(app, text="Start Training", command=execute_command)
button.pack(pady=20)

app.mainloop()
