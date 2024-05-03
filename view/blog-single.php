<?php
include '../config.php';
include '../controller/PaysC.php';
include '../controller/DescriptionC.php';
include '../controller/CommentaireC.php';
session_start();

$PaysC = new PaysC();
$DescriptionC = new DescriptionC();
$CommentaireC = new CommentaireC();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if (isset($_GET['id_com'])) {
    $id_com = $_GET['id_com'];
}

$Pays = $PaysC->getPaysById($id);
$Description = $DescriptionC->getDescriptById($id);
$Comment = $CommentaireC->getCommentByPaysId($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vacation - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">

    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <link rel="stylesheet" href="../assets/css/aos.css">

    <link rel="stylesheet" href="../assets/css/ionicons.min.css">

    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../assets/css/jquery.timepicker.css">

    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/icomoon.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        /* Styles généraux */
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        /* Navbar */
        .navbar {
            background-color: #343a40;
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff;
        }

        .nav-link:hover {
            color: #007bff;
        }

        /* Hero section */
        .hero-wrap {
            background-position: center center;
            background-size: cover;
            padding: 50px 0;
        }

        .bread {
            color: #ffffff;
            font-size: 36px;
        }

        /* Description section */
        .desc {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .desc p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .desc p strong {
            color: #f9ab30;
        }

        /* Comment section */
        .commentaires-section {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .comment {
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .comment:last-child {
            border-bottom: none;
        }

        .comment-text {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .comment-date {
            color: #666;
            font-size: 14px;
        }

        /* Footer */
        .ftco-footer {
            background-color: #343a40;
            color: #ffffff;
        }

        .ftco-footer-widget h2 {
            color: #ffffff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .ftco-footer-widget ul li {
            margin-bottom: 10px;
        }

        /* Responsiveness */
        @media (max-width: 992px) {
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 0;
                padding-left: 0;
            }
        }

        .commentaires-section h2 {
            text-align: center;
            font-weight: bold;
            color: #007bff;
            /* couleur bleue comme les liens */
            margin-bottom: 30px;
            /* espacement supplémentaire en bas */
        }

        .comment-container {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .comment-header {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .comment-date {
            color: #aaa;
            font-size: 12px;
        }

        .error-message {
            color: red;
            display: none;
        }
        .desc {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .desc {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        border: 2px solid #000; /* Couleur de la bordure */
        border-style: dashed; /* Style de la bordure */
    }

    .desc p {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .desc img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .desc a {
        color: #007bff;
        text-decoration: none;
    }

    .desc a:hover {
        text-decoration: underline;
    }
    .comment-container {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        border: 2px solid #000; /* Couleur de la bordure */
        border-style: dashed;/* Style de la bordure */
    }
    .image-container {
        border: 2px solid #000; /* Couleur de la bordure */
        border-radius: 10px; /* Arrondi des coins */
        overflow: hidden; /* Cache le débordement de l'image */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre douce */
    }
    </style>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Adventure Awaits<span>Travel Agency</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="destination.html" class="nav-link">Destination</a></li>
                    <li class="nav-item active"><a href="Blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    <li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('../assets/img/uploads/<?php echo $Pays['image'] ?>');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread"><?php echo $Pays['NomP'] ?></h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="Blog.php">Blog <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>
                            <?php echo $Pays['NomP'] ?> <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
        <div class="" style="width:100%;">
    <div class="desc">
        <div class="row">
            <!-- Colonnes de gauche -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <p style="font-size: 25px; margin-bottom: 10px;"><strong>- Capitale :</strong> <?php echo $Description['Capitale']; ?></p>
                    </div>
                    <div class="col-md-12">
                        <p style="font-size: 25px; margin-bottom: 10px;"><strong>- Climat :</strong> <?php echo $Description['Climat']; ?></p>
                    </div>
                    <div class="col-md-12">
                        <p style="font-size: 25px; margin-bottom: 10px;"><strong>- Langue :</strong> <?php echo $Description['Langue']; ?></p>
                    </div>
                    <div class="col-md-12" >
                        <p style="font-size: 25px; margin-bottom: 10px;"><strong>- Monnaie :</strong> <?php echo $Description['Monnaie']; ?></p>
                    </div>
                    <div class="col-md-12">
                        <p style="font-size: 25px; margin-bottom: 10px;"><strong>- Attractions Touristiques :</strong> <?php echo $Description['Attractions_touristiques']; ?></p>
                    </div>
                    <div class="col-md-12">
                        <p style="font-size: 25px; margin-bottom: 10px;"><strong>- Activites :</strong> <?php echo $Description['Activites']; ?></p>
                         <!-- Lien pour voir plus d'infos -->
                         <p><a href="https://kids.nationalgeographic.com/geography/countries/article/<?php echo strtolower($Pays['NomP']); ?>" target="_blank">Voir plus d'infos</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 20px;">
                            <img src="../assets/img/<?php echo strtolower($Pays['NomP']); ?>.Capitale.png" style="max-width: 100%; height: auto; margin-bottom: 10px;">
                        </div>
                        <div class="col-md-6" style="margin-bottom: 20px;">
                            <img src="../assets/img/<?php echo strtolower($Pays['NomP']); ?>.Monnaie.png" style="max-width: 100%; height: auto; margin-bottom: 10px;">
                        </div>
                        <div class="col-md-6" style="margin-bottom: 20px;">
                            <img src="../assets/img/<?php echo strtolower($Pays['NomP']); ?>.Attraction.1.png" style="max-width: 100%; height: auto; margin-bottom: 10px;">
                        </div>
                        <div class="col-md-6" style="margin-bottom: 20px;">
                            <img src="../assets/img/<?php echo strtolower($Pays['NomP']); ?>.Attraction.2.png" style="max-width: 100%; height: auto; margin-bottom: 10px;">
                        </div>
                        <div class="col-md-6" style="margin-bottom: 20px;">
                            <img src="../assets/img/<?php echo strtolower($Pays['NomP']); ?>.Attraction.3.png" style="max-width: 100%; height: auto; margin-bottom: 10px;">
                        </div>
                        <div class="col-md-6" style="margin-bottom: 20px;">
                            <img src="../assets/img/<?php echo strtolower($Pays['NomP']); ?>.Activites.png" style="max-width: 100%; height: auto; margin-bottom: 10px;">
                        </div>
                        <div class="col-md-6" style="margin-bottom: 20px;">
                            <img src="../assets/img/<?php echo strtolower($Pays['NomP']); ?>.Activites.2.png" style="max-width: 100%; height: auto; margin-bottom: 10px;">
                        </div>
                        <div class="col-md-6" style="margin-bottom: 20px;">
                            <img src="../assets/img/<?php echo strtolower($Pays['NomP']); ?>.Activites.3.png" style="max-width: 100%; height: auto; margin-bottom: 10px;">
                        </div>
                    </div>
                </div>
</div>
</div>
    </div>
</div>



            <!-- ... -->

            <!-- Ajoutez ce code pour le formulaire de commentaire -->
            <div class="container mt-5 comment-container">
                <h3>Laissez un commentaire</h3>
                <div class="error-message" id="comment-error"></div>
                <form id="comment-form" action="../view/addCommentaire.php" method="post">
                    <div class="form-group">
                        <label for="Commentaire">Votre commentaire :</label>
                        <textarea class="form-control" id="Commentaire" name="Commentaire" rows="4" required></textarea>
                    </div>

                    <input type="hidden" name="id_pays" value="<?php echo $Pays['id']; ?>">
                    <input type="hidden" name="id_user" value="7">
                    <?php if (isset($_SESSION['error_message'])) : ?>
                        <div class="alert alert-danger" id="comment-error">
                            <?php echo $_SESSION['error_message']; ?>
                        </div>
                        <?php unset($_SESSION['error_message']); ?>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>

            <!-- Section des commentaires -->
            <div class="container mt-5">
                <h3 style="text-align:center;">Commentaires</h3>
                <?php
                $CommentC = new CommentaireC();
                $PaysC = new PaysC();
                $Comment = $CommentC->getCommentByPaysId($id); // Remplacez cette ligne par la récupération des commentaires spécifiques à l'article si nécessaire
                if ($Comment == null) {
                    echo '<p class="text-center">Aucun commentaire pour le moment</p>';
                }
                foreach ($Comment as $comm) {
                    $Pays = $PaysC->getPaysById($comm['id_pays']);
                    $User = $CommentC->getUserById($comm['id_user']);
                ?>
                    <div class="comment-container d-flex justify-content-between">
                        <div>
                            <div class="comment-header">
                                <?php echo $User['nom'] . " " . $User['prenom']; ?>
                            </div>

                            <div class="comment-body" id="comment-body-<?php echo $comm['id_com']; ?>" contenteditable="false">
            <?php echo $comm['Commentaire']; ?>
        </div>

                            <div class="comment-date">
                                Posté le <?php echo $comm['Date_commentaire']; ?>
                            </div>
                        </div>
                        <?php if ($User['id'] == 7) { ?>
                            <div>
                                <a href="./deleteCommentaire.php?id_com=<?php echo $comm['id_com']; ?>">
                                    <img src="../assets/img/delete.png" alt="Delete" class="btn-icon" width="55" height="55">
                                </a>
                                
                            </div>

                        <?php } ?>
                    </div>
                <?php
                }

                ?>

            </div>
            
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('comment-form').addEventListener('submit', function(event) {
                        var commentaire = document.getElementById('Commentaire').value;
                        var badWords = <?php echo json_encode($badWords); ?>;

                        for (var i = 0; i < badWords.length; i++) {
                            if (commentaire.toLowerCase().indexOf(badWords[i].toLowerCase()) !== -1) {
                                // Afficher le message d'erreur près du champ de commentaire
                                document.getElementById('comment-error').innerHTML =
                                    'Votre commentaire contient des mots interdits. Veuillez modifier votre commentaire.';
                                document.getElementById('comment-error').style.display = 'block';
                                event.preventDefault(); // Empêche la soumission du formulaire
                                return;
                            }
                        }
                    });
                });
            </script>






        </div>

    </section>

    <footer class="ftco-footer bg-bottom" style="background-image: url(../assets/img/footer-bg.jpg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Vacation</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Infromation</h2>
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
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain
                                        View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
                                            210</span></a></li>
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
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.easing.1.3.js"></script>
    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/jquery.stellar.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/jquery.animateNumber.min.js"></script>
    <script src="../assets/js/bootstrap-datepicker.js"></script>
    <script src="../assets/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="../assets/js/google-map.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>