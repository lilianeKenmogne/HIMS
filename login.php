<!DOCTYPE html>
<html lang="en">
<?php
include('includes/head.php');
require('actions/login/loginAction.php');
?>

<br /> <br />
<form class="container" method="POST">
    <?php  
    if (isset($errorMsg)) {
        echo $errorMsg;
    }
    ?>
    <div class="mb-3">
        <label for="pseudo" class="form-label"> pseudo</label>
        <input type="text" class="form-control" name="pseudo">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="valider">se connecter</button>

</form>

<?php include('includes/footer.php'); ?>

</body>