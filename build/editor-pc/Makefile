# Makefile for project

# Liste des fichiers source PHP
PHP_SOURCES := $(wildcard src/code/*.php)

# Liste des fichiers source CSS
CSS_SOURCES := $(wildcard src/css/*.css)

# Cible par défaut
all: build

# Tâche pour générer les fichiers HTML
build: $(PHP_SOURCES) $(CSS_SOURCES)
	@echo "Génération des fichiers HTML..."
    # Logique pour générer les fichiers HTML à partir des fichiers PHP et CSS
    # Exemple : php generate.php

# Tâche pour copier les fichiers générés
copy:
	@echo "Copie des fichiers générés vers /assets/component/..."
    # Logique pour copier les fichiers générés vers /assets/component/

# Tâche pour nettoyer les fichiers générés
clean:
	@echo "Nettoyage des fichiers générés..."
    # Logique pour supprimer les fichiers générés

.PHONY: build copy clean