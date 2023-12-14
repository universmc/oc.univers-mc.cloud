<div class=cours-content>
    <div class="left-content">
        <div class="cours-start">
        <aside>
            <ul>
                <li><a href="#introduction">Introduction</a></li>
                <li><a href="#installation">Installation</a></li>
                <li><a href="#bases-sass">Les Bases de SASS</a></li>
                <li><a href="#compilation-sass">Compilation de SASS en CSS</a></li>
                <li><a href="#pseudo-classes">Pseudo-Classes pour l'Animation</a></li>
                <li><a href="#optimisation-pseudo-classes">Optimisation des Pseudo-Classes</a></li>
                <li><a href="#exercices">Exercices Pratiques</a></li>
                <li><a href="#conclusion">Conclusion</a></li>
            </ul>
        </aside>
        </div>
    </div>
    <div class="right-content">
        <div class="course-end">
            <section>
                <ul>
                    <li><a href="#partie-1">Partie 1 - Structurez votre code</a>
                        <ul>
                            <li><a href="#max-cours">1. Tirez un maximum de ce cours</a></li>
                            <li><a href="#simplifiez-cours">2. Simplifiez votre code</a></li>
                            <li><a href="#priorites-cours">3. Définissez des priorités</a></li>
                            <li><a href="#bem-html">4. Clarifiez votre HTML avec BEM</a></li>
                            <li><a href="#niveau-sass">5. Passez au niveau supérieur avec Sass</a></li>
                        </ul>
                    </li>
                    <li><a href="#partie-2">Partie 2 - Optimisez votre CSS avec Sass</a>
                        <ul>
                            <li><a href="#lecture-code">1. Optimisez la lecture du code</a></li>
                            <li><a href="#variables-mixins">2. Utilisez les variables et mixins</a></li>
                            <li><a href="#mixins-fonctions">3. Améliorez vos mixins grâce aux fonctions</a></li>
                            <li><a href="#adaptez-code">4. Adaptez votre code sur tous supports</a></li>
                            <li><a href="#deployez-sass">5. Déployez votre code Sass en ligne</a></li>
                        </ul>
                    </li>
                </ul>

                <h2 id="partie-1">Partie 1 - Structurez votre code</h2>
                <h3 id="max-cours">1. Tirez un maximum de ce cours</h3>
                <p>Contenu de la section "Tirez un maximum de ce cours".</p>

                <h3 id="simplifiez-cours">2. Simplifiez votre code</h3>
                <p>Contenu de la section "Simplifiez votre code".</p>

                <h3 id="priorites-cours">3. Définissez des priorités</h3>
                <p>Contenu de la section "Définissez des priorités".</p>

                <h3 id="bem-html">4. Clarifiez votre HTML avec BEM</h3>
                <p>Contenu de la section "Clarifiez votre HTML avec BEM".</p>

                <h3 id="niveau-sass">5. Passez au niveau supérieur avec Sass</h3>
                <p>Contenu de la section "Passez au niveau supérieur avec Sass".</p>

                <!-- Ajoutez d'autres sections et sous-sections ici -->

                <h2 id="partie-2">Partie 2 - Optimisez votre CSS avec Sass</h2>
                <h3 id="lecture-code">1. Optimisez la lecture du code</h3>
                <p>Contenu de la section "Optimisez la lecture du code".</p>

                <h3 id="variables-mixins">2. Utilisez les variables et mixins</h3>
                <p>Contenu de la section "Utilisez les variables et mixins".</p>

                <h3 id="mixins-fonctions">3. Améliorez vos mixins grâce aux fonctions</h3>
                <p>Contenu de la section "Améliorez vos mixins grâce aux fonctions".</p>

                <h3 id="adaptez-code">4. Adaptez votre code sur tous supports</h3>
                <p>Contenu de la section "Adaptez votre code sur tous supports".</p>

                <h3 id="deployez-sass">5. Déployez votre code Sass en ligne</h3>
                <p>Contenu de la section "Déployez votre code Sass en ligne".</p>
            </section>
            <section id="introduction">
                <h2>Introduction</h2>
                <p>Présentation du cours sur SASS, Compilation en CSS et Pseudo-Classes pour l'Animation. Dans cette section, nous allons découvrir les bases de SASS et comment il peut améliorer notre processus de développement CSS.</p>
            </section>
            
            <section id="installation">
                <h2>Installation</h2>
                <p>Avant de commencer à travailler avec SASS, nous devons l'installer sur notre système. Dans cette section, nous vous guiderons à travers le processus d'installation étape par étape.</p>
            </section>
            
            <section id="bases-sass">
                <h2>Les Bases de SASS</h2>
                <p>Dans cette section, nous allons plonger dans les bases de SASS, y compris l'utilisation de variables, les nestings, les mixins et les importations. Vous apprendrez comment organiser votre code de manière plus efficace et réutiliser du code CSS.</p>
            </section>
            
            <section id="compilation-sass">
                <h2>Compilation de SASS en CSS</h2>
                <p>Après avoir écrit du code SASS, vous devez le compiler en CSS pour qu'il puisse être interprété par les navigateurs. Nous vous montrerons comment effectuer cette compilation et comment personnaliser votre processus de compilation.</p>
            </section>
            
            <section id="pseudo-classes">
                <h2>Pseudo-Classes pour l'Animation</h2>
                <p>Les pseudo-classes CSS sont essentielles pour créer des animations interactives. Dans cette section, nous explorons différentes pseudo-classes telles que :hover, :focus, :active, :nth-child, :not, :before et :after pour animer des éléments HTML.</p>
                <div class="example">
                    <h3>Les Pseudo-Classes</h3>
                    <p>Les pseudo-classes en CSS permettent de cibler des éléments dans un état particulier.</p>
                    <!-- Ajoutez ici l'exemple de pseudo-classe -->
                    <pre>
                        <code>
                            // Pseudo-classes Sass
                            
                            // :hover
                            button
                              &:hover
                                background-color: #ffcc00
                            
                            // :active
                            a
                              &:active
                                color: red
                            
                            // :focus
                            input
                              &:focus
                                border: 2px solid blue
                            
                            // :nth-child(n)
                            li
                              &:nth-child(odd)
                                background-color: #f2f2f2
                            
                            // :nth-of-type(n)
                            p
                              &:nth-of-type(2)
                                font-weight: bold
                            
                            // :not(selector)
                            div
                              &:not(.special)
                                border: 1px solid #ccc
                            
                            // :first-child
                            div
                              &:first-child
                                margin-left: 0
                            
                            // :last-child
                            div
                              &:last-child
                                margin-right: 0
                            
                            // :before
                            blockquote
                              &:before
                                content: "\201C"
                            
                            // :after
                            blockquote
                              &:after
                                content: "\201D"
                            </code>
                    </pre>
                </div>

                <div class="example">
                    <h3>Les Keyframes</h3>
                    <p>Les keyframes définissent les étapes intermédiaires d'une animation CSS.</p>
                    <!-- Ajoutez ici l'exemple de keyframes -->
                    <pre>
                        <code>
                            @keyframes rotate {
                                0% {
                                    transform: rotate(0deg);
                                }
                                100% {
                                    transform: rotate(360deg);
                                }
                            }

                            div {
                                animation: rotate 2s infinite; /* Rotation continue pendant 2 secondes */
                            }
                        </code>
                    </pre>
                </div>
            </section>
            
            <section id="optimisation-pseudo-classes">
                <h2>Optimisation des Pseudo-Classes pour l'Animation</h2>
                <p>Il est important d'optimiser les animations CSS pour les performances et la compatibilité du navigateur. Nous vous donnerons des conseils sur la façon de le faire efficacement et comment choisir la pseudo-classe appropriée en fonction de vos besoins.</p>
            </section>
            
            <section id="exercices">
                <h2>Exercices Pratiques</h2>
                <p>Dans cette section, vous aurez l'occasion de mettre en pratique ce que vous avez appris. Des exercices de SASS et d'animation CSS vous permettront de renforcer vos compétences.</p>
                <div class="SAAS-container">
                    <button class="btn">Transform!</button>
                    <div class="box">
                        <span>BBOP!</span>
                    </div>
                </div>
            
            </section>
            
            <section id="conclusion">
                <h2>Conclusion</h2>
                <p>En conclusion, nous récapitulerons les points clés du cours et vous fournirons des suggestions pour continuer à développer vos compétences en SASS et en animation CSS.</p>
            </section>
        </div>
    </div>
</div>