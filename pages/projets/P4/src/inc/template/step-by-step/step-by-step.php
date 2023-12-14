<section class="step-by-step">
    <article class="template-content">
        <div class="windows">
            <?php
            $currentStep = isset($_GET['step']) ? $_GET['step'] : 'step1_introduction';
            include "src/inc/step/{$currentStep}.php";
            ?>
        </div>

        <div class="step-loader timeline">
            <!-- Boutons pour chaque étape -->
            <button class="btn-step" onclick="window.location.href='?step=step1_introduction'">Étape 1</button>
            <button class="btn-step" onclick="window.location.href='?step=step2_configuration'">Étape 2</button>
            <button class="btn-step" onclick="window.location.href='?step=step3_mission_Objectifs'">Étape 3</button>
            <button class="btn-step" onclick="window.location.href='?step=step4_mockup'">Étape 4</button>
            <button class="btn-step" onclick="window.location.href='?step=step5_markup-html'">Étape 5</button>
            <button class="btn-step" onclick="window.location.href='?step=step6_attribut-css'">Étape 6</button>
            <button class="btn-step" onclick="window.location.href='?step=step7_annimation-sass'">Étape 7</button>
            <button class="btn-step" onclick="window.location.href='?step=step8_responsive-design'">Étape 8</button>
            <button class="btn-step" onclick="window.location.href='?step=step9_validation-W3C'">Étape 9</button>
            <button class="btn-step" onclick="window.location.href='?step=step10_dev-Skiils'">Étape 10</button>
        </div>
    </article>
    <script>
        function loadStep(stepNumber) {
    // Logique pour charger l'étape correspondante
    // Par exemple, modifier l'URL ou faire une requête AJAX
}

    </script>
</section>
