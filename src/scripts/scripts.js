// Demander à l'utilisateur de saisir le titre de la page
var pageTitle = prompt("Veuillez saisir le titre de la page HTML:", "Mon site web");
// Modifier le titre de la page
if (pageTitle) {
    document.title = pageTitle;
}

// Demander à l'utilisateur de saisir un mot-clé pour le référencement
var seoKeyword = prompt("Veuillez saisir un mot-clé pour le référencement:", "HTML, CSS, JavaScript");
// Modifier la balise meta des mots-clés
if (seoKeyword) {
    var metaKeywords = document.querySelector('meta[name="keywords"]');
    if (metaKeywords) {
        metaKeywords.setAttribute("content", seoKeyword);
    }
}