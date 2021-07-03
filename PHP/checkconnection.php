<?php
include("bdd.php");

if (isset($_POST["arg1"]) && isset($_POST["arg2"])) {
    $username=  $_POST["arg1"];
    $password= $_POST["arg2"];
    $req0 = $bdd -> query('SELECT * FROM login WHERE username ="'. $username .'" AND password ="'. $password.'" ' );
    $result0 = $req0 -> fetch(); //* La requette doit avoir le meme numero de la ligne d'avant 
    if ($result0["username"]==""){
        echo "<div class='alert alert-danger text-center'  role='alert'>
 Les informations saissies sont incorrectes 
</div>";

    }else {
        echo "connected";
    }

}
?>