<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09/02/2018
 * Time: 14:54
 */

session_start();

$bdd = new PDO($_SESSION['host'], $_SESSION['ndcSQL'], $_SESSION['mdpSQL']);




    if(!testExist('title') && !testExist('storyline')) {

        $req = $bdd->prepare('INSERT INTO movies (title, actors, director, producer, year_of_prod, langue, category, storyline, video ) VALUES(:title, :actors, :director, :producer, :year_of_prod, :langue, :category, :storyline, :video)');
        $req->execute(array(
            'title' => $_POST['title'],
            'actors' => $_POST['actors'],
            'director' => $_POST['director'],
            'producer' => $_POST['producer'],
            'year_of_prod' => $_POST['year'],
            'langue' => $_POST['langue'],
            'category' => $_POST['category'],
            'storyline' => $_POST['storyline'],
            'video' => $_POST['video'],

        ));

        echo "le film a bien été ajouté";

        echo '<br><a href="../index.php">Souhaitez vous ajouter un autre film ? </a> <br>
               <a href="afficheFilms.php">Voir tous les films </a>
';

    }
    else{
        echo 'ce film est déja dans notre base de donnée';
   }



function testExist($var) {
    $bdd = new PDO($_SESSION['host'], $_SESSION['ndcSQL'], $_SESSION['mdpSQL']);
    $data = $bdd->query('SELECT * FROM movies');

    $test = false;

    while ($user = $data->fetch()) {
        if($user[$var] == $_POST[$var]) {
            $test = true;
        }
    }

    return $test;
}