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



// array gen article //

let sommaire = [
    { titre: "Introduction", lien: "#introduction" },
    { titre: "Algorithmes", lien: "#Algorithmes" },
    { titre: "Organisation du Code", lien: "#organisation-code" },
    { titre: "envirenement de devellopement", lien: "#env-dev" },
    { titre: "operateur-logic-syntaxes", lien: "#operateur-logic-syntaxes" },
    { titre: "fonction-boucle", lien: "@fonction-boucle" },
    { titre: "exercices-pratique", lien: "#exercices-pratique" },
    { titre: "conclusion", lien: "#conclusion" },

    // Ajoutez les autres éléments du sommaire ici...
];


function genererContenu() {
    let contenuHTML = "";
    sommaire.forEach(section => {
        contenuHTML += `<section id="${section.lien.substring(1)}">
                            <article>
                                <h2>${section.titre}</h2>
                                <p>Contenu pour la section ${section.titre}...</p>
                                <!-- Ajoutez vos explications et exemples de code ici -->
                            </article>
                        </section>`;
    });
    document.getElementById("contenuCours").innerHTML = contenuHTML;
}

window.onload = genererContenu;