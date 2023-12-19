<section class="console-methods">
        <h1>Fonctionnalités de l'Objet Console en JavaScript</h1>

        <article id="console-log">
            <h2>console.log()</h2>
            <p>La méthode la plus utilisée pour afficher des messages. Peut afficher du texte, des variables, des objets, et plus encore.</p>
            <pre><code>console.log("Message de log");
            let nombre = 5;
            console.log("Le nombre est :", nombre);</code></pre>
        </article>

        <article id="console-error">
            <h2>console.error()</h2>
            <p>Utilisée pour afficher des messages d'erreur. Les messages apparaissent généralement en rouge dans la console.</p>
            <pre><code>console.error("Ceci est un message d'erreur");</code></pre>
        </article>

        <article id="console-warn">
            <h2>console.warn()</h2>
            <p>Affiche des avertissements. Ces messages sont souvent affichés en jaune dans la console.</p>
            <pre><code>console.warn("Ceci est un avertissement");</code></pre>
        </article>

        <article id="console-info">
            <h2>console.info()</h2>
            <p>Semblable à console.log() mais utilisée pour transmettre des informations.</p>
            <pre><code>console.info("Information : le processus a réussi");</code></pre>
        </article>

        <article id="console-table">
            <h2>console.table()</h2>
            <p>Affiche des données sous forme de tableau, ce qui peut être particulièrement utile pour visualiser des objets ou des tableaux complexes.</p>
            <pre><code>let personnes = [{ nom: "Alice", age: 25 }, { nom: "Bob", age: 30 }];
            console.table(personnes);</code></pre>
                    </article>

                    <article id="console-group">
                        <h2>console.group() et console.groupEnd()</h2>
                        <p>Permet de regrouper des messages dans un bloc repliable, ce qui est utile pour organiser les messages de log.</p>
                        <pre><code>console.group("Groupe de messages");
            console.log("Message 1");
            console.log("Message 2");
            console.groupEnd();</code></pre>
        </article>

        <article id="console-assert">
            <h2>console.assert()</h2>
            <p>Affiche un message d'erreur si une expression donnée est fausse. Utile pour les tests simples ou les vérifications de conditions.</p>
            <pre><code>console.assert(1 === 2, "Expression fausse !");</code></pre>
        </article>

        <article id="console-usage">
            <h2>Utilisation de console</h2>
            <p>La console est un outil de débogage, et il est recommandé de supprimer ou de commenter les appels console dans le code de production pour éviter de surcharger la sortie de la console et potentiellement révéler des informations sensibles.</p>
        </article>
    </section>