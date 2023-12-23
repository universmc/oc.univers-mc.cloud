<div class="step5_HTML-CSS">
    <!-- Section Sommaire -->
    <section id="sommaire">
        <h2>INDEX en Mobile fist</h2>
        <ul>
            <li>Briefing Chartre Graphique</li>
            <li>Balisage Html & attributs css</li>
            <li>annimation SASS/li>
            
        </ul>
    </section>

    <!-- Section Développement -->
    <section id="developpement">
        <article class="chatre-graphique">
        <h2>Briefing Chartre Graphique</h2>
    </article>
            <!-- Structure HTML Globale -->
        <article id="structure-html-globale">
            <h3>Structure HTML Globale</h3>
            <p>
                Description de la structure HTML globale, y compris l'utilisation des balises sémantiques telles que les <code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>dans  <code>&lt;header&gt;</code>, <code>&lt;main&gt;</code>, et <code>&lt;footer&gt;</code>.
            </p>
            <p>
                Explication du balisage des sections principales, comme la barre de navigation, la section de contenu principal, et le pied de page. Mention des éléments HTML spécifiques utilisés dans chaque section.
            </p>
            <!-- Exemples de code HTML pour les sections principales -->
            <div class="ohmyfood-pc-editor">
                <div class="fonction-mockup">
                    <img src="assets/img/markup/dev-mockup.png" alt="mockup">
                </div>
                <div class="pc-html">
                <h3>HTML</h3>
                    <pre>
<code>
&lt;body&gt;
    &lt;!--composant loader --&gt;
    &lt;div id="overlay" class="hidden"&gt;
        &lt;div id="loader" class="hidden"&gt;&lt;/div&gt;
    &lt;/div&gt;    
    &lt;header&gt; 
        &lt;section class="logo-header"&gt;
            &lt;img src="assets/img/logo/ohmyfood@2x.svg" alt="logo-Ohmyfood"/&gt;
        &lt;/section&gt;
        &lt;section class="location"&gt;
            &lt;span class="location-icon-container"&gt;
                &lt;i class="fa-solid fa-location-dot icon"&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span&gt;Paris, Belleville&lt;/span&gt;    
        &lt;/section&gt;
        &lt;section class="hero-ban"&gt;
            &lt;h2&gt;Reservez le menu qui vous convient&lt;/h2&gt;
            &lt;p&gt;Découvrez des restaurants d’exception, sélectionnés par nos soins&lt;/p&gt;
            &lt;button class="hero-btn"&gt;Explorer nos restaurants&lt;/button&gt;
        &lt;/section&gt; 
    &lt;/header&gt;

    &lt;main&gt;
        &lt;section class="fonctionnement"&gt;
            &lt;div class="row"&gt;
            &lt;span class="titre"&gt;&lt;strong&gt;Fonctionnement&lt;/strong&gt;&lt;/span&gt;
            &lt;div class="btn-container"&gt;
                &lt;article class="btn"&gt;                            
                    &lt;div class="F-numbers"&gt;
                        &lt;span class="F-number"&gt;1&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;button class="btn-class-f"&gt;
                        &lt;a class="btn-arcticle"&gt;
                            &lt;i class="fa-solid fa-mobile-screen"&gt;&lt;/i&gt;
                            &lt;span&gt;&lt;strong&gt;Choisisser un restaurant&lt;/strong&gt;&lt;/span&gt;
                        &lt;/a&gt;
                    &lt;/button&gt;
                &lt;/article&gt;
                &lt;article class="btn"&gt;                                
                    &lt;div class="F-numbers"&gt;
                    &lt;span class="F-number"&gt;2&lt;/span&gt;
                &lt;/div&gt;
                &lt;button class="btn-class-f"&gt;
                    &lt;i class="fa-solid fa-list"&gt;&lt;/i&gt;
                    &lt;span&gt;&lt;strong&gt;Composez votre menu&lt;/strong&gt;&lt;/span&gt;
                &lt;/button&gt;
                &lt;/article&gt;
                &lt;article class="btn"&gt;                                
                    &lt;div class="F-numbers"&gt;
                    &lt;span class="F-number"&gt;3&lt;/span&gt;
                &lt;/div&gt;
            &lt;button class="btn-class-f"&gt;
                &lt;i class="fa-solid fa-store"&gt;&lt;/i&gt;
                &lt;span&gt;&lt;strong&gt &#8203;``【oaicite:0】``&#8203;

</code>
</pre>
                </div>
                <div class="pc-css">
        <h3>CSS</h3>
<pre><code>
/* ***************** */
/*     GENERAL       */
/* ***************** */
* {
  font-family: Roboto, sans-serif;
}

:root {
  --fontNew: #99E2D0;
  --new: #008766;
  --Blue: #89C8FA;
  --Blue-2: #003A68;
  --Primary: #9356DC;
  --bg-grey: #EAEAEA;
  --body: white;
}

html, body {
  /* LAYOUT */
  min-height: 100vh;
  min-width: 100vh;
  margin: 0;
  padding: 0;
}

@keyframes hideOverlay {
  0% {
    z-index: 2;
  }
  100% {
    z-index: -1;
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
  z-index: 2;
  cursor: pointer;
}
#overlay.hidden {
  animation: hideOverlay 3s linear forwards;
}
#overlay #loader {
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
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/* ***************** */
/*      header       */
/* ***************** */
header {
  display: flex;
  flex-direction: column;
  align-items: center;
  min-height: 15vh;
  min-width: 100vh;
  background-color: #F6F6F6;
  justify-content: center;
}

/* logo-header */
.logo-header {
  min-height: 10%;
  min-width: 100%;
  align-items: center;
  text-align: center;
  background-color: white;
}

.logo-header img {
  min-width: 200px;
  margin-top: 10px;
  margin-bottom: 10px;
  min-height: 60%;
  object-fit: cover;
  align-items: center;
}

/* Location */
.location {
  min-height: 10vh;
  min-width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  background-color: #EAEAEA;
}

.location-icon-container {
  width: 32px;
}

/* hero ban */
.hero-ban {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  text-align: center;
  align-items: center;
  height: 80%;
  min-width: 90%;
  background-color: #F6F6F6;
  padding-top: 30px;
  padding-bottom: 40px;
}

.hero-ban h2 {
  margin: 0;
  width: 50%;
  font-size: 24px;
}

.hero-bon p {
  margin: 0;
  width: 50%;
  font-size: 18px;
  padding-bottom: 30px;
}

.hero-btn {
  /* LAYOUT */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border-radius: 25px;
  min-width: 200px;
  min-height: 40px;
  background: linear-gradient(193deg, #9356DC -11.44%, #FF79DA 123.93%);
  box-shadow: 0 8px 16px rgba(24, 23, 23, 0.1);
  border-color: transparent;
  /* FONT */
  color: white;
}
.hero-btn:hover {
  background: linear-gradient(201deg, #FF79DA -5.2%, #9356DC 110.74%);
  box-shadow: 0 8px 16px rgba(24, 23, 23, 0.1);
}
.hero-btn:active {
  background: linear-gradient(201deg, #FF79DA -5.2%, #9356DC 110.74%);
  box-shadow: 0 8px 16px rgba(24, 23, 23, 0.1);
  min-width: 210px;
  min-height: 50px;
}

/* ***************** */
/*      main         */
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

/* ***************** */
/*      footer       */
/* ***************** */
footer {
  min-width: 100vh;
  height: 7%;
  background-color: #353535;
}

.footer-container {
  display: flex;
  flex-direction: column;
  padding: 20px;
}

.footer-titre {
  font-family: "Shrikhand";
  font-size: 24px;
  color: white;
  display: flex;
  padding-bottom: 15px;
}

.ls-container {
  display: flex;
  color: white;
  flex-direction: column;
}

/* responsive TABLETTE  */
@media (min-width: 768px) and (max-width: 1023px) {
  html, body {
    min-height: 100%;
    max-width: 100%;
  }
  /* ***************** */
  /*      header       */
  /* ***************** */
  header {
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 10%;
    width: 100%;
    background-color: #F6F6F6;
    justify-content: start;
  }
  .logo-header {
    min-height: 15%;
  }
  .logo-header img {
    min-height: 10%;
    width: 200px;
    height: 35px;
  }
  .location {
    min-height: 15%;
    font-size: larger;
  }
  .hero-ban {
    min-width: 100%;
    min-height: 70%;
    margin-top: 20px;
    gap: 15px;
  }
  .hero-btn {
    margin-top: 0px;
    margin-bottom: 22px;
    min-height: 50px;
    min-width: 25%;
  }
  /* ***************** */
  /*      main         */
  /* ***************** */
  main {
    display: flex;
    flex-direction: column;
    min-height: 65%;
  }
  .titre {
    padding-top: 40px;
  }
  /* fonctionnement */
  .fonctionnement {
    min-height: 30%;
  }
  .row {
    align-items: center;
    min-width: 80%;
    min-height: 100%;
    flex-direction: column;
    display: flex;
  }
  .btn-container {
    display: flex;
    flex-direction: row;
    gap: 30px;
    min-width: 100%;
    min-height: 75px;
  }
  article.btn {
    height: 75px;
    width: 70%;
    margin-bottom: 30px;
    border: none;
  }
  .btn-class-f {
    min-height: 75px;
  }
  /* Restaurent */
  .restaurants {
    display: flex;
    min-height: 70%;
  }
  .card-container {
    min-height: 100%;
    min-width: 100%;
    display: grid;
    grid: repeat(2, 50%)/auto-flow 48%;
    justify-content: center;
    align-items: center;
    gap: 40px;
    padding-bottom: 60px;
  }
  .card {
    min-height: 90%;
    min-width: 100%;
  }
  /* ***************** */
  /*      footer       */
  /* ***************** */
  footer {
    display: flex;
    justify-content: end;
  }
  .footer-container {
    display: flex;
    width: 80%;
    flex-direction: row;
    justify-content: space-between;
  }
  .ls-container {
    display: flex;
    flex-direction: row;
    gap: 20px;
    margin: 10px;
    order: 1;
  }
  .footer-titre {
    order: 2;
  }
}
/* responsive DESKTOP */
@media (min-width: 1023px) {
  html, body {
    min-height: 100%;
    min-width: 100%;
  }
  /* ***************** */
  /*      header       */
  /* ***************** */
  html, body {
    min-height: 100%;
    max-width: 100%;
  }
  /* ***************** */
  /*      header       */
  /* ***************** */
  header {
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 10%;
    width: 100%;
    background-color: #F6F6F6;
    justify-content: start;
  }
  .logo-header {
    min-height: 15%;
  }
  .logo-header img {
    min-height: 10%;
    width: 200px;
    height: 35px;
  }
  .location {
    min-height: 15%;
    font-size: larger;
  }
  .hero-ban {
    min-width: 100%;
    min-height: 70%;
    margin-top: 20px;
    gap: 15px;
  }
  .hero-btn {
    margin-top: 0px;
    margin-bottom: 22px;
    min-height: 50px;
    min-width: 25%;
  }
  /* ***************** */
  /*      main         */
  /* ***************** */
  main {
    display: flex;
    flex-direction: column;
    min-height: 65%;
  }
  .titre {
    padding-top: 40px;
  }
  /* fonctionnement */
  .fonctionnement {
    min-height: 30%;
  }
  .row {
    align-items: center;
    min-width: 80%;
    min-height: 100%;
    flex-direction: column;
    display: flex;
  }
  .btn-container {
    display: flex;
    flex-direction: row;
    gap: 30px;
    min-height: 75px;
    min-width: 100%;
    padding-bottom: 30px;
    padding-top: 30px;
  }
  article.btn {
    height: 75px;
    width: 70%;
    margin-bottom: 30px;
    border: none;
  }
  .btn-class-f {
    min-height: 75px;
  }
  /* Restaurent */
  .restaurants {
    display: flex;
    min-height: 70%;
  }
  .card-container {
    min-height: 100%;
    min-width: 100%;
    display: grid;
    grid: repeat(2, 50%)/auto-flow 48%;
    justify-content: center;
    align-items: center;
    padding-bottom: 60px;
    padding-top: 30px;
    gap: 30px;
  }
  .card {
    min-height: 90%;
    min-width: 100%;
  }
  /* ***************** */
  /*      footer       */
  /* ***************** */
  footer {
    display: flex;
    min-height: 5%;
    justify-content: end;
  }
  .footer-container {
    display: flex;
    width: 80%;
    flex-direction: row;
    justify-content: space-between;
  }
  .ls-container {
    display: flex;
    flex-direction: row;
    gap: 20px;
    margin: 10px;
    order: 1;
  }
  .footer-titre {
    order: 2;
  }
}

/*# sourceMappingURL=style.css.map */

</code></pre>
                </div>
                <div class="mockup-ohmyfood-img">
                <img class="mockup-ohmyfood-img-conf" src="assets/img/mockup/mockup-mobil.png" alt="img-mockup-mobile">

                </div>    
            </div>         
        </article>



<!-- Application des Styles de Base index -->

<!-- Application des Styles de Base HEADER -->
<?php include 'env-pc-header-ohmyfood.php'; ?>


<!-- Application des Styles MAIN -->
<?php include 'env-pc-main-ohmyfood.php'; ?>


<!-- Application des Styles de Base FOOTER -->
<?php include 'env-pc-footer-ohmyfood.php'; ?>


<!-- Application des Styles de Base index -->






        <!-- Techniques CSS Avancées -->
        <article id="techniques-css-avancees">
            <h3>Annimation CSS page d'acceuil</h3>
            <p>
                Présentation des techniques CSS avancées utilisées, telles que les flexbox, grid, et les pseudo-éléments pour améliorer l'expérience utilisateur.
            </p>
            <?php include 'env-pc-hero-ban-btn.php'; ?>
            <!-- Exemples de code CSS pour les techniques avancées -->

            <?php include 'env-pc-card.php'; ?>

            <?php include 'env-pc-loader.php'; ?>
            
        </article>
    </section>

    <!-- Section Conclusion -->
    <section id="conclusion">
        <h2>Conclusion sur les Attributs CSS</h2>
        <p>
            Synthèse sur l'importance des attributs CSS dans la création d'une expérience utilisateur riche et visuellement attrayante pour OhMyFood.
        </p>
        <div class="github-instruction">
            <pre>
            <p class="terminal">terminal intégré</p>
            <button class="btn-lang"><img class="icon-lang" src="assets/img/hb/github.png" alt=""><span><i class="fa-solid fa-arrow-right"></i></span>GIT HUB</button>
                <code> > git add . </code>
                <code> > git commit -m "initial-CSS"</code>
                <code> > git push</code>
            <pre>
        </div>
    </section>
</div>
