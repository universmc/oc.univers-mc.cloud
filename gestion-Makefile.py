import tkinter as tk
from tkinter import ttk
import subprocess
import os

# Obtenez le chemin absolu du répertoire où se trouve ce script
script_directory = os.path.dirname(os.path.abspath(__file__))

# Obtenez le chemin absolu vers le répertoire de votre projet (par exemple, le répertoire parent du script)
project_directory = os.path.abspath(os.path.join(script_directory, "srv/"))  # Vous pouvez ajuster ".." si nécessaire


# Liste des commandes du Makefile
commands = [
    "start-srv",
    "say",
    "mkdir",
    "touch",
    "git",
    "chmod",
    "cd",
    "cp"
    # Ajoutez d'autres commandes ici
]

# Fonction pour exécuter la commande sélectionnée
def execute_command():
    selected_command = command_combobox.get()
    if selected_command:
        try:
            # Utilisez subprocess pour exécuter la commande
            result = subprocess.run(["make", selected_command], stdout=subprocess.PIPE, stderr=subprocess.PIPE, text=True, cwd=project_directory)

            # Vérifiez si la commande a réussi
            if result.returncode == 0:
                output_label.config(text=f"Commande '{selected_command}' exécutée avec succès.\nSortie : {result.stdout}")
            else:
                output_label.config(text=f"Erreur lors de l'exécution de la commande '{selected_command}'.\nErreur : {result.stderr}")
        except Exception as e:
            output_label.config(text=f"Erreur lors de l'exécution de la commande '{selected_command}'.\nErreur : {str(e)}")
            
# Créer une fenêtre
window = tk.Tk()
window.title("Interface de gestion des commandes Makefile")

# Créer une combobox pour sélectionner une commande
command_label = tk.Label(window, text="Sélectionnez une commande:")
command_label.pack()

command_combobox = ttk.Combobox(window, values=commands, state="readonly")
command_combobox.pack()

# Créer un bouton pour exécuter la commande sélectionnée
execute_button = tk.Button(window, text="Exécuter", command=execute_command)
execute_button.pack()

# Label pour afficher la sortie de la commande
output_label = tk.Label(window, text="")
output_label.pack()

# Exécutez l'interface graphique
window.mainloop()
