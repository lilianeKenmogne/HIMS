<?php
session_start ();
if (!isset ($_SESSION['auth'])){
   header('Location: ../../login-patient2.php');
   
}

require ('../database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])) {
  
    //verifier si le rdv existe
    $idOfTheRdv = $_GET['id'];
    $checkIfRdvExists= $bdd -> prepare ('SELECT id_autheur FROM rdv WHERE id = ?');
    $checkIfRdvExists ->execute (array($idOfTheRdv));

    if($checkIfRdvExists -> rowCount() > 0) {

        //recuperer  les donnees du rdv

         $theRdvInfo = $checkIfRdvExists -> fetch();
         if( $theRdvInfo['id_autheur'] == $_SESSION['id']) {

              $deleteThisRdv = $bdd -> prepare ('DELETE FROM  rdv WHERE id = ?');
              $deleteThisRdv -> execute (array($idOfTheRdv));

              header('Location: ../../my-rdv.php');

         }else{
            $errorMsg = "Vous n'avez pas le droit de supprimer ce rendez vous";
         }

    } else{
        $errorMsg = "Aucun rendez vous n'a ete trouve";
    }

} else{
    $errorMsg = "Aucun rendez vous n'a ete trouve";
}