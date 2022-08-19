<?php

require('actions/database.php');
//Recuperer les rdv par defaut sans recherche
$getAllRdv = $bdd -> query('SELECT jourrdv, Thoraire, email_autheur, id_autheur FROM rdv ORDER BY  id AND Thoraire DESC LIMIT 0,50');

//verifier si la recherche a ete rentree par l'utilisateur
if(isset($_GET['search']) AND !empty($_GET['search'])) {

    //la recherche
    $usersSearch = $_GET['search'];


    //recuperer toutes les rdv qui correspondent a la recherche
    $getAllRdvs = $bdd -> query('SELECT jourrdv, Thoraire, email_autheur, id_autheur FROM rdv WHERE id  LIKE "%'.$usersSearch.'%" ORDER BY id DESC');
}