<?php
session_start();


include_once ('./includes/head.php' );
include_once ('./includes/formAjoutFilm.php');

$_SESSION['host'] = 'mysql:host=localhost;dbname=exo3;charset=utf8';
$_SESSION['ndcSQL'] = 'root';
$_SESSION['mdpSQL'] = '';


$bdd = new PDO($_SESSION['host'], $_SESSION['ndcSQL'], $_SESSION['mdpSQL']);