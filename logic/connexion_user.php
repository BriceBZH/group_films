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
    
    $query = $db->prepare("SELECT * FROM  Users WHERE pseudo = :pseudo"); 
    $parameters = [
    'pseudo' => $pseudo,
	];
    $query->execute($parameters);
    $data = $query->fetch(PDO::FETCH_ASSOC);
    $isPasswordCorrect = password_verify($password, $data['password']);
    print_r($data);
    echo $isPasswordCorrect;
    if (!empty($data) && $isPasswordCorrect === true) {
        // si l'authentification réussie, enregistre l'utilisateur dans la session
        $_SESSION['pseudo'] = $data['pseudo'];
        $_SESSION['idUser'] = $data['id'];
        $_SESSION['admin'] = $data['admin'];
    }
    print_r($_SESSION);
}
header('Location: ../index.php');