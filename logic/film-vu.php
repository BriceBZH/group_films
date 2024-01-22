<?php
require "../config/connexion.php";
if(!empty($_GET['idUser']) && !empty($_GET['idFilm'])) {
    $idUser = $_GET['idUser'];
    $idFilm = $_GET['idFilm'];
    $query = $db->prepare('INSERT INTO User_Film (idUser, idFilm) VALUES (:idUser, :idFilm)');
    $parameters = [
    'idUser' => $idUser,
    'idFilm' => $idFilm
	];
    $query->execute($parameters);
}

header('Location: ../index.php');