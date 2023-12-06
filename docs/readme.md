# OC Univers - Plateforme de Développement Web et IA

Bienvenue dans la plateforme OC Univers dédiée au développement Web et à l'intégration d'intelligence artificielle.

## Structure du Répertoire `build`

Le répertoire `build` contient les fichiers générés lors de la compilation, de l'exécution de scripts, ou d'autres processus automatisés.

   ### Contenu Actuel
   
   1. **api/** : Contient les fichiers nécessaires pour le développement de l'API. Inclut des       sous-répertoires pour le backend, le frontend, les modèles IA, etc.
   
   2. **components/** : Contient des composants réutilisables tels que des éléments d'ASCII art, des      pré-formattages, des éléments web (bouton, carte, diapositives, etc.).
   
   3. **gen_/** : Contient des fichiers générés automatiquement, tels que des fichiers audio, image, texte et      vidéo.
   
   4. **model_ia/** : Contient des modèles d'intelligence artificielle, avec des sous-répertoires spécifiques      à chaque modèle.
   
   5. **module/** : Répertoire réservé pour les modules génériques ou partagés.
   
   6. **pages/** : Contient les pages générées, organisées par langage de programmation ou sujet.
   
   7. **scripts/** : Contient des scripts générés ou nécessaires pour l'automatisation de certaines tâches.
   
   8. **setup/** : Contient des configurations spécifiques pour le déploiement ou la mise en place du projet.
   
   ### Utilisation
   
   1. **Compilation des styles** : Utilisez `make sass` pour compiler les fichiers SASS en CSS.
   
   2. **Génération de modèles IA** : Consultez les fichiers `Makefile` dans les sous-répertoires de `model_ia/     ` pour la compilation ou l'entraînement des modèles.
   
   3. **Scripts** : Exécutez les scripts dans `scripts/` avec les commandes appropriées.
   
   4. **Pages générées** : Explorez les pages générées dans `pages/` pour accéder aux cours et aux        informations spécifiques.
   
   5. **Configuration** : Les fichiers dans `setup/` contiennent des configurations spécifiques au déploiement ou à la mise en place du projet.

## Makefile

Le fichier `Makefile` contient des commandes utiles pour la gestion du projet.

### Variables

- `SASS_FILES`: Chemin des fichiers SASS.
- `CSS_OUTPUT`: Sortie du fichier CSS.
- `VENV_NAME`: Nom de l'environnement virtuel Python.

### Commandes

- `make install`: Installe les dépendances du projet.
- `make sass`: Compile les fichiers SASS en CSS.
- `make watch`: Surveille les changements SASS en continu.
- `make run`: Exécute le script Python `agent-ia.py`.
- `make clean`: Supprime l'environnement virtuel.

Assurez-vous de consulter le `Makefile` pour d'autres commandes et détails spécifiques.


### Commandes