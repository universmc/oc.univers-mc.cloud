document.addEventListener('DOMContentLoaded', function() {
    // Initialisations
    const slides = document.querySelectorAll('.slider-display .slide');
    const listItems = document.querySelectorAll('.slider-list li');
    let currentIndex = 0;

    // Fonction pour montrer un slide spécifique
    function showSlide(index) {
        slides[currentIndex].classList.remove('active');
        listItems[currentIndex].classList.remove('active');
        
        slides[index].classList.add('active');
        listItems[index].classList.add('active');

        currentIndex = index;
    }

    // Événement de clic pour les éléments sommaires
    listItems.forEach((li, index) => {
        li.addEventListener('click', function() {
            showSlide(index);
        });
    });

    // Événements pour les touches du clavier
    document.addEventListener('keydown', function(e) {
        // Flèche de gauche ou "h" pour aller au slide précédent
        if (e.key === 'ArrowLeft' || e.key === 'h') {
            const newIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(newIndex);
        }
        // Flèche de droite ou "l" pour aller au slide suivant
        else if (e.key === 'ArrowRight' || e.key === 'l') {
            const newIndex = (currentIndex + 1) % slides.length;
            showSlide(newIndex);
        }
    });

    // Affiche le premier slide par défaut
    showSlide(0);
});
