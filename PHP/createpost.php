<?php
include("bdd.php");

if (isset($_POST["arg1"]) && isset($_POST["arg2"]) && isset($_POST["arg3"])) {
    $titrepost=  $_POST["arg1"];
    $textpost= $_POST["arg2"];
    $imagepost= $_POST["arg3"];
    $req0 = $bdd -> exec('INSERT INTO posts(titre,contenu,image) VALUES("'.$titrepost.'","'.$textpost.'","'.$imagepost.'")');
    
    echo "<div class='alert alert-sucess text-center'  role='alert'>
 Your post has been added 
</div>";
    

    
}
?>