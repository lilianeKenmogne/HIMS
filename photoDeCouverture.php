<?php
include('includes/admin/adminheadLayout.php');
?>

<h1>Changer la Photo de Couverture du site</h1>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple />
    <input type="submit" value="Upload File" name="submit" />
</form>

<h4>Apercu sur le site</h4>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <h1>Bienvenue à l'hopital</h1>
        <h2>Les meilleurs proffessionnels au service de votre santé</h2>
        <a href="#event-list" class="btn-get-started scrollto">voir les dernieres nouvelles</a>
    </div>
</section><!-- End Hero -->

<button type="submit" class="btn btn-primary" name="validate">Envoyer</button>


<!-- <script>
    let hero = document.getElementById('hero');

    hero.setAttribute('style', 'background: url("../img/hero-bg.jpg") top center;')
</script> -->
<?php include('includes/admin/adminfooterLayout.php') ?>