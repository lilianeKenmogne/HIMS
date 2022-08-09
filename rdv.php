<?php require('actions/rdv/rdvAction.php');
echo ('require okay'); ?>

<!DOCTYPE html>
<html lang="en">
<?php
include('includes/head.php');
?>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Hopital</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php#hero">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="index.php#event-list">Actualités</a></li>
                    <li><a class="nav-link scrollto" href="index.php#departments">Specialités</a></li>
                    <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="index.php#doctors">Personnel Soignant</a></li>
                    <li><a class="nav-link scrollto" href="index.php#contact">Nous Contacter</a></li>
                    <li><a class="nav-link scrollto connexion" href="login.php">se connecter</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="#" class="appointment-btn scrollto"><span class="d-none d-md-inline"> </span>Réserver
                une consultation</a>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Reservations</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Reservations</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->



    </main><!-- End #main -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Réserver une Consultation</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit
                    in iste officiis commodi quidem hic quas.</p>
            </div>

            <form method="POST">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="nom" placeholder="Your Name">
                        <!-- <div class="validate"></div> -->
                    </div>

                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="telephone" id="phone" placeholder="Your Phone">
                        <!-- <div class="validate"></div> -->
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Date du rendez-vous">
                        <!-- <div class="validate"></div> -->
                    </div>
                </div>

                <!-- <div class="form-group mt-3">
                <textarea class="form-control" name="description du problème" id="description" rows="5" placeholder="Message (Optional)"></textarea>
                <div class="validate"></div>
            </div> -->

                <div class="text-center mt-3"><button type="submit" name="valider">Prendre un Rendez-Vous</button></div>
            </form>

        </div>
    </section><!-- End Appointment Section -->

    <?php include('includes/footer.php'); ?>

</body>