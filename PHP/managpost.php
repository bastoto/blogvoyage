<?php
include("bdd.php");
$req0 = $bdd -> query('SELECT * FROM posts');

?>

<h1> My articles </h1>
<div id="articlescontainer" class="row ml-4">
    <?php

    echo "<table class='table'>
  <thead>
  <tr>
    <th scope='col' >Titre</th>
    <th scope='col' >Image</th>
    <th scope='col' >Contenu</th>
  </tr>
  </thead>";

    while ($result0 = $req0 -> fetch()){
        echo "<tr>";
        echo "<td>".$result0['titre']."</td>";
        echo "<td>".$result0['image']."</td>";
        echo "<td>".$result0['contenu']."</td>";
        echo "</tr>";
    }
    ?>
    </table>
</div>

