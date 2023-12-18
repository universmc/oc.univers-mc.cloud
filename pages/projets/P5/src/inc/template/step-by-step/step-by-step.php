<section class="step-by-step">
    <article class="template-content">
        <div class="windows">
            <?php
            $currentStep = isset($_GET['step']) ? $_GET['step'] : 'step0_sommaire';
            include "src/inc/step/{$currentStep}.php";
            ?>
        </div>

        <div class="step-loader timeline">
            <!-- Boutons pour chaque étape -->
            <button class="btn-step" onclick="window.location.href='?step=step0_sommaire'"><span class="step-circl">O</span><span>Sommaire</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step1_introduction'"><span class="step-circl">0</span><span>intro</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step2_mission_Objectifs'"><span class="step-circl">0</span><span>objectif</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step3_configuration'"><span class="step-circl">0</span><span>config</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step4_1-html'"><span class="step-circl">1</span><span>html</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step5_2-event-js'"><span class="step-circl">2</span><span>even-js</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step6_3-slider'"><span class="step-circl">3</span><span>slider</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step7_4-slider-clic'"><span class="step-circl">4</span><span>clic</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step8_5-carrousel'"><span class="step-circl">5</span><span>carrousel</span></button>
        </div>
    </article>
    <script>
        function loadStep(stepNumber) {
    // Logique pour charger l'étape correspondante
    // Par exemple, modifier l'URL ou faire une requête AJAX
}

    </script>
</section>
