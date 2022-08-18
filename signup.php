<?php require('actions/patients/signUpAction.php');  ?>
<!DOCTYPE html>
<html lang="en">
<?php  include("includes/head.php"); ?>
<body>
    <br><br>
    <form class="container" action="" method="POST">
        <?php  if(isset($errorMsg)){ echo '<p>' .$errorMsg. '</p>'; } ?> 

       
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label" >Nom :</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label" >Prenom :</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class=" form-label" >E-mail :</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class=" form-label" >Tel :</label>
            <input type="text" class="form-control" name="tel">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label" >Mot de passe :</label>
            <input type="text" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire pour un rendez-vous</button>
        <br> <br>
        <a href="login-patient.php"> <p>J'ai deja un compte, je me connecte</p></a>
    </form>

</body>
</html>