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

    <div class="components-content">
                    <div class="ohmyfood-icon-content">
                        <h5>[X]_icon</h5>
                        <div class=google-awsone>
                            <i class="fa-solid fa-arrow-left"></i>
                            <span><i class="fa-solid fa-location-dot icon"></i></span>
                            <span><i class="fa-solid fa-mobile-screen"></i></span>
                            <span><i class="fa-solid fa-list"></i></span>
                            <span><i class="fa-solid fa-store"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-heart"></i></span>
                            <span><i class="fa-solid fa-utensils"></i></span>
                            <span><i class="fa-solid fa-handshake-angle"></i></span>
                        </div>
                    </div>   
                    <div class="ohmyfood-btn-content">
                        <h5>[button]</h5>
                            <div class="btp-button-content">
                            <button class="ohmyfood-btn-cnd ">[CMD]</button>                     
                            <button class="ohmyfood-">
                                <div class="F-numbers">
                                    <span class="F-number">1</span>
                                    <button class="btn-class-f">
                                        <a class="btn-arcticle">
                                            <i class="fa-solid fa-mobile-screen"></i>
                                            <span><strong>FONCTIONNEMENT</strong></span>
                                        </a>
                                    </button>
                                </button>
                                </div>
                                    <button>menu</button>
                                </div>
                            </div>
                    </div>
                    <div class="ohmyfood-card">
                        <div class="card-item fade-in">
                            <span class="card-item__name">Tartare de poulpe acidulé</span>
                            <span class="card-item__desc">Aux zestes d'orange</span>
                            <!-- value could be a price for instance -->
                            <span class="card-item__value">25€</span>
                            <span class="card-item__select">
                        <i class="fas fa-check-circle"></i>
                        </span>
                            <h5>[card]</h5>
                        </div>
                    </div>
                    <div class="ohmyfood-card-content">
                            <div class="ohmyfood-card-index-mobile">[Restaurant]
                            <article class="card">                    
                                <a href="restaurants/Menu-La-palette-du-gout.html">
                                    <div class="img-card-container">
                                        <img src="assets/img/restaurants/la-palette-du-gout.jpg" alt="palette"/>
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
                                </a>
                            </article>
                        </div>
                    <div class="ohmyfood-loader">

                    </div>
                </div>