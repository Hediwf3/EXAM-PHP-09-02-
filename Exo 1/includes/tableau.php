<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09/02/2018
 * Time: 13:05
 */

$presentation = array(
    1 => array('prenom' => 'Hedi', 'nom' => 'Mokrani', 'adresse' => 'rue de rue', 'code postal' => '69008', 'ville' => 'Lyon', 'email' => 'hedi@gmail.com', 'telephone' => '555-155', 'naissance' => '1994-02-24'),
    2 => array('prenom' => 'Terry', 'nom' => 'Bacon', 'adresse' => 'rue de rue', 'code postal' => '76000', 'ville' => 'Rouen', 'email' => 'terry@gmail.com', 'telephone' => '555-155', 'naissance' => '1995-08-27'),
    3 => array('prenom' => 'Clémentine', 'nom' => 'Guy', 'adresse' => 'rue de rue', 'code postal' => '52100', 'ville' => 'Saint-dizier', 'email' => 'clem@gmail.com', 'telephone' => '555-155', 'naissance' => '1993-10-04'),
    4 => array('prenom' => 'Lou', 'nom' => 'Lemarié', 'adresse' => 'rue de rue', 'code postal' => '76200', 'ville' => 'Gravanchon', 'email' => 'lou@gmail.com', 'telephone' => '555-155', 'naissance' => '1993-10-04')
    );


foreach($presentation as $cle1 => $valeur1)
{
    echo "personne n°:" . $cle1 . "<br /><br/>";

    foreach ($valeur1 as $cle2=>$valeur2)

    {
        echo '<li>'.$cle2 ." : " . $valeur2 . "</li><br />";
    }
}
?>