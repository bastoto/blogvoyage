<h1>My administration </h1>
<div class="row"><h2 class="col col-6 cursor" id="actionnewpost">Add new post</h2>
    <h2 class="col col-6 cursor" id="actioneditpost">Edit my posts</h2>
</div>
<div id="newpost">
    <div class="form-group">
        <label for="exampleInputPrenom">Post title</label>
        <input type="text" class="form-control" id="posttitle" aria-describedby="" placeholder="My title">    </div>
    <div class="form-group">
        <label for="exampleInputPrenom">Image</label>
        <input type="text" class="form-control" id="postimage" aria-describedby="" placeholder="My image">    </div>
    <div class="form-group">
        <label for="exampleInputPrenom">Post text</label>
        <textarea id="posttext" class="form-control" placeholder="My text"></textarea>    </div>
    <button type="submit" class="btn btn-primary" id= "submitpost">Submit</button>

    <div id="resultform"> </div>  </div>

<div id="editpost">

    <?php
    include("managpost.php");

    ?>
</div>




//pour l'administration interieure : 
recréer un tableau genre PHPmyAdmin
voir w3 school au niveau tableau
creer une nouvelle page php "managpost.php" 
reprendre le code d'article.php
rendre les donnes du tableau editable a voir 