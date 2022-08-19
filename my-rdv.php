<?php 
      require ('actions/patients/securityAction.php'); 
      require ('actions/rdv/myRdvAction.php');    
?>

<!DOCTYPE html>
<html lang="en">
<?php  include("includes/head.php"); ?>
<body>
<br><br>
<div class = "container">
<?php


     while ($rdv = $getAllMyRdvs->fetch()){
        ?>

        <div class="card">
            <h5 class="card-header">
                    <?= $rdv['jourrdv']; ?>
            </h5>
            <div class="card-body">
                <p class="card-text">
                     <?= $rdv['Thoraire']; ?>
                </p>
                <a href="mon-rdv.php?id=<?= $rdv['id']; ?>" class="btn btn-primary">Acceder au rdv</a>
                <a href="edit-rdv.php?id=<?= $rdv['id']; ?>" class="btn btn-warning">Modifier le rdv</a>
                <a href="actions/rdv/deleteRdvAction.php?id=<?= $rdv['id']; ?>" class="btn btn-danger">Supprimer le rdv</a>
            </div>
        </div>
        <br>
        
        <?php
     }
?>
</div>
</body>
</html>