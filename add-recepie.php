<?php
include('connexion.php');
include('header.php');
// Insert a new recepie
//print_r($_POST);
if(isset($_POST['submit'])) {
    $author = 1;
    $title = $_POST['title'];
    $image = $_POST['image'];
    $ingredients = $_POST['ingredients'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $nbr_people = $_POST['nbr_people'];
    $publish_date = $_POST['publish_date'];
    $prep_time = $_POST['prep_time'];
    $level = $_POST['level'];
    $video = $_POST['video'];
    $rating = $_POST['rating'];
    
$sql = "insert into recepies (author, title, image, ingredients, description, category, nbr_people, publish_date, level, video, rating, prep_time) VALUES ($author, '$title', '$image', '$ingredients', '$description', '$category', '$nbr_people', '$publish_date', '$level', '$video', '$rating', '$prep_time')";

var_dump($sql);

$results = $bdd->query($sql);
//$bdd->exec($sql);
//var_dump($results);
    if ($results) {
        echo "Votre recette a bien été ajoutée! 😋";
    } else {
       // var_dump($bdd->errorInfo());
    die("erreur:");
    }
//die();
header("location:list-recepie.php");   
}
?>


<section> <!--formulaire gestion des recettes-->
    <form method="post" action="add-recepie.php">
        <div class="form-group">
            <label for="title">Titre de la recette</label>
            <input type="title" class="form-control" name="title" id="title" placeholder="Entrez le nom de la recette">
        </div>
      
        <div class="form-group">
            <label for="category">Catégorie</label>
            <select class="form-control" id="level" name="category">
            <option>Choisissez votre catégorie</option disabled>
            <option>Cuisine Japonaise</option>
            <option>Cuisine Egyptienne</option>
            <option>Cuisine Mexicaine</option>
            </select>
        </div>
  
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" name= "image" id="image" placeholder="">
        </div>
 

        <div class="form-group">
            <label for="prep_time">temps de préparation</label>
            <input type="time" class="form-control" name= "prep_time" id="prep_time=">
            </div>  
     
        
            <div class="form-group">
            <label for="nbr_people">Nombre de parts</label>
            <input type="text" class="form-control" name= "nbr_people" id="nbr_people" placeholder="">
        </div>
    

        <div class="form-group">
            <label for="level">Niveau de difficulté</label>
            <select class="form-control" name= "level" id="level">
            <option>Facile</option>
            <option>Intermediaire</option>
            <option>Difficile</option>
            </select>
        </div>

        <div class="form-group">
            <label for="ingredients">Ingrédients</label>
            <textarea class="form-control" name= "ingredients" id="ingredients" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="description">Description de la recette</label>
            <textarea class="form-control" name= "description" id="description" rows="3"></textarea>
        </div>
       

        <div class="form-group">
            <label for="creator_id">créateur_rice de la recette</label>
            <input type="text" class="form-control" name= "creator_id" id="creator_id" placeholder="Entrez votre identifiant">
        </div>
        
        <div class="form-group">
            <label>Date de publication</label>
            <input type="date" class="form-control" name= "publish_date" id="publish_date" placeholder="">
        </div>

        <div class="form-group">
            <label for="video">Tutoriel</label>
            <input type="text" class="form-control" name= "video" id="video" placeholder="Insérer url de la video">
        </div>

        <div class="form-group">
            <label for="rating">Avis</label>
            <input type="text" class="form-control" name= "rating" id="rating" placeholder="">
        </div>

        <button type="submit" name="submit">Valider</button>
    </form>
</section>

<?php
include('footer.php');
?>