<!DOCTYPE html>
<html>
<head>
    <title>Bonjour</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>Connexion</h1>

<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['utilisateur'])) {
    echo '<p>Vous êtes déjà connecté en tant que ' . $_SESSION['utilisateur'] . '.</p>';
    echo '<p><a href="accueil.php">Accéder à la page d\'accueil</a></p>';
} else {
    echo '<form action="bienvenue.php" method="post">
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="motdepasse">Mot de passe :</label>
    <input type="password" id="motdepasse" name="motdepasse" required><br><br>

    <input type="submit" value="Se connecter">
</form>
</body>
</html>';
// Si l'utilisateur n'est pas encore connecté, afficher le formulaire de connexion
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $motdepasse = $_POST["motdepasse"];

// Vérifier les informations de connexion (remplacer ceci par votre propre logique de vérification)
        if ($email == "matys@a.a" && $motdepasse == "aaa") {
// Authentification réussie, définir une variable de session
            $_SESSION['utilisateur'] = $email;

            header('location: accueil.php');
        } else {
            // Afficher des messages d'erreur personnalisés
            if ($email != "matys@a.a") {
                echo '<p>Email incorrect. Veuillez réessayer.</p>';
            } elseif ($motdepasse != "aaa") {
                echo '<p>Mot de passe incorrect. Veuillez réessayer.</p>';
            } else {
                echo '<p>Échec de la connexion. Veuillez réessayer.</p>';
            }
        }
    }
}
?>
