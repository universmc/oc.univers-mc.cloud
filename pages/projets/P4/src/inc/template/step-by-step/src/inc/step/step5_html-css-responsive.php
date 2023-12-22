<div class="step6_Markup">
    <!-- Section Sommaire -->
    <section id="sommaire">
        <h2>Sommaire - Balisage HTML d'OhMyFood</h2>
        <ul>
            <li>Structure HTML Globale</li>
            <li>Balisage des Sections Principales</li>
            <li>Éléments HTML Spécifiques</li>
        </ul>
    </section>

    <!-- Section Développement -->
    <section id="developpement">
        <h2>Présentation du Balisage HTML</h2>

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
                    <div class="pc-header">
                    <h3>[header]</h3>
                        <img src="assets/img/markup/dev-header.png" alt="mockup">
                    </div>
                    <div class="pc-main">
                    <h3>[main]</h3>
                        <img src="assets/img/markup/dev-main.png" alt="mockup">
                    </div>
                    <div class="pc-footer">
                    <h2>[footer]</h2>
                        <img src="assets/img/markup/dev-footer.png" alt="mockup">
                    </div>
                </div>    
            </div>         
        </article>

        <!-- Balisage des Sections Principales -->

        <!-- Éléments HTML Spécifiques -->
        <article id="elements-html-specifiques">
            <h3>Éléments HTML Spécifiques</h3>
            <p>
                Détail des éléments HTML spécifiques comme les boutons, les cartes de restaurant, et autres composants interactifs. Discussion sur leur rôle et leur intégration dans la structure globale.
            </p>
            <!-- Exemples de code HTML pour les éléments spécifiques -->
            <div class="ohmyfood-article-btn">
                <div>
                    <div class="ohmyfood-btn-1">
                    <h4> Article button</h4>
                        <article class="btn-1">
                        <button class="hero-btn">Explorer nos restaurants</button>
                        </article>
                        <div class="pc-html">
                        <img src="assets/img/markup/ohmyfood-btn-1.png" alt="markup-btn">
                        </div>
                    </div>
                </div>
                <div>
                <div class="ohmyfood-btn-1">
                <h4> Article button</h4>
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
                    <div class="pc-html">
                        <img src="assets/img/markup/markup-btn.png" alt="markup-btn">
                    </div>
                </div>
            </div>
            </div>
            <div class="ohmyfood-article-card">
            <div class="ohmyfood-card">
            <h4> Article card</h4>
            <article class="card">  
                    <a href="restaurants/Menu-La-palette-du-gout.html" class="card">
                        <div class="img-card-container">
                        <img src="assets/img/ohmyfood/1.jpg" alt="palette"/>
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
            <img src="assets/img/markup/markup-card-index.png" alt="markup-btn">
            </div>
        </article>
    </section>

    <!-- Section Conclusion -->
    <section id="conclusion">
        <h2>Conclusion sur le Balisage HTML</h2>
        <p>
            Récapitulatif sur l'importance d'un balisage HTML sémantique et structuré pour l'accessibilité et l'expérience utilisateur. Lien avec la prochaine étape, qui est l'application des styles CSS.
        </p>
        <div class="github-instruction">
            <pre>
            <p class="terminal">terminal intégré</p>
            <button class="btn-lang"><img class="icon-lang" src="assets/img/hb/github.png" alt=""><span><i class="fa-solid fa-arrow-right"></i></span>GIT HUB</button>
                <code> > git add . </code>
                <code> > git commit -m "initial-HTML"</code>
                <code> > git push</code>
            <pre>
        </div>
    </section>
</div>
