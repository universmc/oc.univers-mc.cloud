// Récupérez les éléments HTML
const filtreHeaderButton = document.getElementById('filtreHeader');
const filtre2Button = document.getElementById('filtre2');
const image = document.getElementById('image');

// Ajoutez des écouteurs de clic pour les boutons de filtre
filtreHeaderButton.addEventListener('click', () => {
    image.src = 'assets/soutenances/maquette-desktop.png'; // Changez l'image pour le filtre 1
});

filtre2Button.addEventListener('click', () => {
    image.src = 'assets/soutenances/balisage-desktop.png'; // Changez l'image pour le filtre 2
});
