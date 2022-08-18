<?php 
 if(isset($_POST['inscrirerdv'])) {
    header('Location: signup.php');
}
  ?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php'); ?>
<body>
    <br><br><br>
    <form class="container" action="" method="POST">
       <div class="row d-flex justify-content-center">
          <div class="col-lg-10 col-12 pt-3 row">
             <div class="col-4">
                  <button type="submit" class="btn btn-primary" name="inscrirerdv">S'inscrire pour un rendez vous</button>
             </div>
             <div class="col-3"></div>
             <div class="col-4">
                  <button type="submit" class="btn btn-primary" name="accederrdv">Acceder a mon rendez vous</button>
             </div>
          </div>
       </div>
   </form>
</body>
</html>