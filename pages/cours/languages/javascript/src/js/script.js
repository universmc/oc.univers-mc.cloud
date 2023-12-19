// Exemple de script.js
document.addEventListener("DOMContentLoaded", function() {
    let objetDom = {
        element: document.getElementById("monElement"),
        updateText: function(newText) {
            this.element.innerText = newText;
        }
    };

    objetDom.updateText("Nouveau texte via objet JavaScript");
});



// script.js
document.addEventListener("DOMContentLoaded", function() {
    let titreObjet = {
        titreElement: document.getElementById("titre"),
        changeTitre: function(nouveauTitre) {
            this.titreElement.textContent = nouveauTitre;
        }
    };

    titreObjet.changeTitre("Nouveau Titre avec Objet JavaScript");
});

// script.js
document.addEventListener("DOMContentLoaded", function() {
    usrPersonne.direBonjour();
});

