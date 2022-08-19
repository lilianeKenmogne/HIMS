<?php
session_start();
require('actions/rdv/listeRdvAction.php');
 ?>

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
            <form  method="GET">
              <div class="form-group row">

                 <div class="col-8">
                    <input type="search" name="search" class="form-control">
                 </div>
                 <div class="col-4">
                    <button class="btn btn-success" type="submit">Rechercher </button>
                 </div>

              </div>
           </form>
            <div>
                <table class="table">
                    <caption>Reservations du jour</caption>
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Heure</th>
                            <th scope="col">Email </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                        <?php
                        $i=2;
                           while (($rdv = $getAllRdv -> fetch())) {
                         ?>
                         <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $rdv['Thoraire']; ?></td>
                            <td><a href="edit-rdv.php?id=<?= $rdv['id']; ?>"><?= $rdv['email_autheur']; ?></a></td>
                            
                        </tr>
                       <?php
                       $i=$i+1;
                          }
                       ?>

                    </tbody>
                </table>
            </div>



        </div>
    </section><!-- End Appointment Section -->

    <?php include('includes/footer.php'); ?>

</body>


