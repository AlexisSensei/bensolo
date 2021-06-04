<?php

$bdd = new PDO('mysql:host=localhost;dbname=ben_solo;charset=utf8', 'root', 'root');

$id = $_GET['id'];
$bdd->exec("DELETE FROM users WHERE id = '$id' ");

header('Location:../admin/admin.php');