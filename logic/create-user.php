<?php
require "../config/connexion.php";
if(!empty($_POST['password']) && !empty($_POST['pseudo'])) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $pseudo = $_POST['pseudo'];
    if(!empty($_POST['admin'])) {
        $admin = 1;
    } else {
        $admin = 0;
    }
    $query = $db->prepare('INSERT INTO Users (pseudo, password, admin) VALUES (:pseudo, :password, :admin)');
    $parameters = [
    'password' => $password,
    'pseudo' => $pseudo,
    'admin' => $admin
	];
    $query->execute($parameters);
}

header('Location: ../index.php');