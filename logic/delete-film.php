<?php
require "../config/connexion.php";
if(!empty($_GET['idFilm'])) {
    $idFilm = $_GET['film'];
    //On supprime dans la table films
    $query = $db->prepare('DELETE FROM Films WHERE id = :idFilm ');
    $parameters = [
    'idFilm' => $idFilm,
	];
    $query->execute($parameters);
    //On supprime dans la table User_Film
    $query = $db->prepare('DELETE FROM User_Film WHERE idFilm = :idFilm ');
    $parameters = [
    'idFilm' => $idFilm,
	];
    $query->execute($parameters);
}
header('Location: ../index.php');