<!-- Stylisation des Composants Spécifiques -->
        <article id="stylisation-composants">
            <h3>Bloc sementique [FOOTER]</h3>
            <p>
                Explication sur la manière dont les composants spécifiques tels que les boutons, les cartes de restaurants, et les en-têtes sont stylisés.
            </p>
            <!-- Exemples de code CSS pour les composants spécifiques -->

    <div class="pc-html-css-result">
        <div class="header-html-css">@querie</div>
            <div class="main-pc-env">
    <!-- Bloc HTML -->
    <div class="pc-html">
        <h3>HTML</h3>
        <pre><code>
&lt;!-- Exemple de balisage HTML pour un bouton --&gt;
&lt;button class="btn"&gt;Cliquez-moi&lt;/button&gt;
        </code></pre>
    </div>

    <!-- Bloc CSS -->
    <div class="pc-css">
        <h3>CSS</h3>
        <pre><code>
  /* ***************** */
  /*      footer       */
  /* ***************** */
  footer {
    display: flex;
    justify-content: end;
  }
  .footer-container {
    display: flex;
    width: 80%;
    flex-direction: row;
    justify-content: space-between;
  }
  .ls-container {
    display: flex;
    flex-direction: row;
    gap: 20px;
    margin: 10px;
    order: 1;
  }
  .footer-titre {
    order: 2;
  }
}
        </code></pre>
    </div>

    <!-- Bloc Résultat -->
    <div class="pc-resultat">
        <div class="windows-resultat">
            <div class="footer-ohmyfood-inter">
                <span class="footer-titre-">Ohmyfood</span>
                <div class="footer-ls-container">
                    <i class="fa-solid fa-utensils"><span> Proposer un restaurant</span></i>
                    <i class="fa-solid fa-handshake-angle"><span> Devenir partenair</span></i>
                    <span>Mention Légales</span>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-pc"
><p> on peut observer dans ce bloc sémantique nommé foutez qu'il est constitué d'un logo et d'une liste de liens</p>
<p> on peut aussi noter que dans la version <strong>MOBILE</strong> on utilise une Flexbox flex-direction row alors que dans la version <strong>DESKTOP</strong> utilise une Flex box et flex-direction row</p> </p></div>
</div>

</article>
<!-- Stylisation des Composants END-->