# Variables
DB_USER=root
DB_PASS=password
DB_NAME=mydatabase
CONFIG_FILE=config.mk

# Targets
all: build

build:
	@echo "Building the project..."
	# Votre commande pour construire le projet ici

database:
	@echo "Initializing the database..."
	mysql -u$(DB_USER) -p$(DB_PASS) -e "CREATE DATABASE $(DB_NAME)"

config:
	@echo "Setting up configuration..."
	echo "DB_USER=$(DB_USER)" > $(CONFIG_FILE)
	echo "DB_PASS=$(DB_PASS)" >> $(CONFIG_FILE)
	echo "DB_NAME=$(DB_NAME)" >> $(CONFIG_FILE)
	echo "ASCII_STYLE=..." >> $(CONFIG_FILE) # Ici, insérez votre style ASCII.

clean:
	@echo "Cleaning up..."
	# Votre commande pour nettoyer le projet ici

.PHONY: all build database config clean
