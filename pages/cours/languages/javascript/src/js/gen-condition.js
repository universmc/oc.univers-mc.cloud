let sommaireIfs = [
    {
        titre: "Introduction aux Conditions",
        lien: "#introduction-ifs",
        meta: { /* Metadonnées pour cette section */ }
    },
    {
        titre: "Syntaxe des Instructions Conditionnelles",
        lien: "#syntaxe-instructions-conditionnelles",
        meta: { /* Metadonnées pour cette section */ }
    },
    {
        titre: "Conditions Composées",
        lien: "#conditions-composees",
        meta: { /* Metadonnées pour cette section */ }
    },
    {
        titre: "Switch et Cas Multiples",
        lien: "#switch-cas-multiples",
        meta: { /* Metadonnées pour cette section */ }
    },
    {
        titre: "Conditions Ternaires",
        lien: "#conditions-ternaires",
        meta: { /* Metadonnées pour cette section */ }
    },
    {
        titre: "Exemples Pratiques",
        lien: "#exemples-pratiques",
        meta: { /* Metadonnées pour cette section */ }
    },
    {
        titre: "Exercices",
        lien: "#exercices",
        meta: { /* Metadonnées pour cette section */ }
    }
];

function genererSections() {
    let contenuHTML = "";
    sommaireIfs.forEach(section => {
        contenuHTML += `<section id="${section.lien.substring(1)}">
                            <article>
                                <h2>${section.titre}</h2>
                                ${section.genererContenu()}
                            </article>
                        </section>`;
    });
    document.getElementById("contenuCoursIFS").innerHTML = contenuHTML;
}

window.onload = genererSections;
