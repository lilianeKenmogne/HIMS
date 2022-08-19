
<?php
require('actions/database.php');
//Validation du formulaire
if(isset($_POST['validate'])){

    // Verifier si le patient a complete tous les champs
    if(!empty($_POST['jourrdv']) AND !empty($_POST['Thoraire'])) {

        //les donnees du rdv
        $jourrdv = htmlspecialchars ($_POST['jourrdv']);
        $tranchehoraire1 = htmlspecialchars ($_POST['Thoraire']);
        $rdv_id_author = $_SESSION ['id'];
        $rdv_email_author = $_SESSION ['email'];
        
          //verifier si le quota des rendez vous pour un jour est atteint 
        $checkAllAppoinmentAlreadyExistADay = $bdd -> prepare ('SELECT  *FROM rdv WHERE  jourrdv= ?');
        $checkAllAppoinmentAlreadyExistADay -> execute (array ($jourrdv));

          //verifier si le patient a deja pris un rendez vous pour ce jour 
        $checkIfAppoinmentOfPatientAlreadyExistADay = $bdd -> prepare ('SELECT  *FROM rdv WHERE  jourrdv= ? AND id_autheur=?');
        $checkIfAppoinmentOfPatientAlreadyExistADay -> execute (array ($jourrdv, $rdv_id_author));

        if ($checkIfAppoinmentOfPatientAlreadyExistADay -> rowCount () == 0) {

          if ($checkAllAppoinmentAlreadyExistADay -> rowCount () < 5) {

              $checkAllAppoinmentAlreadyExistATimeSlot = $bdd -> prepare ('SELECT  *FROM rdv WHERE  Thoraire= ? AND jourrdv= ? ');
              $checkAllAppoinmentAlreadyExistATimeSlot -> execute (array ($tranchehoraire1, $jourrdv));

              if ($checkAllAppoinmentAlreadyExistATimeSlot -> rowCount () < 2) {
             
                //modifier les informations de la question qui possede l'id rentre en parametre
                $editRdvOnWebsite = $bdd -> prepare ('UPDATE rdv SET   jourrdv= ?,Thoraire= ? WHERE id = ?');
                $editRdvOnWebsite -> execute (array( $jourrdv ,  $tranchehoraire1 , $_GET['id']));

                //redirection vers la page d'affichage des questions de l'utilisateur
                header ('Location: my-rdv.php');

              }else{
                $errorMsg = "La liste des rendez vous prevue pour ce jour a cette heure est sature. Veillez choisir un autre plage horaire";
              }

          } else {
               $errorMsg = "La liste des rendez vous prevue pour ce jour est sature. Veillez choisir un autre jour";
          }
        } else{
            $errorMsg = "Vous ne pouvez prendre qu'un seul rendez vous par jour. Veillez choisir un autre jour";
        }  

    } else {
        $errorMsg = "Veillez completer tous les champs...";
     }
}
?>