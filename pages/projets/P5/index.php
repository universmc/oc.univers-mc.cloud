<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>build website step-by-step</title>
    <link rel="stylesheet" href="../../../src/css/index.css">
    <link rel="stylesheet" href="assets/css/style-P5.css">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://kit.fontawesome.com/30c54bbb9e.js" crossorigin="anonymous"></script>
    
    <!-- Chemin vers le fichier CSS compilé -->
</head>
<body>
    <div class="P5">
        <?php include '../../../src/inc/header.php'; ?> <!-- Inclusion de l'en-tête -->

        <main>
            <?php
            // Vous pouvez inclure ici le contenu principal de votre page.
            // Par exemple, un système de gestion de contenu dynamique basé sur des fichiers PHP ou des données de base de données.
            include 'src/inc/template/step-by-step/step-by-step.php';
            ?>

        </main>
        <footer>
            <?php include '../../../src/inc/footer.php'; ?> <!-- Inclusion du pied de page -->
        </footer>
    </div>
        <!-- Scripts JS si nécessaire -->
    <script src="assets/js/script.js"></script>
</body>
</html>