        <!-- Stylisation des Composants Spécifiques -->
        <article id="stylisation-composants">
            <h3>Stylisation des Composants BUTTON Ohmyfood</h3>
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
/* Exemple de CSS pour un card _  */
/* CARD */
.card-item {
  width: 90%;
  margin-bottom: 20px;
  background-color: white;
  display: flex;
  flex-direction: column;
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 1px 5px #787878;
  position: relative;
  overflow-x: hidden;
  white-space: nowrap;
}
.card-item__name, .card-item__desc {
  overflow-x: hidden;
  text-overflow: ellipsis;
  transition: width 0.5s;
}
.card-item__name {
  font-weight: bold;
  font-size: 20px;
  width: 100%;
}
.card-item__desc {
  line-height: 2;
  width: 100%;
}
.card-item__value {
  position: absolute;
  right: 6%;
  bottom: 15%;
  font-weight: bold;
  transform: translate(0);
  transition: transform 0.5s;
}
.card-item__select {
  position: absolute;
  top: 0;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 70px;
  height: 100%;
  background-color: #99E2D0;
  transform: translateX(100%);
  transition: transform 0.5s;
}
.card-item__select i {
  font-size: 23px;
  color: white;
  transition: transform 0.4s;
}
.card-item:hover {
  cursor: pointer;
}
.card-item:hover > .card-item__name {
  width: 80%;
}
.card-item:hover > .card-item__desc {
  width: 80%;
}
.card-item:hover > .card-item__value {
  transform: translateX(-220%);
}
.card-item:hover > .card-item__select {
  transform: translateX(0);
}
.card-item:hover > .card-item__select i {
  transform: rotate(360deg);
}

        </code></pre>
    </div>

    <!-- Bloc Résultat -->
    <div class="pc-resultat">
        <div class="windows-resultat">
        <div class="card-item fade-in">
                <span class="card-item__name">Ravioles de foie gras</span>
                <span class="card-item__desc">Accompagnées de leur crème à la truffe</span>
                <!-- value could be a price for instance -->
                <span class="card-item__value">25€</span>
                <span class="card-item__select">
                  <i class="fas fa-check-circle"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="footer-pc">[SECLECTOR][HTML]</div>
</div>

</article>
<!-- Stylisation des Composants END-->