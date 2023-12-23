<div class="step6_HTML-CSS-resto">
    <!-- Section Sommaire -->
    <section id="sommaire">
        <h2>INDEX en Mobile fist</h2>
        <ul>
            <li>Page Menu</li>
            <li>Annimation SASS</li>
        </ul>
    </section>

    <!-- Section Développement -->
    <section id="developpement">
        <article class="chatre-graphique">
        <h2>Page Menu </h2>
            <!-- Structure HTML Globale -->
            <div class="page-menu">
            <img src="assets/img/mockup/mockup-resto-mobil.png" alt="mockup resto">
            <img src="assets/img/mockup/mockup-resto-desktop.png" alt="mockup resto">
            </div>
        </article>
        <article class="dev-content">
        <?php include 'env-pc-resto/env-pc-menu-resto.php'; ?>
        <!-- Application des Styles de Base index -->
        <?php include 'env-pc-resto/env-pc-btn-resto.php'; ?>
        <!-- Application des Styles de Base HEADER -->

        </article>

        <!-- Techniques CSS Avancées -->
    </section>

    <!-- Section Conclusion -->
    <section id="conclusion">
        <h2>Github update</h2>
        <p>
            Synthèse sur l'importance des attributs CSS dans la création d'une expérience utilisateur riche et visuellement attrayante pour OhMyFood.
        </p>
        <div class="github-instruction">
            <pre>
            <p class="terminal">terminal intégré</p>
            <button class="btn-lang"><img class="icon-lang" src="assets/img/hb/github.png" alt=""><span><i class="fa-solid fa-arrow-right"></i></span>GIT HUB</button>
                <code> > git add . </code>
                <code> > git commit -m "annimation-sass-menu"</code>
                <code> > git push</code>
            <pre>
        </div>
    </section>
</div>
