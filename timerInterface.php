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

    <!-- ======= timer Section ======= -->
    <section id="appointment" class="appointment section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Les heures de rdv disponible</h2>

            </div>
            <div>
            <h4 class="th"> horaires de consultation</h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <td> <button id="button_1" class="button" > 8:30  </button> </td>
                            <td> <button id="button_2" class="button"> 9:00  </button> </td>
                        </tr>
                        <tr>
                            <td> <button id="button_3" class="button"> 9:30 </button> </td>
                            <td> <button id="button_4" class="button"> 10:00  </button> </td>
                        </tr>
                        <tr>
                            <td> <button id="button_5" class="button"> 10:30  </button> </td>
                            <td> <button id="button_6" class="button"> 11:00  </button> </td>
                        </tr>
                        <tr>
                            <td> <button id="button_7" class="button"> 11:30  </button> </td>
                            <td> <button id="button_8" class="button"> 12:00  </button> </td>
                        </tr>
                        <tr>
                            <td> <button id="button_9" class="button"> 12:30  </button> </td>
                            <td> <button id="button_10" class="button"> 13:00  </button> </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>



        </div>
    </section><!-- End Appointment Section -->

    <?php include('includes/footer.php'); ?>

</body>