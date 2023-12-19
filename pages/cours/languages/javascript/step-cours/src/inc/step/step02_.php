<div class="step02_">
    <section class="Variable-js">
        <h2>Step 02 - Variables en JavaScript</h2>
        <article class="cours-js-content">
            <div class="left-js-content">
                <nav class="dev-chapitre-js">
                    <ul>
                    <li><button id="#chapitre-js-01" class="var-js"><span>1. Les variable en javascript</span></button></li>
                    <li><button id="#chapitre-js-02" class="var-js"><span>2. Declaration des variables</span></button></li>
                    <li><button id="#chapitre-js-03" class="var-js"><span>3. type de donnée</span></button></li>
                    <li><button id="#chapitre-js-04" class="var-js"><span>4. Affectation et Modification des Valeurs</span></button></li>
                    <li><button id="#chapitre-js-05" class="var-js"><span>5. cheatsheet_js</span></button></li>
                    <li><button id="#chapitre-js-06" class="var-js"><span>6. Exemples Pratiques et Applications</span></button></li>
                    <li><button id="#chapitre-js-07" class="var-js"><span>7. Conclusion</span></button></li>
                    </ul>
                </nav>
            </div>
            <div class="right-js-content">
                <div class="01-js_variable" id="#chapitre-js-01">
                    <h3>1. - Les variable en javascript</h3>
                    <p>Une variable peut être imaginée comme un conteneur pour stocker des informations. En JavaScript, une variable est déclarée pour réserver un espace en mémoire, et son contenu peut varier ou être modifié au fil du temps.</p>
                    <P>Définition : "Une variable en JavaScript est un conteneur pour stocker des données. Elle peut être vue comme une boîte dans laquelle nous pouvons stocker des informations pour une utilisation ultérieure."</P>
                    <P>Importance : "Les variables sont fondamentales en JavaScript car elles permettent de manipuler des données de manière dynamique. Elles sont au cœur de presque toutes les opérations en programmation JavaScript."</P>
                    <!-- Introduction aux variables -->
                </div>
                <div class="02-js_Declaration_Var" id="#chapitre-js-02">
                    <!-- Comment créer et initialiser les variables --> 
                    <h3>2. - Déclaration de Variables en JavaScript</h3>
                        <p>Dans ce chapitre, nous allons découvrir comment créer et initialiser des variables en JavaScript...</p>

                        <h3>Qu'est-ce qu'une Variable ?</h3>
                        <p>Une variable peut être imaginée comme un conteneur pour stocker des informations...</p>

                        <h3>Déclarer des Variables</h3>
                        <p>En JavaScript, il existe trois mots-clés principaux pour déclarer des variables...</p>

                        <div class="example">
                            <h4>Utilisation de <code>var</code> :</h4>
                            <pre><code>var nom = "Evi";</code></pre>
                            <p>Attention : <code>var</code> a une portée de fonction et peut conduire à des comportements inattendus...</p>

                            <h4>Utilisation de <code>let</code> :</h4>
                            <pre><code>let age = 30;</code></pre>

                            <h4>Utilisation de <code>const</code> :</h4>
                            <pre><code>const PI = 3.14;</code></pre>
                        </div>

                        <h3>Initialisation des Variables</h3>
                        <p>L'initialisation d'une variable se fait en lui attribuant une valeur lors de sa déclaration...</p>
                        <pre><code>let message = "[HELL0 3ORLD] !";</code></pre>

                        <h3>Bonnes Pratiques</h3>
                        <p>Nommez vos variables de manière significative pour que votre code soit lisible et maintenable...</p>
                </div>
                <div class="03_data-type" id="#chapitre-js-03">
                    <!-- Déclaration des variables : var, let, const -->
                    <h2>3. - Types de Données en JavaScript</h2>
                    <div class="JS-data-type_content">
                        <p>Dans ce chapitre, nous explorerons les différents types de données en JavaScript...</p>
                        <h3>Types de Données Primitifs vs Objets</h3>
                        <p>JavaScript dispose de plusieurs types de données primitifs tels que String, Number, et Boolean...</p>
                        <ul>
                            <li><strong>String :</strong> Représente des séquences de caractères, par exemple, "Bonjour".</li>
                            <li><strong>Number :</strong> Comprend les entiers et les nombres à virgule flottante, comme 42 ou 3.14.</li>
                            <li><strong>Boolean :</strong> Représente une valeur logique, soit true ou false.</li>
                        </ul>
                        <p>En plus des types primitifs, JavaScript utilise également des objets...</p>
                        <pre>
                        <code>let personne = {
                        nom: "Alice",
                        age: 30
                        };</code>
                        </pre>
                        <h3>Typage Dynamique</h3>
                        <p>JavaScript est un langage à typage dynamique...</p>
                        <pre>
                            <code>let data = 20;     // data est maintenant un Number
                            data = "vingt";    // data est maintenant un String</code>
                        </pre>
                        <h3>Bonnes Pratiques</h3>
                        <p>Comprenez et utilisez correctement les différents types de données...</p>
                    </div>
                </div>
                <div class="javascript-value-assignment-modification" id="#chapitre-js-03">
                    <div id="value-assignment-modification">
                    <h2>Affectation et Modification des Valeurs en JavaScript</h2>
                    <div class="js-content">
                        <h3>Affectation de Valeurs</h3>
                        <p>L'affectation de valeurs à une variable en JavaScript se fait à l'aide de l'opérateur d'affectation <code>=</code>.</p>
                        <pre><code>let age = 25; // Affecte la valeur 25 à la variable age
                        let nom = "Alice"; // Affecte la chaîne de caractères "Alice" à la variable nom</code></pre>
                                    
                        <h3>Modification de Valeurs</h3>
                        <p>Les valeurs des variables déclarées avec <code>let</code> peuvent être modifiées en réassignant une nouvelle valeur.</p>
                        <pre><code>let age = 25; // Déclaration initiale
                        age = 26; // Modification de la valeur de la variable age
                                    
                        let nom = "Alice";
                        nom = "Bob"; // Changement de la valeur de nom de "Alice" à "Bob"</code></pre>
                                    
                        <p>Ces opérations d'affectation et de modification sont essentielles pour gérer l'état et le comportement des applications en JavaScript.</p>
                    </div>
                    </div>
                    <div class="javascript-variables-web-semantics" id=chapitre>
                    <div id="variables-web-semantics">
                        <h2>Utilisation des Variables en JavaScript dans le Contexte du Web Sémantique</h2>
                        <div class="js-content">
                        <h3>Variables et le DOM</h3>
                        <p>Les variables JavaScript jouent un rôle clé dans la manipulation du Document Object Model (DOM). Elles permettent de stocker et de manipuler des éléments HTML, de modifier des styles, et de répondre aux interactions des utilisateurs.</p>
                        <pre><code>let titre = document.getElementById("titrePrincipal");
                        titre.innerHTML = "Bienvenue sur notre site!";</code></pre>
                                    
                        <h3>Interaction avec les Événements Utilisateur</h3>
                        <p>JavaScript utilise des variables pour gérer les événements utilisateur, tels que les clics, les entrées de texte, et les mouvements de souris, ce qui rend les pages web interactives et dynamiques.</p>
                        <pre><code>let bouton = document.getElementById("monBouton");
                            bouton.addEventListener("click", function() {
                        alert("Bouton cliqué!");
                        });</code></pre>
            
                        <h3>Amélioration de l'Accessibilité et de la Sémantique</h3>
                        <p>En utilisant des variables JavaScript, il est possible d'améliorer l'accessibilité des sites web, par exemple, en modifiant dynamiquement les attributs ARIA ou en adaptant le contenu en fonction des préférences de l'utilisateur.</p>
                        <pre><code>let contenuImportant = document.getElementById("infoImportante");
                        contenuImportant.setAttribute("role", "alert");</code></pre>
            
                        <p>Ce chapitre met en lumière comment l'utilisation des variables en JavaScript influence directement le comportement et l'accessibilité des sites web, soulignant l'importance d'une approche sémantique dans le développement web.</p>
                        </div>
                    </div>
                    </div>
                </div>              
                <div class="05-js_cheatsheet" id="#chapitre-js-05">
                    <div class="js-cheatsheet_db3">
                    <h3>5. cheatsheet_js</h3>
                    <!-- Contenu du cheatsheet -->
                    <?php include 'js-cheatsheet.php'; ?>
                    </div>
                </div>
                <div class="06-j-practical-applications" id="#chapitre-js-06">
                    <h2>Exemples Pratiques et Applications</h2>
                    <!-- Exemples de code et démos interactives -->
                    <div class="javascript-practical-applications">
                        <div class="content">
                            <h3>Mini-Projet 1 : Formulaire de Contact</h3>
                            <p>Développer un formulaire de contact qui valide les entrées utilisateur en JavaScript.</p>
                            <pre><code>// Exemple de code pour la validation d'un formulaire
                            function validateForm() {
                            let nom = document.getElementById('nom').value;
                            if(nom == "") {
                                alert("Le nom est requis.");
                                return false;
                            }
                            // Autres validations}</code>
                            </pre>                

                            <h3>Mini-Projet 2 : Calculatrice Simple</h3>
                            <p>Créer une calculatrice simple pour effectuer des opérations arithmétiques de base.</p>
                            <pre><code>// Exemple de code pour une calculatrice simple
                            function add(a, b) {
                                return a + b;
                            }</code>
                            </pre>                

                            <h3>Mini-Projet 3 : Jeu Devine le Nombre</h3>
                            <p>Concevoir un petit jeu où l'utilisateur doit deviner un nombre généré aléatoirement.</p>
                            <pre><code>// Exemple de code pour le jeu 'Devine le Nombre'
                            let nombreMystere = Math.floor(Math.random() * 100) + 1;
                            // Logique du jeu ici</code>
                            </pre>                
                            <p>Ces mini-projets fournissent une occasion pratique pour les étudiants d'appliquer leurs compétences en JavaScript à des problèmes réels, renforçant ainsi leur compréhension du langage.</p>
                        </div>
                    </div>
                </div>
                <div class="06-js_conclusion" id="#chapitre-js-07">
                    <h2>Conclusion</h2>
                <!-- Exemples de code et démos interactives -->
                <h2>Conclusion sur les Variables en JavaScript</h2>
                    <div class="js-content">
                       <p>Nous avons exploré le concept des variables en JavaScript, en apprenant comment les déclarer, les affecter, et les modifier. Ces connaissances constituent la base de la programmation en JavaScript et sont essentielles pour comprendre les chapitres suivants, notamment celui sur les objets.</p>
                       <p>Les variables sont au cœur de nombreuses opérations en JavaScript. En maîtrisant leur utilisation, vous serez bien équipé pour aborder des concepts plus avancés et construire des applications web dynamiques et interactives.</p>
                       <p>Alors que nous passons au chapitre suivant sur les objets, gardez à l'esprit les principes fondamentaux des variables, car ils sont tout aussi pertinents lors de la manipulation d'objets.</p>
                    </div>
                </div>
            </div>
        </article>
    </section>
</div>
