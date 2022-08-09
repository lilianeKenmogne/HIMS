<?php

session_start();
try {
   
    $bdd = new PDO('mysql:host=localhost;dbname=hims', 'root', '');
    
} catch (Exception $e) {

    die('une erreur a été trouvée: ' . $e->getMessage()); // die permet de faire
    // planter le code et affice un message a l'ecran
}
