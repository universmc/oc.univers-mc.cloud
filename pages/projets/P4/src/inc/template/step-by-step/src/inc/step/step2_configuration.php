<div class="step2_config">
    <article>
    <h2>Step 2 - Configuration de l'Environnement de Développement</h2>
        <p>
            Avant de commencer le projet Ohmyfood, suivez ces étapes pour configurer votre environnement de développement.
        </p>

        <ol>
            <li>
                Clonez le répertoire source du projet à partir de GitHub :
            </li>
        </ol>
        <img src="assets/img/mockup/vscode.png" alt="Image de clonage du répertoire depuis GitHub">
        <pre>
            <code>git clone https://github.com/univers-mmc/ohmyfood.git</code>
        </pre>

            <ol start="2">
                <li>
                    Ouvrez le terminal intégré dans Visual Studio Code (VSCode).
                </li>
            </ol>
            <pre>
                <code>npm init -y</code>
            </pre>
            <img src="chemin/vers/image/init-node-js.png" alt="Image d'initialisation de Node.js">

            <ol start="3">
                <li>
                Ajoutez la commande suivante au package.json pour compiler Sass :
                </li>
            </ol>
            <pre>
                <code>"scripts": {"make-sass": "sass --watch build/sass.scss assets/styles.css"
                    }</code></pre>
                            <img src="chemin/vers/image/install-sass-dependency.png" alt="Image d'installation de la dépendance Sass">

                            <ol start="4">
                                <li>
                                    Créez les répertoires et fichier nécessaires :
                                </li>
                            </ol>
                            <pre><code>mkdir build assets &&&& cd build && touch sass.scss</code></pre>

                            <ol start="5">
                                <li>
                                    Déployez votre première version sur GitHub :
                                </li>
                            </ol>
                            <pre><code>git add .
                    git commit -m "Initial commit"
                    git push -u origin main
                </code>
            </pre>
            </div>
            <div class="code-src">
                    <h3>Resception des sources</h3>
                    <div class="docs">
                        <h4>1.Maquette Prototype Desktop et Mobile</h4>
                        <!-- image figma -->
                        <span class="commit">commentaire et description nlp de la maquette</span>
                    </div>
                    <div class="docs">
                        <h4>text et images</h4>
                        <!-- img du text list flex row list image -->
                    </div>
                    <div class="docs">
                        <h4>Biefing</h4>
                        <span>Chartre graphique :</span> 
                        <button>Telecharger biefing</botton>
                    </div>
                </div>
            </div>
            <div class="plannification">
                <!-- Template step by step -->
            <table class="step_template">
                <div>class event</div>
                <thead>
                <tr>
                <tl><div class="step1-env">1</div><tl>
                <tl><div class="step2--dev-config">2</div><tl>
                <tl><div class="step3-html">3</div><tl>
                <tl><div class="step3-css-sass">4</div><tl>
                <tl><div class="step4-compiling">5</div><tl>
                <tl><div class="step3-W3C">6</div><tl>
                <tl><div class="step3-git">7</div><tl>
                <tl><div class="step3-integration">8</div><tl>
                </thead>
                <tbody>
                <tr>
                    <td>#</td>
                    <td>x</td>
                    <td>xx</td>
                    <td>xxx</td>
                    <td>xxxx</td>
                    <td>xxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxxx</td>
                    <td>xxxxxxxx</td>
                <tr>
                </tbody>
            </table>
            </div>
    </article>
</div>
