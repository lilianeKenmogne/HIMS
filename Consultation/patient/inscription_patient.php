
<!DOCTYPE html>
<html lang="en">
<?php include('head.php');?>
<body>
    <h2>INSCRIPTION PATIENT</h2>
    <br><br>
    <form class="container" method="POST" action="traitement_patient.php" >
        
    <div class="mb-3">
        <label for="lastname" class="form-label">Nom</label>
        <input type="text" class="form-control" name="lastname">
    </div>
    <div class="mb-3">
        <label for="firstname" class="form-label">Prenom</label>
        <input type="text" class="form-control" name="firstname">
    </div>
    <div class="mb-3">
        <label for="mail" class="form-label">Email</label>
        <input type="email" class="form-control" name="mail">
    </div>
    <div class="mb-3">
        <label for="num" class="form-label">Tel</label>
        <input type="telephone" class="form-control" name="num">
    </div>
    <div class="mb-3">
        <label for="pass" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="pass" >
    </div>
    
    <button type="submit" class="btn btn-primary" name="validate">S'inscrire pour un rendez-vous</button>
    </form>
   
</body>
</html>