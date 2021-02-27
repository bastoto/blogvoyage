<?php
$server = "";
$name_user = "";
$name_database = "";
$password = "";
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO("mysql:host=$server;dbname=$name_database", "$name_user", "$password", $pdo_options);
?>