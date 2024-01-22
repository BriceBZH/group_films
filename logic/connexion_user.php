<?php
// Démarre la session
require "../config/connexion.php";
// Vérifie si l'utilisateur est déjà connecté
if (isset($_SESSION['user'])) {
    header("Location: connected.php");
    exit;
}

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vous pouvez ajouter la logique d'authentification ici
    // par exemple, vérifier le nom d'utilisateur et le mot de passe dans la base de données
    // Si l'authentification réussit, enregistrez l'utilisateur dans la session
    $_SESSION['user'] = $_POST['username'] && $_SESSION['user'] = $_POST ['password'];
    header("Location: connected.php");
    exit;
    $isPasswordCorrect = password_verify($_POST['password'], $user['password']);
if ($isPasswordCorrect) {

    
}
header('Location: ../index.php');
?>


