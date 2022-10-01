<?php
include('connexion.php');
include('header.php');

// Modifier nouvelle recette
if(isset($_POST['submit'])  ) {
    $id = $_POST['id'];
    // $creator_id = $_POST['creator_id'];
    $title = $_POST['title'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $nbr_people = $_POST['nbr_people'];
    $publish_date = $_POST['publish_date'];
    $level = $_POST['level'];
    $video = $_POST['video'];
    $rating = $_POST['rating'];


    
$sql= "UPDATE `recepies` SET `creator_id`='$creator_id',`title`='$title',`image`='$image',`description`='$description',`category`='$category',`nbr_people`='$nbr_people',`publish_date`='$publish_date',`level`='$level',`video`='$video' WHERE `id`= '$id'";

$results = $bdd->query($sql);

header("location:list-recepie.php");
}

if(isset($_GET['id'])){
$id = $_GET['id'];
$formUpdateRecepie = $bdd->query("SELECT * FROM `recepies` WHERE `id`= $id");
$ok = $formUpdateRecepie->fetch();

}
?>
<section> <!--formulaire de modification des recettes-->
        <form action="update-recepie.php?id=<?php echo $ok['id'] ?>" method="post" style="padding:150px">

            <h2>Formulaire de modification des recettes</h2>

            <label for="id">ID</label>
            <input type="text" name="idvisible" value="<?php echo $ok['id'];?>" disabled>
            <input type="hidden" name="id" value="<?php echo $ok['id'];?>">

            <!-- <label for="creator_id">Créateur-rice</label>
            <input type="text" name="creator_id" value="<?php echo $ok['creator_id'];?>"> -->

            <label for="title">Titre de la recette</label>
            <input type="title" name="title" value="<?php echo $ok['title'];?>">

            <label for="image">Image</label>
            <input type="image" name="image" value="<?php echo $ok['image'];?>">

            <label for="description">Description</label>
            <input type="description" name="description" value="<?php echo $ok['description'];?>">

            <label for="category">Image</label>
            <input type="category" name="category" value="<?php echo $ok['category'];?>">

            <label for="nbr_people">Nombre de parts</label>
            <input type="nbr_people" name="nbr_people" value="<?php echo $ok['nbr_people'];?>">

            <label for="publish_date">Date de publication</label>
            <input type="publish_date" name="publish_date" value="<?php echo $ok['publish_date'];?>">

            <label for="level">Niveau de difficulté</label>
            <input type="level" name="level" value="<?php echo $ok['level'];?>">

            <label for="video">Video</label>
            <input type="video" name="video" value="<?php echo $ok['video'];?>">

            <label for="rating">Score</label>
            <input type="rating" name="rating" value="<?php echo $ok['rating'];?>">


            <button type="submit" name="submit">Modifier</button>
        </form>
</section>