<?php
$server = "localhost"; //* l'adresse de mon serveur
$name_user = "root"; 
$name_database = "pocketmemories"; //* nom de ma BDD
$password = "";
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO("mysql:host=$server;dbname=$name_database", "$name_user", "$password", $pdo_options);
?>