<?php
include('connexion.php');
include('header.php');

// Delete recepie
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT `id`, `creator_id`, `title`, `image`, `ingredients`, `description`, `category`, `nbr_people`, `publishdate`, `level`, `video`, `rating` FROM `recettes` WHERE id=$id";
$results = $bdd->query($sql);
$donnees = $results->fetch();
}

if(isset($_POST['supprimer'])) {
    $id = $_POST ['id'];
$sql = "DELETE FROM `recepies` WHERE id=$id";
$results = $bdd->query($sql);
header("location:list-recepie.php");
}

?>
 
<section> <!--formulaire suppression des recettes-->
        <form action="delete-recepie.php" method="post" style="padding:150px">
           
        <h2>Formulaire de suppression des recettes</h2>
            
            <label for="id">ID</label>
            <input type="text" name="idvisible" value="<?php echo $donnees['id'];?>" disabled>
            <input type="hidden" name="id" value="<?php echo $donnees['id'];?>">

            <label for="creator_id">Identifiant du créateur_rice</label>
            <input type="text" name="creator_id" value="<?php echo $donnees['creator_id'];?>" disabled>

            <label for="title">Titre de la recette</label>
            <input type="title" name="title" value="<?php echo $donnees['title'];?>" disabled>

            <label for="image">Image</label>
            <input type="image" name="image" value="<?php echo $donnees['image'];?>" disabled>

            <label for="ingredients">Description de la recette</label>
            <input type="ingredients" name="ingredients" value="<?php echo $donnees['ingredients'];?>" disabled>

            <label for="description">Description de la recette</label>
            <input type="description" name="description" value="<?php echo $donnees['description'];?>" disabled>

            <label for="category">Catégorie</label>
            <input type="category" name="category" value="<?php echo $donnees['category'];?>" disabled>

            <label for="nbr_people">Nombre de parts</label>
            <input type="nbr_people" name="nbr-people" value="<?php echo $donnees['nbr_people'];?>" disabled>

            <label for="publishdate">Date de publication</label>
            <input type="publishdate" name="publishdate" value="<?php echo $donnees['publishdate'];?>" disabled>

            <label for="level">Niveau de difficulté</label>
            <input type="level" name="level" value="<?php echo $donnees['level'];?>" disabled>

            <label for="video">Video</label>
            <input type="video" name="video" value="<?php echo $donnees['video'];?>" disabled>

            <label for="rating">Score</label>
            <input type="rating" name="rating" value="<?php echo $donnees['rating'];?>" disabled>


            <button type="submit" name="supprimer">Supprimer</button>
        </form>
</section>