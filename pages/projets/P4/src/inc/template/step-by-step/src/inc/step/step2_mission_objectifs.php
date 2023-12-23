<div class="step2_mission_objectif">
    <!-- Section Sommaire -->
    <h2>Sommaire <span>Step 2 - Objectif de la mission</span></h2>
    <section id="sommaire" class="mission-objectif">
        <ul class="menu-btn">
            <!-- Liste des éléments du sommaire de l'étape -->
            <li class="src-ohmyfood"><button class="ohmyfood-btn-cnd">[MISSION]</button></li>
            <li class="src-ohmyfood"><button class="ohmyfood-btn-cnd">[Objectif]</button></li>
            <!-- Plus de points si nécessaire -->
        </ul>
    </section>

    <!-- Section Développement -->
    <section id="developpement">

        <!-- Articles/Contenus pour chaque point du sommaire -->
        <article class="mission">
            <h2>Mission</h2>
            <div class="ohmyfood-mail-if">
                <div class="ohmyfood-mail-header">
                    <p>>Objet : Maquettes site OhMyFood Paris</p>
                    <p>De : Paul</p>
                    <p>À : moi</p>
                </div>
                <div class="ohmyfood-mail-main">
                    <p>L’UX designer a finalisé les maquettes mobile et desktop du site ! Tu les trouveras en pièce jointe, en plus du dossier des sources du site (images et textes). Tu y trouveras également le prototype du site via Figma, incluant les animations et comportements à intégrer. Voici un extrait de ce à quoi devra ressembler le site :</p>
                    <div class="img-ohmyfood-device">
                        <img src="assets/img/mockup/media-querie-mobile.png">
                        <img src="assets/img/mockup/media-querie-desktop.png">
                    </div>
                    <p>Il n’y a plus qu’à le développer pour mobile, tablette et desktop en s’appuyant rigoureusement sur les informations déterminées dans le brief créatif ! Pour rappel, le site doit être responsive et en “mobile first”. N'oublie surtout pas d'utiliser SASS. On veut aussi des animations soignées. Il faudra que tu m’expliques comment elles fonctionnent.</p> 
                    <p>Hâte de voir le site terminé !</p> 
                    <p>Bon courage !
                    <p>Paul</p>       
                </div>
                <div class="ohmyfood-mail-footer">
                        <p>Pièce jointe :</p>
                        <p>Maquettes mobile et desktop du site Ohmyfood</p>
                        <p>Prototype du site</p>
                        <p>Fichiers sources (images et textes)</p>
                </div>            
            </div>
            <div class="src-PJ">
                <div class="src-ohmyfood">
                    <h3>Réception du Prototype</h3>
                    <div class="ohmyfood-mockup-container"> 
                        <img src="assets/img/mockup/mockup.png" class="ohmyfood-mockup" alt="mockup">
                    </div>
                </div>
                <div class="src-ohmyfood">
                    <h3>Récéption de la Maquette</h3>
                    <div class="ohmyfood-proto-container">
                    <img class="ohmyfood-proto-img"src="assets/img/proto-mobile-index.png" all="media mobile">
                        <img class="ohmyfood-proto-img"src="assets/img/proto-mobile-restau.png" all="media mobile">   
                        <img class="ohmyfood-proto-img-decktop"src="assets/img/proto-desktop.png" all="media mobile">
                    </div>  
                </div>
                <div class="src-ohmyfood">
                    <h3>Réception des SOURCES (img+text)</h3>
                    <div class="ohmyfood-img-container">
                        <div class="ohmyfood-img-bloc"><img src="assets/img/ohmyfood/1.jpg"></div>
                        <div class="ohmyfood-img-bloc"><img src="assets/img/ohmyfood/2.jpg"></div>
                        <div class="ohmyfood-img-bloc"><img src="assets/img/ohmyfood/3.jpg"></div>
                        <div class="ohmyfood-img-bloc"><img src="assets/img/ohmyfood/4.jpg"></div>
                </div>
            </div>
        </article>
        <article class="Objectifs">
            <h2>OBJECTIF</h2>   
            <h3>Améliorations du Site Web avec Animations SASS</h3>
            <h3> Effets graphiques et animations</h3>
                <!-- Description des animations (cartes, boutons, icônes) et de l'overlay au chargement -->
            
<p>Les effets accessibles au clic ou au survol sont visibles sur la maquette. Ils devront utiliser
les animations ou transitions CSS, pas de JavaScript ni de librairie. Pour toutes les
animations, afin de soigner le rendu du site, il est important que lorsque nous avons un effet
au hover ou lors d’un clic, nous ayons l’effet inverse lorsque l’on quitte le survol.</p>
<h4>Boutons</h4>
<p>● Au survol, la couleur de fond des boutons principaux devra légèrement s’éclaircir.
L’ombre portée devra également être plus visible.</p>
<p>● À terme, les visiteurs pourront sauvegarder leurs menus préférés. Pour ça, un
bouton "J’aime" en forme de cœur est présent sur la maquette. Au clic, il devra se
remplir progressivement. Pour cette première version, l’effet peut apparaître au
survol sur desktop au lieu du clic.</p>
<h4>Page d’accueil</h4>
<p>● Quand l’application aura plus de menus, un “loader” sera nécessaire. Sur cette
maquette, nous souhaitons en avoir un aperçu. Il devra apparaître pendant 1 à 3
secondes quand on arrive sur la page d'accueil, couvrir l'intégralité de l'écran, et
utiliser les animations CSS (pas de librairie). Le design de ce loader n’est pas défini,
toute proposition est donc la bienvenue tant qu’elle est cohérente avec la charte
graphique du site.</p>
<h4>Pages de menu</h4>
<p>● À l’arrivée sur la page, les plats devront apparaître progressivement avec un léger
décalage dans le temps. Ils pourront apparaître soit un par un, soit par groupe
“Entrée”, “Plat” et “Dessert”.</p>
<p>● Le visiteur peut ajouter les plats qu'il souhaite à sa commande en cliquant dessus.
Cela fait apparaître une petite coche à droite du plat. Cette coche devra coulisser de
la droite vers la gauche. Pour cette première version, l’effet peut apparaître au survol
sur desktop au lieu du clic. Si l’intitulé du plat est trop long, il devra être rogné avec
des points de suspension.</p>
            
            
            <div class="btn-Dl-contenair">
            <h4>3-2. briefing Annimation en SASS</h4> 
                <a href="assets/Brief.pdf"><button class="hero-btn">telecharger Briefing</button></a>
            </div>

            <!-- Images et icônes si nécessaire -->
        </article>
        <!-- Plus d'articles si nécessaire -->
    </section>

    <!-- Section Conclusion -->
    <section id="conclusion">
    </section>
</div>


