overlay:
    @echo "Génération du composant overlay..."
    # Utilisez sass pour compiler style-sass.scss en CSS
    sass components/overlay/style-sass.scss /components/overlay/style.css
    # Copiez le fichier index.html vers le répertoire de build
    cp source/overlay/index.html build/components/overlay/index.html
    # Ajoutez d'autres commandes si nécessaire

all: build overlay
