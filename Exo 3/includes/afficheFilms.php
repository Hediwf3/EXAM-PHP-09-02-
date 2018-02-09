<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09/02/2018
 * Time: 16:14
 */

session_start();

$bdd = new PDO($_SESSION['host'], $_SESSION['ndcSQL'], $_SESSION['mdpSQL']);



$req = $bdd->query('SELECT * FROM movies ORDER BY ID_MOVIE DESC');


while($movie = $req->fetch()) {

    $title = $movie['title'];
    $director = $movie['director'];
    $year = $movie['year_of_prod'];
    $id = $movie['ID_MOVIE'];

    echo '
      
            <div class="movie" style="width: 20%">
            <table style="border-collapse: collapse width: 20% ">
   <tr>
       <th style="border: 1px solid black;">Titre</th>
       <th style="border: 1px solid black;">Réalisateur</th>
       <th style="border: 1px solid black;">Annee de production</th>
       <th style="border: 1px solid black;">Plus d\'informations</th>
   </tr>

   <tr>
       <td style="border: 1px solid black;">'. $title .'</td>
       <td style="border: 1px solid black;">'. $director .'</td>
       <td style="border: 1px solid black;">'. $year .'</td>
       <td style="border: 1px solid black;"> <a href="./affiche.php?'. $title . $id .'.php">plus d\'info</a></td> 
   </tr>
  
</table>
     </div>      
      
        ';
}
