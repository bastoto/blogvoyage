<?php
include("bdd.php");
$req0 = $bdd -> query('SELECT * FROM posts');

?>

<h1> My articles </h1>
<div id="articlescontainer" class="row ml-4">
<?php

while ($result0 = $req0 -> fetch()){
    echo "<div class='articles col col-5 m-2'>";
    echo "<div><h3 class='titlearticle'>".$result0['titre']."</h3></div>";
    echo "<div><div class='imagearticles' style='background-image: url(".$result0['image'].")'></div></div>";
    echo "<div class='wordbreak'>".$result0['contenu']."</div>";
    echo "</div>";
}
?>
</div>

