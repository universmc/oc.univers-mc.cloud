<div class=cours-content>
    <div class="left-content">
        <div class="cours-start">
                        <h2>Sommaire du Cours HTML</h2>
                        <ul>
                            <li><a href="#section1">Introduction à HTML</a></li>
                            <li><a href="#section2">Structure de base d'une page HTML</a></li>
                            <li><a href="#section3">Balises HTML courantes</a></li>
                            <li><a href="#section4">Liens hypertextes</a></li>
                            <li><a href="#section5">Images et multimédia</a></li>
                            <li><a href="#section6">Listes et tableaux</a></li>
                            <li><a href="#section7">Formulaires HTML</a></li>
                            <li><a href="#section8">Récapitulatif des balises</a></li>
                        </ul>
                    </div>
        </div>
    <div class="right-content">
        <div class="course-end">
                <section id="section1">
                    <h2>Section 1 : Introduction à HTML</h2>
                
                    <!-- Étape 1 -->
                    <h3>Étape 1 : Comprendre HTML</h3>
                    <p>HTML (HyperText Markup Language) est le langage de base pour créer des pages web. Il utilise des balises pour structurer le contenu.</p>
                
                    <!-- Étape 2 -->
                    <h3>Étape 2 : Créer un Document HTML</h3>
                    <p>Commencez par créer un document HTML en utilisant la structure de base :</p>
                    <pre>
                        <code>&lt;!DOCTYPE html&gt;
                &lt;html&gt;
                &lt;head&gt;
                    &lt;meta charset="UTF-8"&gt;
                    &lt;title&gt;Titre de la page&lt;/title&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    <!-- Votre contenu ici -->
                &lt;/body&gt;
                &lt;/html&gt;</code>
                    </pre>
                
                    <!-- Étape 3 -->
                    <h3>Étape 3 : Utiliser des Balises</h3>
                    <p>Utilisez des balises HTML pour structurer votre contenu. Par exemple, utilisez la balise &lt;h1&gt; pour un titre principal :</p>
                    <pre>
                        <code>&lt;h1&gt;Mon Titre&lt;/h1&gt;</code>
                    </pre>
                
                    <!-- Étape 4 -->
                    <h3>Étape 4 : Ajouter des Liens</h3>
                    <p>Vous pouvez ajouter des liens hypertextes en utilisant la balise &lt;a&gt;. Par exemple :</p>
                    <pre>
                        <code>&lt;a href="https://www.example.com"&gt;Lien vers Example.com&lt;/a&gt;</code>
                    </pre>
                
                    <!-- Étape 5 -->
                    <h3>Étape 5 : Terminer votre Document</h>
                </section>
                <section id="section2">
                    <h2>Section 2 : Structure de base d'une page HTML</h2>
                
                    <!-- Balisage Inline -->
                    <h3>Balisage Inline</h3>
                    <p>Le balisage inline est utilisé pour formater du texte à l'intérieur d'un paragraphe, d'une phrase, ou pour ajouter des éléments en ligne.</p>
                    <pre>
                        <code>&lt;p&gt;Ceci est un exemple de &lt;strong&gt;texte en gras&lt;/strong&gt;.&lt;/p&gt;</code>
                    </pre>
                
                    <!-- Balisage en Bloc -->
                    <h3>Balisage en Bloc</h3>
                    <p>Le balisage en bloc est utilisé pour structurer des éléments tels que des paragraphes, des en-têtes, des listes, etc. Il définit des blocs de contenu.</p>
                    <pre>
                        <code>&lt;h1&gt;Titre&lt;/h1&gt;
                &lt;p&gt;Ceci est un paragraphe.&lt;/p&gt;</code>
                    </pre>
                
                    <!-- Sémantique Web -->
                    <h3>Sémantique Web</h3>
                    <p>La sémantique web consiste à utiliser des balises HTML appropriées pour décrire le contenu de manière significative. Par exemple, utilisez &lt;nav&gt; pour la navigation, &lt;article&gt; pour un article, etc.</p>
                    <pre>
                        <code>&lt;nav&gt;
                    &lt;a href="#">Accueil&lt;/a&gt;
                    &lt;a href="#">À propos&lt;/a&gt;
                &lt;/nav&gt;</code>
                    </pre>
                
                    <!-- Ajoutez d'autres explications et exemples au besoin -->
                
                </section>
                <section id="section3">
                    <h2>Section 3 : Balises HTML Courantes</h2>
                    
                    <table>
                        <tr>
                            <th>Tag</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Exemple</th>
                            <th>Code couleur (CSS)</th>
                            <th>Link (présentation dans la section3)</th>
                        </tr>
                        <tr>
                            <td><code>&lt;html&gt;</code></td>
                            <td>Balise racine HTML</td>
                            <td>Structure</td>
                            <td><code>&lt;html&gt;...&lt;/html&gt;</code></td>
                            <td>#E44D26</td>
                            <td>Présentation HTML</td>
                        </tr>
                        <tr>
                            <td><code>&lt;head&gt;</code></td>
                            <td>Section des métadonnées de la page</td>
                            <td>Structure</td>
                            <td><code>&lt;head&gt;...&lt;/head&gt;</code></td>
                            <td>#378B2E</td>
                            <td>Présentation HTML</td>
                        </tr>
                        <tr>
                            <td><code>&lt;title&gt;</code></td>
                            <td>Titre de la page</td>
                            <td>Structure</td>
                            <td><code>&lt;title&gt;Titre de la page&lt;/title&gt;</code></td>
                            <td>#000000</td>
                            <td>Présentation HTML</td>
                        </tr>
                        <tr>
                            <td><code>&lt;meta&gt;</code></td>
                            <td>Informations méta de la page</td>
                            <td>Structure</td>
                            <td><code>&lt;meta charset="UTF-8"&gt;</code></td>
                            <td>#4285F4</td>
                            <td>Présentation HTML</td>
                        </tr>
                        <tr>
                            <td><code>&lt;link&gt;</code></td>
                            <td>Lien vers une feuille de style</td>
                            <td>Structure</td>
                            <td><code>&lt;link rel="stylesheet" href="styles.css"&gt;</code></td>
                            <td>#F4B400</td>
                            <td>Présentation HTML</td>
                        </tr>
                        <tr>
                            <td><code>&lt;style&gt;</code></td>
                            <td>Styles CSS en ligne</td>
                            <td>Structure</td>
                            <td><code>&lt;style&gt;body { font-family: Arial; }&lt;/style&gt;</code></td>
                            <td>#0F9D58</td>
                            <td>Présentation HTML</td>
                        </tr>
                        <tr>
                            <td><code>&lt;head&gt;</code></td>
                            <td>Section des métadonnées de la page</td>
                            <td>Structure</td>
                            <td><code>&lt;head&gt;...&lt;/head&gt;</code></td>
                            <td>#378B2E</td>
                            <td><a href="#head-presentation">Présentation HTML</a></td>
                        </tr>
                        <!-- Ajoutez d'autres lignes pour les balises restantes -->
                    </table>
                    
                </section>
                <section id="section4">
                    <h2>Section 4 : Liens Hypertexte et Référencement SEO</h2>
                
                    <p>Les liens hypertexte sont l'une des caractéristiques les plus importantes du web sémantique. Ils permettent aux utilisateurs de naviguer d'une page à l'autre, créant ainsi une toile d'informations interconnectées. De plus, ils jouent un rôle crucial dans le référencement SEO (Search Engine Optimization), qui affecte la visibilité de votre site web sur les moteurs de recherche comme Google.</p>
                
                    <h3>Les Balises <code>&lt;a&gt;</code> pour les Liens</h3>
                
                    <p>La balise <code>&lt;a&gt;</code> est utilisée pour créer des liens hypertexte. Voici un exemple de code HTML pour créer un lien vers une autre page :</p>
                
                    <pre>
                        <code>&lt;a href="https://www.example.com"&gt;Visitez notre site web&lt;/a&gt;</code>
                    </pre>
                
                    <p>Cette balise contient un attribut <code>href</code> qui spécifie l'URL vers laquelle le lien pointe. Vous pouvez également ajouter un attribut <code>target="_blank"</code> pour ouvrir le lien dans une nouvelle fenêtre ou onglet.</p>
                
                    <h3>Référencement SEO et Balises META</h3>
                
                    <p>Le référencement SEO est essentiel pour améliorer la visibilité de votre site web sur les moteurs de recherche. Les balises META jouent un rôle important dans ce processus. Par exemple, la balise <code>&lt;meta name="description" content="Description de la page"&gt;</code> permet de définir une description de votre page, qui apparaîtra dans les résultats de recherche.</p>
                
                    <p>Une autre balise cruciale est <code>&lt;meta name="keywords" content="mots-clés, pertinents, pour, votre, contenu"&gt;</code>, qui spécifie les mots-clés pertinents pour votre contenu. Les moteurs de recherche utilisent ces mots-clés pour indexer et classer votre site web.</p>
                
                    <p>En comprenant comment utiliser correctement ces balises, vous pouvez améliorer le classement de votre site web dans les résultats de recherche, ce qui peut augmenter la visibilité de votre contenu.</p>
                </section>
                <section id="section7">
                    <h2>Section 7 : Paramétrage CSS interactif</h2>
                
                    <p>Dans cette section, nous allons explorer un moyen passionnant de personnaliser l'apparence de votre site web à l'aide du CSS. Plutôt que de modifier manuellement le code CSS, nous allons créer un système interactif qui vous permet de choisir vos styles préférés.</p>
                
                    <h3>Le composant Setup</h3>
                
                    <p>Nous avons développé un composant spécial appelé Setup, qui vous permet de définir vos propres styles CSS en utilisant un formulaire convivial. Vous pouvez ajuster les couleurs, les polices, les tailles et bien plus encore.</p>
                
                    <h3>Comment ça marche ?</h3>
                
                    <p>Dans le bloc de paramétrage, vous trouverez des champs pour chaque propriété CSS que vous pouvez personnaliser. Remplissez les champs avec les valeurs de votre choix, puis cliquez sur le bouton "Enregistrer" pour sauvegarder vos paramètres.</p>
                
                    <h3>Prévisualisation en temps réel</h3>
                
                    <p>La représentation visuelle à côté du formulaire vous montrera comment vos modifications CSS affectent le rendu de la page. C'est comme un aperçu en direct de votre site web.</p>
                
                    <h3>Appliquer vos styles</h3>
                
                    <p>Une fois que vous êtes satisfait de vos styles personnalisés, cliquez sur le bouton "Soumettre" pour appliquer ces styles à votre site web. Vous verrez instantanément les changements en direct.</p>
                
                    <h3>Leçon sur le CSS</h3>
                
                    <p>Mais avant de plonger dans le paramétrage CSS, passons en revue les bases du CSS dans les sections 5 et 6 pour que vous ayez une compréhension solide de ce que vous pouvez personnaliser.</p>
                </section>
                
                
                <section id="section3">
                    <h2>Section 3 Balises HTML courantes</a></li></h2>
                    <!-- il faudrais créer un litre pour chaque tag ou balise en cours de dev puis une présent nlp avec des exemple de script html et représentation graphique <pre>css -->
                </section>
        
                <!-- Ajoutez d'autres sections ici pour chaque partie du cours -->
            </div>
        </section>    
    <div>
</div>