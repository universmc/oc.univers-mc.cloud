<section class="step-by-step">
<article class="template-content">
        <div class="windows">
            <?php
            $currentStep = isset($_GET['step']) ? $_GET['step'] : 'step00_';
            include "src/inc/step/{$currentStep}.php";
            ?>
        </div>

        <div class="step-loader timeline">
            <!-- Boutons pour chaque étape -->
            <button onclick="window.location.href='?step=step00_'">Sommaire</button>
            <button onclick="window.location.href='?step=step01_'">Intro</button>
            <button onclick="window.location.href='?step=step02_'">Variable</button>
            <button onclick="window.location.href='?step=step03_'">Object</button>
            <button onclick="window.location.href='?step=step04_'">Operateurs</button>
            <button onclick="window.location.href='?step=step05_'">interpolation</button>
            <button onclick="window.location.href='?step=step06_'">event</button>
            <button onclick="window.location.href='?step=step06_'">regex</button>
        </div>
</article>
    <script>
        function loadStep(stepNumber) {
    // Logique pour charger l'étape correspondante
    // Par exemple, modifier l'URL ou faire une requête AJAX
}

    </script>
</section>
