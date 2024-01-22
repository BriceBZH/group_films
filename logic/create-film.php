<?php
require "../config/connexion.php";
if(!empty($_POST['titre']) && !empty($_POST['duree']) && !empty($_POST['idCateg']) && !empty($_POST['description'])) {
    $titre = $_POST['titre'];
    $duree = $_POST['duree'];
    $idCateg = $_POST['idCateg'];
    $description = $_POST['description'];
    $query = $db->prepare('INSERT INTO Films (titre, description, duree, idCateg) VALUES (:titre, :description, :duree, :idCateg)');
    $parameters = [
    'titre' => $titre,
    'description' => $description,
    'duree' => $duree,
    'idCateg' => $idCateg
	];
    $query->execute($parameters);
}

header('Location: ../index.php');