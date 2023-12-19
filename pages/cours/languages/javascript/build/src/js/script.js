// script.js
const objetExemple = {
    nom: "Mike",
    direBonjour: function() {
        console.log("Bonjour, je m'appelle " + this.nom);
    }
};
objetExemple.direBonjour();
