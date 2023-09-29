<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1 class="welcome-message">Bienvenue sur la page d'accueil</h1>

<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['utilisateur'])) {
    $utilisateur = $_SESSION['utilisateur'];
    echo '<p class="welcome-message">Bonjour, ' . $utilisateur . ' !</p>';
    echo '<p><a href="deconnexion.php" class="logout-button">Se déconnecter</a></p>';
} else {
    echo '<p>Vous n\'êtes pas connecté. <a href="bienvenue.php">Connectez-vous</a> pour accéder à cette page.</p>';
}
?>

<!-- Contenu de la page d'accueil pour les utilisateurs connectés -->

</body>
</html>