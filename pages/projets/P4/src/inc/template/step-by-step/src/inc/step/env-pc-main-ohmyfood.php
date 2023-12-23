<!-- Stylisation des Composants Spécifiques -->
<article id="stylisation-composants">
            <h3>Bloc sementique [MAIN]</h3>
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
&lt;!-- Exemple de balisage HTML pour un bouton --&gt;
&lt;button class="btn"&gt;Cliquez-moi&lt;/button&gt;
        </code></pre>
    </div>

    <!-- Bloc CSS -->
    <div class="pc-css">
        <h3>CSS</h3>
        <pre><code>
/* ***************** */
/*      main           */
/* ***************** */
main {
  min-height: 78%;
  min-width: 100vh;
}

.row {
  min-width: 80vh;
  margin-bottom: 20px;
}

/* section fonctionnement */
.fonctionnement {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  min-height: 25%;
  min-width: 100%;
  background-color: white;
}

.titre {
  height: 30px;
  width: 100%;
  margin-left: 5px;
}

.btn-container {
  display: flex;
  flex-direction: column;
  min-height: 90%;
  min-width: 100%;
  align-items: center;
  justify-content: space-evenly;
  gap: 30px;
  padding-top: 30px;
}

article.btn {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 75px;
  width: 100%;
}

.F-number {
  display: flex;
  position: relative;
  border-radius: 50%;
  left: 12px;
  width: 24px;
  height: 24px;
  background-color: #9356DC;
  color: white;
  align-items: center;
  justify-content: center;
}

.btn-class-f {
  /* LAYOUT */
  display: flex;
  align-items: center;
  justify-content: center;
  height: 75px;
  width: 100%;
  padding-top: 30px;
  padding-bottom: 30px;
  gap: 30px;
  border-radius: 20px;
  box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.15);
  gap: 20px;
  /* FONT */
  background-color: #EAEAEA;
}

.btn-article {
  display: flex;
}
.btn-article:hover {
  background-color: #EAEAEA;
}

.fa-soild {
  color: #7e7e7e;
}

/*   restaurants     */
.restaurants {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  height: 75%;
  background-color: #F6F6F6;
}

.card-container {
  display: flex;
  flex-direction: column;
  justify-items: center;
  justify-content: space-around;
  align-items: center;
  width: 100%;
  height: 90%;
  gap: 30px;
  padding-top: 20px;
  padding-bottom: 20px;
}

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
        <div>
            <section class="fonctionnement">
              <div class="row">
              <span class="titre"><strong>Fonctionnement</strong></span>
              <div class="flexbox-ohmyfood">
                <article class="btn">                            
                    <div class="F-numbers">
                        <span class="F-number">1</span>
                    </div>
                    <button class="btn-class-f">
                        <a class="btn-arcticle">
                            <i class="fa-solid fa-mobile-screen"></i>
                            <span><strong>Choisisser un restaurant</strong></span>
                        </a>
                    </button>
                </article>
                <article class="btn">                                
                    <div class="F-numbers">
                    <span class="F-number">2</span>
                </div>
                <button class="btn-class-f">
                    <i class="fa-solid fa-list"></i>
                    <span><strong>Composez votre menu</strong></span>
                </button>
                </article>
                <article class="btn">                                
                    <div class="F-numbers">
                    <span class="F-number">3</span>
                </div>
              <button class="btn-class-f">
                <i class="fa-solid fa-store"></i>
                <span><strong>Dégustez au restaurant</strong></span>
              </button>
                </article>
              </div>
              </div>
            </section>
            <section class="restaurants">
            <div class="row">
                <span class="titre"><strong>Restaurants</strong></span>
            <div class="flexbox-card-container">
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
                <article class="card">                    
                    <a href="restaurants/Menu-A-la-francaise.html">
                        <div class="img-card-container">
                        <img src="assets/img/restaurants/a-la-francaise.jpg" alt="fr"/>
                    </div>
                    <div class="info-container">
                        <div class="info-rows"> 
                            <span class="card-titre"><h2>À la Française</h2></span>
                            <span class="card-sous-titre">Cité Rouge</span>
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
                <article class="card"> 
                <a href="restaurants/Menu-La-note-enchantee.html">
                    <div class="img-card-container">
                        <img src="assets/img/restaurants/la-note-enchante.jpg" alt="notes">
                        <div class="btn-new">Nouveau</div>
                    </div>
                    <div class="info-container">
                        <div class="info-rows">    
                            <span class="card-titre"><h2>La Note Enchantée</h2></span>
                            <span class="card-sous-titre">Charonne</span>
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
                <article class="card">
                    <a href="restaurants/Menu-Le-delice-des-sens.html">
                        <div class="img-card-container">
                            <img src="assets/img/restaurants/delice-des-sens.jpg" alt="img-delice-des-sens"/>
                        </div>
                        <div class="info-container">
                            <div class="info-rows">                            
                                <span class="card-titre"><h2>Le Délice des Sene</h2></span>
                                <span class="card-sous-titre">Folie-Méricourt</span>
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
            </section>
            </div>
</div>
    </div>
</div>
<div class="footer-pc">
  <p> On peut observer dans cette section [main] qu'il est constitué de deux grands blocs sémentique une section dédié au fonctionnement qui contient 3 articles buttons et une section dédié au restaurants qui contient 4 articles card</p>
  <p> on peut aussi noter que dans cette section nous utilisons une Flex box pour la version mobile et un attribue Grid pour la version desktop</p>
</div>
</div>

</article>
<!-- Stylisation des Composants END-->