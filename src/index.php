<?php
$title = "Mon Application Codespaces";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1><?= $title ?></h1>
        <p>Bienvenue dans mon environnement de développement Codespaces !</p>
        <p>PHP Version: <?= phpversion() ?></p>
    </div>
</body>
</html>