<div class="step3_bulletPoints">
    <h2>Step 3 - Ajout des Bullet Points au Slider</h2>

    <article class="code-implementation">
        <h3>Implémentation des Bullet Points</h3>
        <p>Présentation du code JavaScript utilisé pour ajouter les bullet points au carrousel.</p>
        </code></pre>
        <!-- Représentation visuelle du résultat -->
        <div id="banner">
		    <img class="banner-img" src="Print-it/assets/images/slideshow/slide1.jpg" alt="Banner Print-it">
    
    
		    <div class="arrow_content">
		    	<button id="bouton1" class="arrow_left">
		    	<img src="Print-it/assets/images/arrow_left.png" alt="arrow_left">
		    	</button>
		    	<div class="arrow-content"><p>Impressions tous formats <span>en boutique et en ligne</span></p></div>
		    	<button id="bouton2" class="arrow_right">
		    		<img src="Print-it/assets/images/arrow_right.png" alt="arrow_right">
		    	</button>
		    </div>
		    <div class="dotsContainer"> 
		    	<div class="dots"></div>
		    </div>
	    </div>
        <p>[Insérez une image ou une description du carrousel avec les bullet points]</p>
        <!-- Exemple du code JavaScript -->
        <pre><code>
        // Créez les bullet points (dots) en fonction du nombre de slides
let numberOfSlides = slides.length;
const dotsContainer = document.querySelector('.dots');
for (let i = 0; i < numberOfSlides; i++) {
    const dot = document.createElement('div');
    dot.className = 'dot';
    dotsContainer.appendChild(dot);
}

// Marquez le premier bullet point comme actif
dotsContainer.firstChild.classList.add('dot_selected');
</code></pre>



    </article>

    <article class="bullet-point-explanation">
    <h3>Explication du Script pour les Bullet Points</h3>
    <p>
        <strong>Calcul du Nombre de Slides :</strong><br>
        <pre><code>let numberOfSlides = slides.length;</code></pre>
        Cette ligne utilise 'length' pour calculer le nombre d'éléments dans le tableau 'slides'.
    </p>
    <p>
        <strong>Sélection du Conteneur des Bullet Points :</strong><br>
        <pre><code>const dotsContainer = document.querySelector('.dots');</code></pre>
        Sélectionne l'élément avec la classe 'dots' pour y placer les bullet points.
    </p>
    <p>
        <strong>Création des Bullet Points :</strong><br>
        <pre><code>for (let i = 0; i &lt; numberOfSlides; i++) { ... }</code></pre>
        Une boucle pour créer un 'dot' (bullet point) pour chaque slide.
    </p>
    <p>
        <strong>Création d'un Bullet Point :</strong><br>
        <pre><code>const dot = document.createElement('div');</code></pre>
        Crée un nouvel élément 'div' représentant un bullet point.
    </p>
    <p>
        <strong>Attribution de la Classe au Bullet Point :</strong><br>
        <pre><code>dot.className = 'dot';</code><</pre>
        Attribue la classe 'dot' à chaque élément 'div' créé.
    </p>
    <p>
        <strong>Ajout du Bullet Point au DOM :</strong><br>
        <pre><code>dotsContainer.appendChild(dot);</code></pre>
        Ajoute chaque 'dot' créé au conteneur 'dotsContainer'.
    </p>
    <p>
        <strong>Activation du Premier Bullet Point :</strong><br>
        <pre><code>dotsContainer.firstChild.classList.add('dot_selected');</code></pre>
        Cette ligne sélectionne le premier enfant du conteneur 'dotsContainer', qui est le premier bullet point créé. Ensuite, elle ajoute la classe 'dot_selected'. Cela a pour effet de le rendre visuellement distinct, indiquant qu'il correspond à la première image du carrousel actuellement affichée.
    </p>
</article>

</div>
