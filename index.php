<?php

require "config/connexion.php";

$route = null;

if(isset($_GET["route"]))
{
    $route = $_GET["route"];
}
$idUser = 1; //a voir session

require "layout.phtml";