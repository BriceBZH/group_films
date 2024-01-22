<?php
require "../config/connexion.php";
if(!empty($_GET['idUser']) && !empty($_GET['idFilm'])) {
    $idUser = $_GET['idUser'];
    $idFilm = $_GET['idFilm'];
    $query = $db->prepare('DELETE FROM User_Film WHERE idUser = :idUser AND idFilm = :idFilm');
    $parameters = [
    'idUser' => $idUser,
    'idFilm' => $idFilm
	];
    $query->execute($parameters);
}

header('Location: ../index.php');