<?php
require('actions/database.php');

$date_jour_courant = date('d/m/Y');
$rendezVousDuJour = $bdd->prepare('SELECT nom_visiteur,tel_visiteur,id_visiteur FROM visiteur v,rendezvous r Where v.id_visiteur = r.id_visiteur ');
$rendezVousDuJour->execute();
// $rendezVousDuJour->execute(["date_jour" => $date_jour_courant]);
$liste_rdv_jour = $rendezVousDuJour->fetchAll();
foreach ($liste_rdv_jour as $liste_rdv_jou) {
    echo $liste_rdv_jou['nom_visiteur'];
}
var_dump($liste_rdv_jour);
// $rendezVousDuJour = $bdd->prepare('SELECT id_visiteur FROM rendezvous WHERE date = 
// $rendezVousDuJour->execute(array($date_jour_courant));

// $liste_rdv_jour = $rendezVousDuJour->fetchAll();
// var_dump($liste_rdv_jour);
// foreach()
// echo $date_jour_courant;
