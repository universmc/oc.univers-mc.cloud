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
            <button class="btn-step" onclick="window.location.href='?step=step0_sommaire'"><span class="step-circl">O</span><span>Step</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step1_introduction'"><span class="step-circl">1</span><span>intro</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step2_mission_objectifs'"><span class="step-circl">2</span><span>objectif</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step3_configuration'"><span class="step-circl">3</span><span>config</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step4_mockup'"><span class="step-circl">4</span><span>Mockup</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step5_markup-html'"><span class="step-circl">5</span><span>html</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step6_attribut-css'"><span class="step-circl">6</span><span>css</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step7_responsive-design'"><span class="step-circl">8</span><span>Responsive</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step8_annimation-sass'"><span class="step-circl">7</span><span>sass</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step9_validation-W3C'"><span class="step-circl">9</span><span>W3C</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step10_debug-tool'"><span class="step-circl">10</span><span>debug-tool</span></button>
            <button class="btn-step" onclick="window.location.href='?step=step11_dev-skills'"><span class="step-circl">11</span><span>skill-dev</span></button>
        </div>
    </article>
    <script>
        function loadStep(stepNumber) {
    // Logique pour charger l'étape correspondante
    // Par exemple, modifier l'URL ou faire une requête AJAX
}

    </script>
</section>
