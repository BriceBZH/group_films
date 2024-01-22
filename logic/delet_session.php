<?php
require "../config/connexion.php";
session_destroy();
header('Location: ../index.php');
?>