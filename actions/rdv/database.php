<?php
echo ("bjr");
session_start();
try {
    echo ("bjr");
    $bdd = new PDO('mysql:host=localhost;dbname=hims', 'root', '');
    echo ("bjr");
} catch (Exception $e) {

    die('une erreur a été trouvée: ' . $e->getMessage()); // die permet de faire
    // planter le code et affice un message a l'ecran
}
