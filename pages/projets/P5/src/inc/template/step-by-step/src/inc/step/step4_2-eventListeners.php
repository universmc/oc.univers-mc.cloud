<div class="step2_eventListeners">
    <h2>Step 2 - Ajout des Event Listeners sur les Flèches</h2>
    <article class="eventListeners">
        <p>
            La deuxième étape du projet "Print it" consistait à rendre le carrousel interactif en ajoutant des event listeners aux flèches de navigation. Cette fonctionnalité permet aux utilisateurs de cliquer sur les flèches pour naviguer entre les images du carrousel. L'ajout de ces event listeners a été une introduction essentielle aux concepts de programmation JavaScript, démontrant l'importance de l'interactivité dans les interfaces utilisateur modernes.
        </p>
        <img class="arrow" src="assets/img/objectif-carrousel.png" alt="carrousel">
        <!-- Exemple du code HTML du carrousel -->
        <pre><code>
            [Insérez ici le code HTML du carrousel avec les flèches]
        </code></pre>
        <div class="btn-contenair">
            <div>
            <button id="bouton1">[<]</button>
            <pre><code>
            let bouton1 = document.getElementById("bouton1");
            bouton1.addEventListener("click", () =&gt; {
                console.log("click OK button slide gauche")
            })</code></pre>
            </div>
            <button id="bouton2">[>]</button>
            <pre><code>
            let bouton2 = document.getElementById("bouton2");
            bouton2.addEventListener("click", () =&gt; {
                console.log("click OK button slide droit")
            })
        </code></pre>
        </div>
        <!-- Exemple du code JavaScript pour les event listeners -->

    </article>
</div>
<script src="assets/btn-event.js"></script>