<div class="step3_configuration">
    <!-- Section Sommaire -->
    <section id="sommaire" class="step8_intro">
        <h2>Sommaire <span>Step 3 - Configuration env</span></h2>
        <div class="btn-lang-container">
            <button class="btn-lang"><img class="icon-lang" src="assets/img/vscode-btn.png" alt=""><span><i class="fa-solid fa-arrow-right"></i></span>VSCODE</button>
            <button class="btn-lang"><img class="icon-lang" src="assets/img/hb/github.png" alt=""><span><i class="fa-solid fa-arrow-right"></i></span>GIT HUB</button>
            <button class="btn-lang"><img class="icon-lang" src="assets/img/hb/sass.png" alt=""><span><i class="fa-solid fa-arrow-right"></i></span>SASS</button>
            </div>
    </section>

    <!-- Section Développement -->
    <section id="developpement">
        <h2>Développement de l'Étape</h2>
        <!-- Articles/Contenus pour chaque point du sommaire -->
        <article>
            <div class="ohmyfood-vscode">
                <h3>INIT VSCODE GIT HUB REPERTORY</h3>
                <pre class="terminal-console">
                <p>terminal intégré</p>
                <button class="btn-lang"><img class="icon-lang" src="assets/img/vscode-btn.png" alt=""><span><i class="fa-solid fa-arrow-right"></i></span>VSCODE</button>
                    <code> 
                        > git clone https://github.com/universmc/Ohmyfood
                        > cd ohmyfood
                        > mkdir assets build restaurant
                        > touch index.html restaurants/menu2.html restaurants/menu3.html restaurants/menu4.htm
                        > touch build/sass.scss assets/css/style.css
                    </code>
                <pre>
            </div>
                <div class="step-vscode">
                    <img src="assets/img/git-repertory.png" alt="vscode-screen">
                </div>
        </article>
        <article>
            <h3>INIT GITHUB</h3>
            <div class="ohmyfood-github">
                <div class="github-instruction">
                    <pre>
                    <p>terminal intégré</p>
                    <button class="btn-lang"><img class="icon-lang" src="assets/img/hb/github.png" alt=""><span><i class="fa-solid fa-arrow-right"></i></span>GIT HUB</button>
                        <code> > git add . </code>
                        <code> > git commit -m "initial-commit"</code>
                        <code> > git push</code>
                    <pre>
                </div>
                <div class="step-github">
                    <img src="assets/img/github-screen.png" alt="vscode-screen">
                </div>
            </div>
        </article>
        <article>
            <h3>INIT SASS</h3>
            <div class="ohmyfood-SASS">
            <div class="node-instruction">
                    <pre>
                    <p>terminal intégré</p>
                    <button class="btn-lang"><img class="icon-lang" src="assets/img/hb/sass.png" alt=""><span><i class="fa-solid fa-arrow-right"></i></span>SASS</button>
                        <code> > npm init -y </code>
                        <code> > vi package.json"</code>
                        <code> > -a #scripts "make-sass": "sass --watch build/sass-index.scss assets/css/style.css"</code>
                    <pre>
                </div>
            <div class="step-vscode">
                <img src="assets/img/npm-init-sass.png" alt="sass-screen">
            </div>
            <div>
        </article>
        <!-- Plus d'articles si nécessaire -->
    </section>

    <!-- Section Conclusion -->
    <section id="conclusion">
        <h2>Conclusion de l'Étape</h2>
        <p>
            Conclusion détaillée de l'étape, en résumant les points clés abordés 
            et en introduisant la prochaine étape.
        </p>
        <!-- Lien ou bouton vers la prochaine étape -->
        <a href="step_next.php">Étape Suivante: [Titre de la Prochaine Étape]</a>
    </section>
</div>