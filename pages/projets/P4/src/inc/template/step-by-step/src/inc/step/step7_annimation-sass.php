<div class="step7_annimation-sass">
    <h2>Step 7 - Animation avec SASS</h2>
    <article id="sass-animations">
        <p>
            Pour rendre le site Ohmyfood plus interactif et dynamique, nous avons intégré des animations en utilisant Sass, un préprocesseur CSS. Voici quelques-unes des animations que vous trouverez sur le site :
        </p>
        <ul>
            <li>
                <strong>Loader Overlay :</strong> Un loader élégant avec un overlay qui s'affiche lorsqu'une action est en cours, offrant une expérience utilisateur fluide.
                <!-- Capture d'écran de l'Animation Loader Overlay en Sass -->
                <img src="../../assets/img/sass/loader-overlay-animation.png" alt="Animation Loader Overlay en Sass">
                
                <!-- Code Sass du composant Loader Overlay -->
                    <div id="overlay">
                    <div id="loader" class="hidden"></div>
                </div>
            </li>
        </ul>
        <strong>Cartes (Cards) :</strong> Des animations de transition et d'effet au survol des cartes de restaurants, apportant un aspect dynamique à la présentation.
        <!-- Capture d'écran de l'Animation des Cartes en Sass -->
        <img src="/assets/img/sass/card-animations.png" alt="Animation des Cartes en Sass">
        <div class="code-card">
                    <article class="card card-hover-code">
                        <div class="img-card-container">
                        <img src="build/Ohmyfood/assets/img/restaurants/la-palette-du-gout.jpg" alt="palette"/>
                        <button class="btn-new">Nouveau</button>
                        </div>
                        <div class="info-container">
                        <div class="info-rows">                            
                            <span class="card-titre"><h2>La palette du gout</h2></span>
                            <span class="card-sous-titre">ménilmontant</span>
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
                    </article>
        </div>
    </article>