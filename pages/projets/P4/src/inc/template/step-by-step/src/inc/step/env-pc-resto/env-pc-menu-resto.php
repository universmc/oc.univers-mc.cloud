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
.menu-category {
  width: 90%;
  margin-bottom: 20px;
}

@keyframes fade-in {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.menu-category {
  width: 90%;
}
.menu-category:nth-child(1) {
  animation: fade-in 0.2s ease-in-out;
}
.menu-category:nth-child(2) {
  animation: fade-in 0.5s ease-in-out;
}
.menu-category:nth-child(3) {
  animation: fade-in 0.9s ease-in-out;
}
        </code></pre>
    </div>

    <!-- Bloc Résultat -->
    <div class="pc-resultat">
        <div class="windows-resultat">
        <div class="menu-ohmyfood-content">
                <!-- Section Entrée -->
                <div class="menu-category entrees animation">
            <div class="menu">
            <h2>ENTREES
            <span class="ln"></span></h2>
            </div>  
            <div class="card-item fade-in">
                <span class="card-item__name">Ravioles de foie gras</span>
                <span class="card-item__desc">Accompagnées de leur crème à la truffe</span>
                <!-- value could be a price for instance -->
                <span class="card-item__value">25€</span>
                <span class="card-item__select">
                  <i class="fas fa-check-circle"></i>
                </span>
            </div>
            <div class="card-item fade-in">
                <span class="card-item__name">Caviar osciètre</span>
                <span class="card-item__desc">Sur blini à la farine de blé noir</span>
                <!-- value could be a price for instance -->
                <span class="card-item__value">35€</span>
                <span class="card-item__select">
                  <i class="fas fa-check-circle"></i>
                </span>
            </div>
            <div class="card-item fade-in">
                <span class="card-item__name">Homard et espuma de potiron</span>
                <span class="card-item__desc">Marinés aux zestes d'orange</span>
                <!-- value could be a price for instance -->
                <span class="card-item__value">20€</span>
                <span class="card-item__select">
                  <i class="fas fa-check-circle"></i>
                </span>
            </div>
            <div class="card-item fade-in">
                <span class="card-item__name">Foie gras de canard cuit entier</span>
                <span class="card-item__desc">Confiture de figue et pain toasté</span>
                <!-- value could be a price for instance -->
                <span class="card-item__value">35€</span>
                <span class="card-item__select">
                  <i class="fas fa-check-circle"></i>
                </span>
            </div>

                </div>

                <!-- Section Plat -->
                <div class="menu-category plats animation">
                    <div class="menu">
                    <h2>PLATS<span class="ln"></span></h2>
                </div>
                <!-- section Plat -->
                <div class="card-item fade-in">
                <span class="card-item__name">Noix de coquilles Saint-Jacques</span>
                <span class="card-item__desc">Sur lit de purée de céleri-rave</span>
                <!-- value could be a price for instance -->
                <span class="card-item__value">40€</span>
                <span class="card-item__select">
                  <i class="fas fa-check-circle"></i>
                </span>
                </div>
                <div class="card-item fade-in">
                <span class="card-item__name">Langoustine poêlée</span>
                <span class="card-item__desc">Purée de patate douce</span>
                <!-- value could be a price for instance -->
                <span class="card-item__value">35€</span>
                <span class="card-item__select">
                  <i class="fas fa-check-circle"></i>
                </span>
                </div>
                <div class="card-item fade-in">
                <span class="card-item__name">Mijoté de queue de bœuf</span>
                <span class="card-item__desc">Et riz sauvage aux zestes de citron</span>
                <!-- value could be a price for instance -->
                <span class="card-item__value">44€</span>
                <span class="card-item__select">
                  <i class="fas fa-check-circle"></i>
                </span>
                </div>
            </div>
            <!-- Section Dessert -->
            <div class="menu-category desserts animation">
            <div class="menu">
            <h2>DESSERTS<span class="ln"></span></h2>
            </div>
            <!-- section Dessert -->
            <div class="card-item fade-in">
                <span class="card-item__name">Macaron noisette et chocolat</span>
                <span class="card-item__desc">Glace au caramel brun et sel de Guérande</span>
                <!-- value could be a price for instance -->
                <span class="card-item__value">18€</span>
                <span class="card-item__select">
                <i class="fas fa-check-circle"></i>
                </span>
            </div>
            <div class="card-item fade-in">
                <span class="card-item__name">Baba au rhum revisité </span>
                <span class="card-item__desc">Avec son coulis de citron</span>
                <!-- value could be a price for instance -->
                <span class="card-item__value">22€</span>
                <span class="card-item__select">
                <i class="fas fa-check-circle"></i>
                </span>
            </div>
            <div class="card-item fade-in">
                <span class="card-item__name">Tarte au citron meringuée</span>
                <span class="card-item__desc">Déstructurée</span>
                <!-- value could be a price for instance -->
                <span class="card-item__value">23€</span>
                <span class="card-item__select">
                <i class="fas fa-check-circle"></i>
                </span>
            </div>

            </div>
        </div>
        </div>
    </div>
</div>
<div class="footer-pc">[SECLECTOR][HTML]</div>
</div>

</article>
<!-- Stylisation des Composants END-->