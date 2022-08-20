<?php
require('actions/patients/InscriptionAction.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?> 
<style>
    .mb-3{
        
        height: 7vh;
       
    }
    .d-flex{
        display:flex;
        justify-content:space-between;
    }
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>

<body>
<div class="container bg-white rounded-top mt-5" id="zero-pad">
<div class="row d-flex justify-content-center">
<div class="col-lg-10 col-12 pt-3">
    <div class="d-flex">
        <div class="pt-1"><h2><a href="../../index.php"> HIMS </a> </h2></div>
        <div class="ml-auto p-2"><a href="pages/login.php" class="text-dark text-decoration-none " id="mobile-font "><h2><a href="">TEST VIH</a></h2></div>
                                                    
    </div> <br><br>
    <?php
    if(isset($errors)){
        echo "<div class='alert alert-danger'>".''."</div>";
    }
    ?>
    
    <div class="" style="margin:auto;">
        <form class="container" action="" method="post">
            <h1 class="text-center ">inscription patient</h1> <br> <br>     
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nom" name="nom" required="required">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Prenom" name="prenom" required="required">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email" required="required">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Telephone" name="telephone" required="required">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Mot de passe" name="password" required="required">
            </div>
            <div class="mb-3">
                <button type="submit"  name="submit" class="btn btn-primary  btn-block"> incrire</button>
            </div>
                 
        </form>
        
    </div>
</div>
</div>
</div>
 
</body>
</html>