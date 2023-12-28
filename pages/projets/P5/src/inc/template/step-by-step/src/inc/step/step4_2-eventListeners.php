<div class="step2_eventListeners">
    <h2>Step 2 - Ajout des Event Listeners sur les Flèches</h2>
    <article class="eventListeners">
        <p>
            La deuxième étape du projet "Print it" consistait à rendre le carrousel interactif en ajoutant des event listeners aux flèches de navigation. Cette fonctionnalité permet aux utilisateurs de cliquer sur les flèches pour naviguer entre les images du carrousel. L'ajout de ces event listeners a été une introduction essentielle aux concepts de programmation JavaScript, démontrant l'importance de l'interactivité dans les interfaces utilisateur modernes.
        </p>
        <div class="carrousel-img">
        <img class="arrow" src="assets/img/objectif-carrousel.png" alt="carrousel">
        </div>
        <!-- Exemple du code HTML du carrousel -->
        <div class="btn-contenair">
            <h2>Dans le fichier script.js</h2>
            <p>j'ai donc ajouter le scipt</p>
            <div>
            <button class="btn-arow" id="bouton1">[<]</button>
<pre><code>
let bouton1 = document.getElementById("bouton1");
bouton1.addEventListener("click", () =&gt; {
    console.log("click OK button slide gauche")
})</code></pre>
</div>
<button class="btn-arow" id="bouton2">[>]</button>
<pre><code>
let bouton2 = document.getElementById("bouton2");
bouton2.addEventListener("click", () =&gt; {
    console.log("click OK button slide droit")
})
</code></pre>
        </div>
        <!-- Exemple du code JavaScript pour les event listeners -->

    </article>
    <article class="event-listener-explanation">
    <h3>Explication de l'Event Listener JavaScript</h3>
    <p>
        <strong>Déclaration de la Variable bouton1 :</strong><br>
        <pre><code>let bouton1 = document.getElementById("bouton1");</pre></code>
        Cette ligne déclare la variable 'bouton1' et sélectionne l'élément HTML avec l'ID 'bouton1'.
    </p>
    <p>
        <strong>Ajout d'un Event Listener sur bouton1 :</strong><br>
        <pre><code>bouton1.addEventListener("click", () => { ... })</pre></code>
        Ajoute un écouteur d'événement sur 'bouton1'. Chaque clic sur ce bouton déclenche la fonction fléchée.
    </p>
    <p>
        <strong>Fonctionnalité lors du Clic :</strong><br>
        <pre><code>console.log("click OK button slide gauche")</pre></code>
        Affiche un message dans la console pour confirmer l'activation de l'événement.
    </p>
</article>

</div>
<script src="assets/btn-event.js"></script>