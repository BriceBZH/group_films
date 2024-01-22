<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "adangilbert_groups_films";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "adangilbert";
$password = "dfdea6b0f73368f1dd0954ba9bbcca30";

$db = new PDO(
    $connexionString,
    $user,
    $password
);