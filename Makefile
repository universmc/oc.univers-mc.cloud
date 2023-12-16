# DIsket #
-include config.mk

# Reste du Makefile (votre code actuel)...

# Chemins des fichiers sources
HTML_SOURCE := src/index.html
SCSS_SOURCE := build/styles/index.scss
JS_SOURCE := src/js/scripts.js

# Chemins des fichiers cibles
HTML_TARGET := build/src/index.html
CSS_TARGET := build/src/css/styles.css
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

# Variables
SASS_FILES = build/styles/index.scss
CSS_OUTPUT = src/css/index.css
VENV_NAME := venv
PYTHON := $(VENV_NAME)/bin/python



# INSTALLATION

# Commandes
start-srv:
	@echo "Démarrage du serveur PHP et compilation SASS..."
	@php -S localhost:5502 &
	@npm run make-sass

sass:
    sass $(SASS_FILES):$(CSS_OUTPUT) --style compressed  # Compiler le SASS en CSS

watch:
    sass --watch $(SASS_FILES):$(CSS_OUTPUT) --style compressed  # Surveiller les changements SASS


$(VENV_NAME):
	@gpython3 -m venv $(VENV_NAME)

run:
	@gpython3 agent-ia.py


clean:
	@rm -rf build

.PHONY: all html css src make srv clean
