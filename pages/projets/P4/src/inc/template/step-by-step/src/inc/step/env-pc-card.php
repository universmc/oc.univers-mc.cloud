<!-- Stylisation des Composants card-->
<article id="stylisation-composants">
            <h3>Balisage html et annimation SASS sur le Composants CARD Ohmyfood</h3>
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
&lt;article class=card&gt;
&lt;/article&gt;
        </code></pre>
    </div>

    <!-- Bloc CSS -->
    <div class="pc-css">
        <h3>SASS</h3>
        <pre><code>
/* Exemple de CSS pour un bouton */
.card {
  /* LAYOUT */
  display: flex;
  width: 90%;
  height: 250px;
  justify-content: space-between;
  flex-direction: column;
  align-items: center;
  border: 1px;
  box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.15);
}

.card a {
  text-decoration: none;
  width: 100%;
  height: 100%;
  color: inherit;
}
.card a:hover {
  filter: brightness(1.2);
}

.img-card-container {
  width: 100%;
  height: 65%;
  position: relative;
  display: inline-block;
}

.card img {
  object-fit: cover;
  width: 100%;
  height: 100%;
  border-top-right-radius: 15px;
  border-top-left-radius: 15px;
}

.btn-new {
  position: absolute;
  background-color: #99E2D0;
  color: #008766;
  top: 13px;
  right: 15px;
}

.info-container {
  display: flex;
  width: 100%;
  height: 35%;
  justify-content: space-between;
  background-color: white;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
}

.card-titre h2 {
  font-size: 16px;
}

.info-rows {
  display: flex;
  height: 80%;
  justify-content: space-between;
  flex-direction: column;
  padding-left: 5px;
}

/* BOX HEART ANIMATION */
.heart-box {
  position: relative;
  display: flex;
  width: 25%;
  align-items: center;
  justify-content: center;
  transition: transform(500ms);
}
.heart-box.hover {
  transform: scale(1, 2, 3);
  display: flex;
  font-size: 32px;
  background-color: #9356DC;
  position: absolute;
}

/* span FA REGULAR (FontAwesone ) */
.icon-regular {
  position: absolute;
  font-size: 24px;
}
.icon-regular.hover {
  display: flex;
  font-size: 32px;
  background-color: #9356DC;
  position: absolute;
}

/* span FA SOLID( FontAwesone ) */
.icon-solid {
  position: absolute;
  font-size: 16px;
  color: white;
}
.icon-solid:hover {
  display: flex;
  font-size: 24px;
  transform: scale(1.13);
  color: #9356DC;
}
.icon-solid:visited {
  display: flex;
  font-size: 32px;
  transform: scale(1.13);
  color: #9356DC;
}
.icon-solid:focus {
  color: #9356DC;
}
.icon-solid:active {
  color: #9356DC;
}
        </code></pre>
    </div>

    <!-- Bloc Résultat -->
    <div class="pc-resultat">
        <div class="windows-resultat">
        <article class="card">  
                    <a href="restaurants/Menu-La-palette-du-gout.html" class="card">
                        <div class="img-card-container">
                        <img src="assets/img/restaurants/la-palette-du-gout.jpg" alt="palette"/>
                        <button class="btn-new">Nouveau</button>
                        </div>
                        <div class="info-container">
                        <div class="info-rows">                            
                            <span class="card-titre"><h2>La Palette du Gout</h2></span>
                            <span class="card-sous-titre">Ménilmontant</span>
                        </div>
                        <div class="heart-box">
                            <span class="icon-regular">
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span class="icon-solid">
                                <i class="fa-solid fa-heart"></i>
                            </span>
                        </div>
                        </div>
                    </a>
                </article>
        </div>
    </div>
</div>
<div class="footer-pc"><p> donc on peut observer une source de composants garde une animation au survol de la souris <strong> atribut sass &:hover </strong> Sur l'icône Google FONTASESONE donc on utilise un balisage une balise <strong>span FA REGULAR</strong> Pour afficher un cœur vide et le <strong>span FA SOLID</strong>pour afficher le cœur de couleur en violet</div>
</div>

</article>
<!-- stylisation card end -->