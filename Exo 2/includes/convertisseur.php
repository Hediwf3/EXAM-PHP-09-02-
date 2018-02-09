<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09/02/2018
 * Time: 13:37
 */
    session_start();


if (isset($_POST['montant']) && $_POST['montant'] != 0 && $_POST['montant'] != ''){

    $conversion = $_POST['montant']*1.085965;
    echo $_POST['montant'] . ' euros est égale à ' . $conversion . ' dollars ';
}

else{

    echo "veuillez inserez un nombre valide";
    echo '<br><a href="../index.php">Retour</a>';

}
