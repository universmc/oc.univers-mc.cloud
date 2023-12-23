<!-- Stylisation des Composants card-->
<article id="stylisation-composants">
            <h3>Annimation loader - overlay Ohmyfood</h3>
            <p>
                Explication sur la manière dont les composants spécifiques tels que les boutons, les cartes de restaurants, et les en-têtes sont stylisés.
            </p>
            <!-- Exemples de code CSS pour les composants spécifiques -->

    <div class="pc-html-css-result">
        <div class="header-html-css">@querie</div>
            <div class="main-pc-env">
    <!-- Bloc HTML -->
    <div class="pc-html">
        <h3>HTML</h3>
        <pre><code>
&lt;div id="overlay" class="hidden"&gt;
&lt;div id="loader" class="hidden"&gt;&lt;/div&gt;
&lt;/div&gt;    

        </code></pre>
    </div>

    <!-- Bloc CSS -->
    <div class="pc-css">
        <h3>CSS</h3>
        <pre><code>
/* Exemple de CSS pour un bouton */
// overlay

$overlay-animation-duration: 3s;

@mixin hide-overlay {
  animation: hideOverlay #{$overlay-animation-duration} linear forwards;
}

@keyframes hideOverlay {
  0% {
    z-index: 2; // État initial, overlay visible
  }
  100% {
    z-index: -1; // Après 3 secondes, overlay invisible
  }
}

#overlay {
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 2; // État initial, overlay visible
  cursor: pointer;

  &.hidden {
    @include hide-overlay;
  }

// LOADER

#loader {
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #9356DC;
    border-right: 16px solid #FF79DA;
    border-bottom: 16px solid #99E2D0;
    width: 120px;
    height: 120px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}
}
}

.btn:hover {
    background-color: #ff3a1c;
}
        </code></pre>
    </div>

    <!-- Bloc Résultat -->
    <div class="pc-resultat">
        <div class="windows-resultat">
        <div id="loader2"></div>    
        <div id="overlay" class="hidden">
        <div id="loader" class="hidden"></div>
        </div>    
        </div>
    </div>
</div>
<div class="footer-pc"><p> on peut observer sur le composant Il est constitué de deux blocs un bloc <strong>overlay</strong> qui occupent la totalité Du body et du body sur Z-index d'une durée de trois secondes</p>
<p> Le bloc loader quant à lui est une annimation sur le bordure un cercle avec une animation <strong>rotate</strong> à partir de pseudo class <strong>keyfram transforme</strong> de 0% à 100 sur 360°</p></div>
</div>

</article>
<!-- stylisation card end -->