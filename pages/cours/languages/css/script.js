// Récupérez les éléments du formulaire et de la prévisualisation
const cssForm = document.getElementById('css-settings-form');
const cssPreview = document.getElementById('preview');

// Écoutez l'événement "click" sur le bouton "Appliquer les paramètres"
document.getElementById('applyBtn').addEventListener('click', function () {
    // Récupérez les valeurs du formulaire ici et générez le code CSS correspondant
    const mediaQuery = cssForm.querySelector('[name="media_query"]').value;
    const blockSize = cssForm.querySelector('#blockSize').value;
    const display = cssForm.querySelector('[name="display"]').value;
    const color = cssForm.querySelector('#color').value;
    const border = cssForm.querySelector('#border').value;
    const fontSize = cssForm.querySelector('#fontSize').value;
    const targetComponent = cssForm.querySelector('[name="target_component"]').value;

    // Générez le code CSS en fonction des valeurs du formulaire
    const cssCode = generateCSSCode(mediaQuery, blockSize, display, color, border, fontSize, targetComponent);

    // Appliquez le code CSS généré à la prévisualisation
    cssPreview.style.cssText = cssCode;
});

// Fonction pour générer le code CSS en fonction des valeurs du formulaire
function generateCSSCode(mediaQuery, blockSize, display, color, border, fontSize, targetComponent) {
    // Générez le code CSS en fonction des paramètres
    let cssCode = '';

    // Appliquez les valeurs au style de la prévisualisation
    cssCode += `width: ${blockSize};\n`;
    cssCode += `height: ${blockSize};\n`;
    cssCode += `background-color: ${color};\n`;
    cssCode += `border: ${border};\n`;
    cssCode += `font-size: ${fontSize};\n`;
    cssCode += `display: ${display};\n`;

    // Appliquez le media query
    cssCode += `@media (${mediaQuery}) {\n`;
    cssCode += `    /* Styles spécifiques au media query ici */\n`;
    cssCode += `}\n`;

    // Appliquez le style au composant cible (header, footer, etc.) si nécessaire
    if (targetComponent === 'header') {
        cssCode += 'header {\n';
        cssCode += `    /* Styles pour le composant "header" */\n`;
        cssCode += '}\n';
    } else if (targetComponent === 'footer') {
        cssCode += 'footer {\n';
        cssCode += `    /* Styles pour le composant "footer" */\n`;
        cssCode += '}\n';
    }
    // Récupérez les éléments du formulaire et de la prévisualisation de la section 3
const cssFormSection3 = document.getElementById('css-settings-form-section3');
const cssSelectorInput = document.getElementById('css-selector');
const cssPreviewSection3 = document.getElementById('preview-section3');

// Écoutez l'événement "click" sur le bouton "Appliquer les paramètres" de la section 3
document.getElementById('applyBtn-section3').addEventListener('click', function () {
    // Récupérez le sélecteur CSS saisi par l'utilisateur
    const cssSelector = cssSelectorInput.value;

    // Appliquez le sélecteur CSS à la prévisualisation
    applyCSSSelector(cssSelector);
});

// Fonction pour appliquer le sélecteur CSS à la prévisualisation
function applyCSSSelector(selector) {
    // Assurez-vous que le sélecteur n'est pas vide
    if (selector.trim() === '') {
        return;
    }

    // Utilisez querySelectorAll pour sélectionner les éléments correspondants au sélecteur
    const selectedElements = cssPreviewSection3.querySelectorAll(selector);

    // Appliquez des styles aux éléments sélectionnés
    selectedElements.forEach((element) => {
        // Vous pouvez ajouter des styles ici, par exemple :
        element.style.border = '2px solid red';
        element.style.backgroundColor = 'lightyellow';
    });
}


    return cssCode;
}
