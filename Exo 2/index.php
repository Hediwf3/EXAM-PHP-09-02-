<?php

session_start();
include_once ('./includes/head.php');
include_once ('./includes/formConvertisseur.php');

$_SESSION['error'] = false;


if($_SESSION['error'] = true){

    echo 'veuillez entre un nombre valide';
}