<!-- Stylisation des Composants Spécifiques -->
<article id="stylisation-composants">
<h3>Bloc sémentique [HEADER]</h3>
    <p>Explication de la manière dont les composants du header, tels que le logo, la localisation, et la bannière héroïque, sont stylisés.</p>
            <!-- Exemples de code CSS pour les composants spécifiques -->

    <div class="pc-html-css-result">
        <div class="header-html-css">@querie</div>
            <div class="main-pc-env">
    <!-- Bloc HTML -->
    <div class="pc-html">
        <h3>HTML</h3>
        <pre><code>
&lt;!-- Exemple de balisage HTML pour le header --&gt;
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
                </code></pre>
    </div>

    <!-- Bloc CSS -->
    <div class="pc-css">
        <h3>CSS</h3>
        <pre><code>
/* Exemple de CSS Header */
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
        </code></pre>
    </div>

    <!-- Bloc Résultat -->
    <div class="pc-resultat">
        <div class="windows-resultat">
            <div>
            <section class="logo-header">
                <img src="assets/img/logo/ohmyfood@2x.svg" alt="logo-Ohmyfood"/>
            </section>
            <section class="location">
                <span class="location-icon-container">
                    <i class="fa-solid fa-location-dot icon"></i>
                </span>
                <span>Paris, Belleville</span>    
            </section>
            <section class="hero-ban">
                <h2>Reservez le menu qui vous convient</h2>
                <p>Découvrez des restaurants d’exception, sélectionnés par nos soins</p>
                <button class="hero-btn">Explorer nos restaurants</button>
            </section> 
        </div>
        </div>
    </div>
</div>
<div class="footer-pc"><p>On peut observer la structure ou layout le header qu'il est constitué de trois grandes sections donc une première section contient le logo le deuxième section nommée location et la troisième section et qui contient le héros bannière</p></div>
</div>

</article>
<!-- Stylisation des Composants END-->