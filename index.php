<?php

require "config/connexion.php";

$route = null;

if(isset($_GET["route"]))
{
    $route = $_GET["route"];
}
if(!empty($_SESSION['idUser'])) {
    $idUser = $_SESSION['idUser'];
}

require "layout.phtml";