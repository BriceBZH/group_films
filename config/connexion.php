<?php
$host = "localhost";
$port = "3306";

$dbname = "groupe4_films";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "root";
$password = "";


$db = new PDO(
    $connexionString,
    $user,
    $password
);
session_start();