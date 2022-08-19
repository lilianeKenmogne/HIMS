<?php

require ('actions/database.php');

//verifier si l'id du rdv  est bien passe en parametre
if(isset($_GET['id']) AND !empty($_GET['id'])) {
  
    //verifier si le rdv existe
    $idOfRdv = $_GET['id'];
    $checkIfRdvExists= $bdd -> prepare ('SELECT * FROM rdv WHERE id = ?');
    $checkIfRdvExists ->execute (array($idOfRdv));

    if($checkIfRdvExists -> rowCount() > 0) {

        //recuperer  les donnees de la question

         $rdvInfo = $checkIfRdvExists -> fetch();
         if($rdvInfo['id_autheur'] == $_SESSION['id']) {

              $jourrdv = $rdvInfo['jourrdv'];
               $tranchehoraire1 = $rdvInfo['Thoraire'];

         }else{
            $errorMsg = "Desole! Vous n'etes pas l'auteur de ce rendez vous ";
         }

    } else{
        $errorMsg = "Desole! vous n'avez aucun rendez vous en cours";
    }

} else{
    $errorMsg = "Desole! vous n'avez aucun rendez vous en cours";
}