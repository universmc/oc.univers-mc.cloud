<div class="step7_AttribCSS">
    <!-- Section Sommaire -->
    <section id="sommaire">
        <h2>Sommaire - Attributs CSS d'OhMyFood</h2>
        <ul>
            <li>Briefing Chartre Graphique</li>
            <li>Balisage Html sementique</li>
            <li>Stylisation CSS</li>
            
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
                <div class="pc-css">______</div>
                <div class="mockup-ohmyfood-img">
                <img src="assets/img/mockup/mockup-mobil.png" alt="img-mockup-mobile">

                </div>    
            </div>         
        </article>



<!-- Application des Styles de Base index -->

<!-- Application des Styles de Base HEADER -->
<?php include 'env-pc-header-ohmyfood.php'; ?>
<?php include 'env-pc-hero-ban-btn.php'; ?>

<!-- Application des Styles MAIN -->
<?php include 'env-pc-main-ohmyfood.php'; ?>
<?php include 'env-pc-btn-fonction.php'; ?>
<?php include 'env-pc-card.php'; ?>


<!-- Application des Styles de Base FOOTER -->
<?php include 'env-pc-footer-ohmyfood.php'; ?>


<!-- Application des Styles de Base index -->






        <!-- Techniques CSS Avancées -->
        <article id="techniques-css-avancees">
            <h3>Techniques CSS Avancées</h3>
            <p>
                Présentation des techniques CSS avancées utilisées, telles que les flexbox, grid, et les pseudo-éléments pour améliorer l'expérience utilisateur.
            </p>
            <!-- Exemples de code CSS pour les techniques avancées -->
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
