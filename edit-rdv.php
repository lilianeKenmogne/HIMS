<?php
 require ('actions/patients/securityAction.php'); 
 require ('actions/rdv/getInfoOfEdidRdvAction.php');
 require ('actions/rdv/editRdvAction.php'); 

 ?>
<!DOCTYPE html>
<html lang="en">
<?php  include("includes/head.php"); ?>
<style>
    .horaires{
        display:flex;
        justify-content: space-between;
        flex-wrap:wrap;
    }
    .tranchehoraire{
        width: 150px;
        height:50px;
        display:flex;
        justify-content: space-around;
        align-items: center;
        
    }

</style>
<body>
    <br><br>
    <form class="container " action="" method="POST">
        <?php  if(isset($errorMsg)){ echo '<p>' .$errorMsg. '</p>'; } ?> 

       
        <div class="mb-3">
            <label for="exampleInputEmail" class=" form-label" >Jour du rendez vous :</label>
            <input type="date" class="form-control" name="jourrdv" value="<?=  $jourrdv; ?>">
        </div><br>
        <hr><br>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label" >Tranche horaire du rendez-vous :</label>
            <div class="horaires">
                <div class="tranchehoraire">
                  <input type="radio" value="8h00-10h00" name="Thoraire">
                  <label class="form-label" >8h00-10h00</label>
                </div>
                <div class="tranchehoraire ">
                  <input type="radio" value="10h00-12h00" name="Thoraire">
                  <label class="form-label" >10h00-12h00</label>
                </div>
                <div class="tranchehoraire ">
                  <input type="radio" value="13h00-15h00" name="Thoraire">
                  <label class="form-label" >13h00-15h00</label>
                </div>
                <div class="tranchehoraire ">
                  <input type="radio" value="15h00-17h00" name="Thoraire">
                  <label class="form-label" >15h00-17h00</label>
                </div>
                
            </div>
 
        </div>
        <button type="submit" class="btn btn-primary " name="validate">Modifier votre rendez vous</button>
      
    </form>

</body>
</html>