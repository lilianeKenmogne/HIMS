<?php 
require('actions/patients/loginPatientAction.php'); 
 ?>
<!DOCTYPE html>
<html lang="en">
<?php  include("includes/head.php"); ?>
<body>
    <br><br>
    <form class="container" action="" method="POST">
        <?php  if(isset($errorMsg)){ echo '<p>' .$errorMsg. '</p>'; } ?> 
        <div class="mb-3">
            <label for="exampleInputEmail" class=" form-label" >E-mail :</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label" >Mot de passe :</label>
            <input type="text" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Se connecter pour un rendez-vous</button>
        <br> <br>
        <a href="signup.php"> <p>Je n'ai pas de encore un compte, je m'inscris</p></a>
    </form>

</body>
</html>