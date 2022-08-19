<?php
echo ('require okay'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mon hopital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>  
        .motif {
            margin:10px;
             background-color:white ;
             height: 45px;
              display:flex;
            border-radius: 20px; 
             align-items: center; 
            justify-content: center;
        }
        .row {
            display:flex;
            justify-content: space-around;  
            flex-wrap:wrap;
        }
        .row a {
            color: black;
            text-align: center;
        }
        .motif a:hover {
            color: blue;
        }
        .motif:hover {
            background-color: ;
        }
</style>
</head>

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
               
            </div>
        </div>

        <div class="row">
           <div class="col-5 col-md-2 motif" >
                <a href="accueilvaccination.php">Vaccination</a>
           </div>
           <div class="col-5 col-md-2  motif" >
              <a href="">Test COVID</a>
           </div>
           <div class="col-5 col-md-2 motif">
              <a href="">Bilan de sante</a>
           </div>
           <div class="col-5 col-md-2 motif" >
              <a href="">Consultation Ophtalmologique</a>
           </div>
        </div>
    </section><!-- End Appointment Section -->
      



    <?php include('includes/footer.php'); ?>

</body>