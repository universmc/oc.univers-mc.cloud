# Chemins des fichiers sources
HTML_SOURCE := src/index.html
SCSS_SOURCE := src/styles/main.scss
JS_SOURCE := src/scripts/main.js

# Chemins des fichiers cibles
HTML_TARGET := build/pages/cours/sass/index.html
CSS_TARGET := build/assets/css/main.css
SRC_TARGET := build/src

# Commandes de compilation
SASS := sass
HTMLLINT := html-lint

# Règles de compilation
all: html css src

html: $(HTML_SOURCE)
	# Votre commande de génération HTML ici
	# Par exemple : $(HTMLLINT) $(HTML_SOURCE) > $(HTML_TARGET)
	@echo "Génération de HTML terminée"

css: $(SCSS_SOURCE)
	# Votre commande de génération CSS depuis SCSS ici
	# Par exemple : $(SASS) $(SCSS_SOURCE) $(CSS_TARGET)
	@echo "Génération de CSS terminée"

src:
	# Créer le répertoire /src
	mkdir -p $(SRC_TARGET)
	# Copier les fichiers sources vers le répertoire /src
	cp -r src/* $(SRC_TARGET)
	@echo "Création du répertoire /src terminée"

# Créer un composant web nommé "mon_component"
create_component:
	# Logique pour créer un composant web ici
	@echo "Création du composant terminée"

# Créer une page web nommée "ma_page"
create_page:
	# Logique pour créer une page web ici
	@echo "Création de la page terminée"

# Variables pour la compilation SASS
SASS_FILES = build/styles/*.scss
CSS_OUTPUT = src/styles/main.css
VENV_NAME := venv
PYTHON := $(VENV_NAME)/bin/python

# INSTALLATION
install: $(VENV_NAME)
	$(PYTHON) -m pip install -r requirements.txt
	npm install  # Installer les dépendances, si nécessaire
	# Autres commandes d'installation si nécessaire

# Compilation SASS
sass:
	sass $(SASS_FILES):$(CSS_OUTPUT) --style compressed  # Compiler le SASS en CSS

# Surveiller les changements SASS
watch:
	sass --watch $(SASS_FILES):$(CSS_OUTPUT) --style compressed

# Créer un environnement virtuel
$(VENV_NAME):
	python3 -m venv $(VENV_NAME)

# Exécuter le script Python
run:
	$(PYTHON) agent-ia.py

# Nettoyer l'environnement virtuel et le répertoire build
clean:
	rm -rf $(VENV_NAME) build

.PHONY: all html css src create_component create_page install sass watch run clean
