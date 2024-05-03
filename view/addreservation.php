<?php
include '../config.php';
include '../controller/ReservationC.php';
include '../controller/EventC.php';


 // Inclure le fichier contenant la classe HotelC
$ReservationC = new ReservationC(); // Créer une instance de HotelC

$error = "";

if (
    isset($_POST["date_check_in"]) &&
    isset($_POST["date_check_out"]) &&
    isset($_POST["nbr_p"]) &&
    isset($_POST["status"]) &&
    isset($_POST["id_e"]) 
) {
    if (
        !empty($_POST['date_check_in']) &&
        !empty($_POST["date_check_out"]) &&
        !empty($_POST["nbr_p"]) &&
        !empty($_POST["status"]) &&
        !empty($_POST["id_e"]) 
    ) {
       
        // Créer une instance de la classe Hotel avec les données fournies
        $Reservation = new Reservation(
            null, // Laissez null pour que l'ID soit auto-incrémenté
            $_POST['date_check_in'],
            $_POST['date_check_out'],
            $_POST['nbr_p'],
            $_POST['status'],
            $_POST['id_e']
        );

        // Ajouter l'hotel
        $ReservationC->ajouterReservation($Reservation);

        // Rediriger vers une page de succès ou effectuer une autre action en cas d'ajout réussi
        header('Location: ../view/eventFront.php');
        exit;
    } else {
        $error = "Tous les champs doivent être remplis";
    }
    $id_event = $_GET['id'];
    $eventName = isset($_GET['Nom']) ? urldecode($_GET['Nom']) : '';
    $eventPrice = isset($_GET['Prix']) ? $_GET['Prix'] : '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>AdventureAwaits</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Metas, links, and stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
            <a class="navbar-brand" href="index.html">Vacation<span>AdventureAwaits</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item active"><a href="destination.html" class="nav-link">Destination</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    <li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Places to Travel</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-6">
                <h2 class="heading-section">Make a Reservation</h2>
                
                <form action="" method="post">
                    <div class="form-group">
                        <label for="date_check_in">Check-in Date:</label>
                        <input type="date" id="date_check_in" name="date_check_in" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date_check_out">Check-out Date:</label>
                        <input type="date" id="date_check_out" name="date_check_out" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nbr_p">Number of People:</label>
                        <input type="text" id="nbr_p" name="nbr_p" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <input type="text" id="status" name="status" class="form-control" required>
                    </div>
                    <input type="hidden" name="id_e" value="<?= htmlspecialchars($_GET['id']) ?? ''; ?>">

                        
                    <input type="submit" value="Submit Reservation" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid img-thumbnail" src="<?php echo "./images/uploads/".$_GET['image']; ?>" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_GET['Nom'] ?? ''; ?></h5>
                        <p class="card-text"><strong>Event Price:</strong> <?php echo $_GET['Prix'] ?? ''; ?></p>
                    </div>
                </div>
</div>

</div>

        </div>
        </div>
    </div>
</section>


    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
    <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Vacation</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
                            <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
                            <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                            <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
                            <li><a href="#" class="py-2 d-block">Call Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Experience</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Adventure</a></li>
                            <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
                            <li><a href="#" class="py-2 d-block">Beach</a></li>
                            <li><a href="#" class="py-2 d-block">Nature</a></li>
                            <li><a href="#" class="py-2 d-block">Camping</a></li>
                            <li><a href="#" class="py-2 d-block">Party</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Question?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
</body>

</html>


