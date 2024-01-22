<?php
require "../config/connexion.php";
if(!empty($_POST['titre']) && !empty($_POST['duree']) && !empty($_POST['idCateg']) && !empty($_POST['description'])) {
    $titre = $_POST['titre'];
    $duree = $_POST['duree'];
    $idCateg = $_POST['idCateg'];
    $description = $_POST['description'];
    $query = $db->prepare('UPDATE Films SET titre = :titre, description = :description,  duree = :duree, idCateg = :idCateg WHERE id = :id');
    $parameters = [
        'titre' => $titre,
        'description' => $description,
        'duree' => $duree,
        'idCateg' => $idCateg,
        'id' => $id
        ];
    $query->execute($parameters);
}
header('Location: ../index.php');