<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09/02/2018
 * Time: 14:25
 */

echo ' 

<form  name="form"  method="POST" action="./includes/ajoutFilm.php">
<input type="text" name="title" placeholder="title" minlength="5">
<input type="text" name="actors" placeholder="actors" minlength="5">
<input type="text" name="director" placeholder="director" minlength="5">
<input type="text" name="producer" placeholder="producer" minlength="5">
<select name="year" id="year">
<option selected="selected" value="default">Année</option>
';

for ($i=1900; $i<date('Y'); $i++){

    $dateN1 = date($i, strtotime("+$i year"));
    echo '<option value="\''.$i.'\'" name="year">'.$dateN1.'</option>';



};
echo '
</select>

<select name="langue" id="langue">
    
    <option value="default">langage</option>
    <option value="anglais">Anglais</option>
    <option value="francais">Francais</option>
    <option value="espagnol">Espagnol</option>
    <option value="mandarin">Mandarin</option>

</select>
<select name="category" id="category">
    
    <option value="default">Genre</option>
    <option value="Action">Action</option>
    <option value="Comedie">Comedie</option>
    <option value="Drame">Drame</option>
    <option value="Thriller">Thriller</option>
    <option value="SF">SF</option>
    
</select>

<textarea name="storyline"></textarea> 

<input type="url" name="video" placeholder="Liens de la bande annonces" >  
<input type="submit" value="ajouter ce film">

';