<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "bricerubeaux_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "bricerubeaux";
$password = "dfcef705866daf59347bbd9795fbe016";

$db = new PDO(
    $connexionString,
    $user,
    $password
);