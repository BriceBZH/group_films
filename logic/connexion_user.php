<?php
// Démarre la session
require "../config/connexion.php";
// Vérifie si l'utilisateur est déjà connecté
if (isset($_SESSION['user'])) 

{
    header("Location: ../index.php");
    exit;
}

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') 

{
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $query = "SELECT * FROM  Users WHERE pseudo = :pseudo"; 
    $statement->bindParam(':pseudo', $pseudo);
    $statement->execute();
    $pseudo = $statement->fetch();
    $_SESSION['idUser'] = $user['id'];
    
     if (!empty($pseudo) && password_verify($password, $pseudo['password'])) 
     {
        // si l'authentification réussie, enregistre l'utilisateur dans la session
        $_SESSION['pseudo'] = $pesudo['pseudo'];
        $_SESSION['idUser'] = $pseudo['id'];
     }
}
header('Location: ../index.php');
?>


