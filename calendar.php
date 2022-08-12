<?php require('actions/rdv/rdvAction.php');
echo ('require okay'); ?>

<!DOCTYPE html>
<html lang="en">
<?php
include('includes/head.php');
?>
<style>
    /* * {
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            list-style: none;
            margin: 0;
            outline: none;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        body,
        html {
            height: 100%;
        }

        body {
            background: #dfebed;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            align-items: center;
            display: flex;
            height: 100%;
            justify-content: center;
            margin: 0 auto;
            max-width: 600px;
            width: 100%;
        } */

    .calendar {
        background: #2b4450;
        border-radius: 4px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, .3);
        height: 501px;
        perspective: 1000;
        transition: .9s;
        transform-style: preserve-3d;
        width: 100%;
    }

    /* Front - Calendar */
    .front {
        transform: rotateY(0deg);
    }

    .current-date {
        border-bottom: 1px solid rgba(73, 114, 133, .6);
        display: flex;
        justify-content: space-between;
        padding: 30px 40px;
    }

    .current-date h1 {
        color: #dfebed;
        font-size: 1.4em;
        font-weight: 300;
    }

    .week-days {
        color: #dfebed;
        display: flex;
        justify-content: space-between;
        font-weight: 600;
        padding: 30px 40px;
    }

    .days {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .weeks {
        color: #fff;
        display: flex;
        flex-direction: column;
        padding: 0 40px;
    }

    .weeks div {
        display: flex;
        font-size: 1.2em;
        font-weight: 300;
        justify-content: space-between;
        margin-bottom: 20px;
        width: 100%;
    }

    .last-month {
        opacity: .3;
    }

    .weeks span {
        padding: 10px;
    }

    .weeks span.active {
        background: #82c2fa.1;
        border-radius: 20%;
    }

    .weeks span:not(.last-month):hover {
        cursor: pointer;
        font-weight: 600;
    }

    .event {
        position: relative;
        background: #8bc5f8;
    }

    .event:after {
        content: '•';
        color: #8bc5f8;
        font-size: 1.4em;
        position: absolute;
        right: -4px;
        top: -4px;
    }

    /* Back - Event form */

    .back {
        height: 100%;
        transform: rotateY(180deg);
    }

    .back input {
        background: none;
        border: none;
        border-bottom: 1px solid rgba(73, 114, 133, .6);
        color: #dfebed;
        font-size: 1.4em;
        font-weight: 300;
        padding: 30px 40px;
        width: 100%;
    }

    .info {
        color: #dfebed;
        display: flex;
        flex-direction: column;
        font-weight: 600;
        font-size: 1.2em;
        padding: 30px 40px;
    }

    .info div:not(.observations) {
        margin-bottom: 40px;
    }

    .info span {
        font-weight: 300;
    }

    .info .date {
        display: flex;
        justify-content: space-between;
    }

    .info .date p {
        width: 50%;
    }

    .info .address p {
        width: 100%;
    }

    .actions {
        bottom: 0;
        border-top: 1px solid rgba(73, 114, 133, .6);
        display: flex;
        justify-content: space-between;
        position: absolute;
        width: 100%;
    }

    .actions button {
        background: none;
        border: 0;
        color: #fff;
        font-weight: 600;
        letter-spacing: 3px;
        margin: 0;
        padding: 30px 0;
        text-transform: uppercase;
        width: 50%;
    }

    .actions button:first-of-type {
        border-right: 1px solid rgba(73, 114, 133, .6);
    }

    .actions button:hover {
        background: #497285;
        cursor: pointer;
    }

    .actions button:active {
        background: #5889a0;
        outline: none;
    }

    /* Flip animation */

    .flip {
        transform: rotateY(180deg);
    }

    .front,
    .back {
        backface-visibility: hidden;
    }
    
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
        .button {
  background-color: whitesmoke;
  color: #3291e6;
  border-radius: 10px;
  margin-left: 160px;
}

.th {
  margin-left: 300px;
}

.table {
  background-color: whitesmoke;
  border: left 2px;
  border: right 2px;
  padding: 2px;
}
</style>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">Hopital</a></h1>
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

            <!-- Tabs navs -->
            <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex1-tab-1" data-bs-toggle="tab" href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">Etape 1</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-2" data-bs-toggle="tab" href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">Etape 2</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-3" data-bs-toggle="tab" href="#ex1-tabs-3" role="tab" aria-controls="ex1-tabs-3" aria-selected="false">Etape 3</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-4" data-bs-toggle="tab" href="#ex1-tabs-4" role="tab" aria-controls="ex1-tabs-4" aria-selected="false">Etape 4</a>
                </li>
            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex1-content">
                <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                    <div class="mt-5">
                        <p>
                        <h5 class=" mb-5">Indiquez la raison de votre rendez-vous</h5>
                        </p>
                         <!-- ======= Appointment Section ======= -->


        <div class="row">
           <div class="col-5 col-md-2 motif" >
                <a href="" >Vaccination</a>
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
    <!-- End Appointment Section -->
                        <form method="POST">
                            <div class="text-center mt-3 "><button href="#ex1-tab-2" name="valider"><a href="#ex1-tabs-2">Suivant</a></button></div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                    <div class="mt-5">
                        <p>
                        <h5 class=" mb-5">choisissez la date qui vous convient</h5>
                        </p>
                        <form method="POST" class="mt-20">
                            <div class="row">

                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Date du rendez-vous">
                                    <!-- <div class="validate"></div> -->
                                    <div class=" mt-5"><button type="submit" name="valider">suivant</button></div>
                                </div>

                                <div class="col-md-6 ">
                                    <div class="container">
                                        <div class="calendar">
                                            <div class="front">
                                                <div class="current-date">
                                                    <h1>Dates disponibles</h1>
                                                    <h1>Aout 2022</h1>
                                                </div>

                                                <div class="current-month">
                                                    <ul class="week-days">
                                                        <li>MON</li>
                                                        <li>TUE</li>
                                                        <li>WED</li>
                                                        <li>THU</li>
                                                        <li>FRI</li>
                                                        <li>SAT</li>
                                                        <li>SUN</li>
                                                    </ul>

                                                    <div class="weeks">
                                                        <div class="first">
                                                            <span class="last-month">28</span>
                                                            <span class="last-month">29</span>
                                                            <span class="last-month">30</span>
                                                            <span class="last-month">31</span>
                                                            <span>01</span>
                                                            <span>02</span>
                                                            <span>03</span>
                                                        </div>

                                                        <div class="second">
                                                            <span>04</span>
                                                            <span>05</span>
                                                            <span class="active">06</span>
                                                            <span class="active">07</span>
                                                            <span class="active">08</span>
                                                            <span class="active">09</span>
                                                            <span>10</span>
                                                        </div>

                                                        <div class="third">
                                                            <span>11</span>
                                                            <span class="active">12</span>
                                                            <span class="active">13</span>
                                                            <span class="active">14</span>
                                                            <span class="active">15</span>
                                                            <span class="active">16</span>
                                                            <span class="active">17</span>
                                                        </div>

                                                        <div class="fourth">
                                                            <span>18</span>
                                                            <span>19</span>
                                                            <span>20</span>
                                                            <span>21</span>
                                                            <span>22</span>
                                                            <span>23</span>
                                                            <span>24</span>
                                                        </div>

                                                        <div class="fifth">
                                                            <span>25</span>
                                                            <span>26</span>
                                                            <span>27</span>
                                                            <span>28</span>
                                                            <span>29</span>
                                                            <span>30</span>
                                                            <span>31</span>
                                                        </div>
                                                        <div class="fifth">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="back">
                                                <input placeholder="What's the event?">
                                                <div class="info">
                                                    <div class="date">
                                                        <p class="info-date">
                                                            Date: <span>Jan 15th, 2016</span>
                                                        </p>
                                                        <p class="info-time">
                                                            Time: <span>6:35 PM</span>
                                                        </p>
                                                    </div>
                                                    <div class="address">
                                                        <p>
                                                            Address: <span>129 W 81st St, New York, NY</span>
                                                        </p>
                                                    </div>
                                                    <div class="observations">
                                                        <p>
                                                            Observations: <span>Be there 15 minutes earlier</span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="actions">
                                                    <button class="save">
                                                        Save <i class="ion-checkmark"></i>
                                                    </button>
                                                    <button class="dismiss">
                                                        Dismiss <i class="ion-android-close"></i>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                    <div class="mt-5">
                        <p>
                        <h5 class=" mb-5">choisissez la tranche horaire qui vous convient</h5>
                        </p>
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
                        <form method="POST" class="mt-20">
                            <div class="row">


                            </div>

                            <div class="text-center mt-3"><button type="submit" name="valider">suivant</button></div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                    <div class="mt-5">
                        <p>
                        <h5 class=" mb-5">Information du concerné</h5>
                        </p>
                        <form method="POST" class="mt-20">
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
                                    <input type="email" name="email" class="form-control " id="date" placeholder="your email">
                                    <!-- <div class="validate"></div> -->
                                </div>
                            </div>

                            <div class="text-center mt-3"><button type="submit" name="valider">suivant</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Tabs content -->

        </div>
    </section><!-- End Appointment Section -->

    <?php include('includes/footer.php'); ?>

</body>