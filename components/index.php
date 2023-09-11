<?php
$page = $_GET['page'] ?? 'home'; // Par défaut, c'est la page d'accueil qui sera chargée

// Sécurité basique pour éviter de charger des fichiers non désirés
$allowed_pages = ['home', 'cours', 'projet', 'soutenance']; // Ajoutez toutes vos pages ici
if (!in_array($page, $allowed_pages)) {
    die("Page non autorisée");
}

include "pages/{$page}.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site OC</title>
    <!-- Liens vers vos fichiers CSS, JS, etc. -->
</head>
<body>
    <?php include 'components/header.php'; ?>
    
    <main>
        <?php include 'components/main-container.php'; ?>
    </main>
    
    <?php include 'components/footer.php'; ?>
</body>
</html>
