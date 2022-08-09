<?php require('actions/rdv/listerdvAction.php'); ?>

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
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="index.php" class="appointment-btn scrollto"><span class="d-none d-md-inline"> </span>Se deconncter
            </a>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Liste des réservations du jour</h2>
                    <ol>
                        <li><a href="index.html">accueil</a></li>
                        <li>ListeReservations</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->



    </main><!-- End #main -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Les Reservations du jour</h2>

            </div>
            <div>
                <table class="table">
                    <caption>Reservations du jour</caption>
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Noms et Prenoms</th>
                            <th scope="col">Telephone</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>

                        </tr>

                    </tbody>
                </table>
            </div>



        </div>
    </section><!-- End Appointment Section -->

    <?php include('includes/footer.php'); ?>

</body>