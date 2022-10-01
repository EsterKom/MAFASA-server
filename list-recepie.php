<?php
include('connexion.php');
include('header.php');
/*Requête des toutes les recettes*/
//echo "Gestion des recettes";

$gestionRecettes = $bdd->query("SELECT * FROM `recepies` WHERE `id` > 0");
// $gestionRecettes->closeCursor();
?>
<!-- Tableau html pour update des admins -->
<section style="padding:150px">
  <table class="table">
   <thead>
    <tr>
    <th scope="col">Id</th>
      <!-- <th scope="col">IdCreator</th> -->
      <th scope="col">Title</th>
      <!-- <th scope="col">Image</th> -->
      <!-- <th scope="col">Description</th> -->
      <th scope="col">Category</th>
      <th scope="col">Nbr_people</th>
      <th scope="col">Prep time</th>
      <th scope="col">Difficulté</th>
      <th scope="col">Publish date</th>
      <th scope="col">Photo</th>
      <th scope="col">Modification</th>
      <th scope="col">Suppression</th>
    </tr>
   </thead>
<?php
  while($donnees = $gestionRecettes->fetch()){
    echo '<tr>';
    echo'<td>'.$donnees['id'].'</td>';
    // echo'<td>'.$donnees['creator_id'].'</td>';
    echo'<td>'.$donnees['title'].'</td>';
    echo'<td>'.$donnees['category'].'</td>';
    echo'<td>'.$donnees['nbr_people'].'</td>';
    echo'<td>'.$donnees['prep_time'].'</td>';
    echo'<td>'.$donnees['level'].'</td>';
    echo'<td>'.$donnees['publish_date'].'</td>';
    echo'<td><img src="' .$donnees['image'].'" width="50" height="50"/></td>';
    // echo'<td>'.$donnees['ingredients'].'</td>';
    // echo'<td>'.$donnees['description'].'</td>';
    
   
    
    
    
    // FAIRE LE LIEN ENTRE LES DEUX FAUX BOUTONS ET LES FICHIERS AVEC LES REQUETES UPDATE
    echo'<td> <a class="btn btn" href="update-recepie.php?id='.$donnees['id'].'"   role="button">Modifier</a></td>';
    echo'<td> <a class="btn btn" href="delete-recepie.php?id='.$donnees['id'].'" role="button">Supprimer</a></td>';
    echo '</tr>';
  }
  ?>
  </table>
</section>

<?php
include('footer.php');
?>