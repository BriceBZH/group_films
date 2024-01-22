<?php


if(isset($_GET["id"]))
{
    $id = $_GET["id"];

    $query = $db->prepare('DELETE FROM users');
    $parameters = [
        'id' => $id
    ];
    $query->execute($parameters);
    $user = $query->fetch(PDO::FETCH_ASSOC);
}

header('Location: ../index.php');

