
<?php
 require ('actions/patients/securityAction.php'); 
 require ('actions/rdv/showrdvContentAction.php');
  ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php' ; ?>
<style>
     .flex {
          display: flex;
          align-items: center;
     }
     .margin{
          margin-right: 20px;
     }
</style>
<body>
    
<br><br>

    
          
       <div class="container">

       <?php   
         while (($patientInfos = $checkIfPatientExist -> fetch()) AND ($RdvInfos = $checkIfRdvExist -> fetch()) ){
        ?>

                <section class="show-content">
                     <div class='alert alert-danger text-center'>
                     <h1> felicitation  votre rendez vous a ete pris en compte</h1>
                     </div><br>
                     <div class="flex"><small class="margin">Nom et prenom: </small><h3><?=  $patientInfos['first_name'].' '.$patientInfos['last_name'] ; ?></h3></div>
                     <hr>
                     <div class="flex"> <small class="margin">Tel: </small><h3><?=  $patientInfos['tel']; ?></h3></div>
                     <hr>
                     <div class="flex"><small class="margin">Email: </small><h3><?=  $RdvInfos ['email_autheur'] ; ?></h3></div>
                     <hr>
                     <div class="flex"><small class="margin">Date du rendez vous: </small><h3><?=  $RdvInfos ['jourrdv']; ?></h3></div>
                     <hr>
                     <div class="flex"><small class="margin">Tranche horaire du rendez vous: </small> <h3><?=  $RdvInfos ['Thoraire']; ?></h3></div>
                     <hr>
                </section>

                 <?php
        }
      ?>
       </div>
</body>
</html>