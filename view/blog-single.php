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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        .box {
    display: flex;
  }
  
  #checkbox {
    width: 65px;
    height: 65px;
    cursor: pointer;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    outline: none;
    background: white;
    position: relative;
  }
  #checkbox:hover {
    background: rgba(255, 255, 255, .7);
  }
  #checkbox::before {
    content: '\f1e0';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: 'font awesome 5 free';
    font-weight: 700;
    font-size: 1.5rem;
    color: rgb(41, 41, 41);
    transition: all 1.5s;
  }
  #checkbox:checked::before {
    content: '\f00d';
  }
  #checkbox:checked ~ .menu {
    width: 264px; /* 4 * 65 + 4 * 1 pour la bordure */
  }

  .menu {
    width: 0;
     display: flex;
    overflow: hidden;
    transition: all .5s;
  }
  .menu .menuItems {
    width: 65px;
    height: 65px;
    background: white;
    border-left: 1px solid rgb(165, 165, 165);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .menu .menuItems:hover {
    background: rgba(255, 255, 255, .7);
  }
  .menu .menuItems i {
    font-size: 1.8rem;
  }
  .fa-whatsapp {
    color: #25d366;
  }
  .fa-instagram {
    color: #c32aa3;
  }
  .fa-facebook {
    color: #273c75;
  }
  .fa-twitter {
    color: #1da1f2;
  }
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

    .comment-input[readonly] {
    border: none;
    background-color: #f8f9fa !important;
    outline: none; /* Remove outline when input is focused */
}
    </style>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="../view/index.php">Adventure Awaits<span>Travel Agency</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="eventFront.php" class="nav-link">Destination</a></li>
              <li class="nav-item"><a href="listV.php" class="nav-link">Hébèrgement</a></li>
	          <li class="nav-item active"><a href="Blog.php" class="nav-link">Blog</a></li>
              <li class="nav-item "><a href="contact.php" class="nav-link">Réclamations</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			  <li class="nav-item cta"><a href="login.php" class="nav-link">Login</a></li>
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
                         <p><a href="https://kids.nationalgeographic.com/geography/countries/article/<?php echo strtolower($Pays['NomP']); ?>" target="_blank">Références</a></p>
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





   <!-- Section des commentaires -->
            <!-- Section des commentaires -->
<div class="container mt-5">
    <?php
    $CommentC = new CommentaireC();
    $PaysC = new PaysC();
    $Comment = $CommentC->getCommentByPaysId($id); // Remplacez cette ligne par la récupération des commentaires spécifiques à l'article si nécessaire
    $numberOfComments = count($Comment); // Nombre de commentaires
    ?>
    <h3 style="text-align:center;">Commentaires (<?php echo $numberOfComments; ?>)</h3>
    <?php
    if ($numberOfComments == 0) {
        echo '<p class="text-center">Aucun commentaire pour le moment</p>';
    }
    foreach ($Comment as $comm) {
        $Pays = $PaysC->getPaysById($comm['id_pays']);
        $User = $CommentC->getUserById($comm['id_user']);
    ?>
            <form action="../view/editCommentaire.php" method="POST">
                <div class="comment-container d-flex justify-content-between">
            <div>
                <div class="comment-header">
                    <?php echo $User['nom'] . " " . $User['prenom']; ?>
                </div>
                
                    <div class="comment-body" id="comment-body-<?php echo $comm['id_com']; ?>">
                        <input type="hidden" name="id_com" value="7">
                        <input type="text" class="form-control comment-input" name="comment-body" value="<?php echo $comm['Commentaire']; ?>" readonly>
                        
                        <?php if (isset($_SESSION['error_message_edit'])) : ?>
                            <div class="alert alert-danger" id="comment-error">
                                <?php echo $_SESSION['error_message_edit']; ?>
                            </div>
                            <?php unset($_SESSION['error_message_edit']); ?>
                            <?php endif; ?>
                            <!-- Bouton J'aime et nombre de likes -->
                    </div>
                        
                        <button class="btn btn-success comment-like-btn" data-id="<?php echo $comm['id_com']; ?>" style="margin-top: 12px;  margin-bottom: 12px;">
                        <i class="icon-thumbs-o-up"></i>  J'aime
                            <span class="comment-like-count"><?php echo $comm['nbre_like']; ?></span>
                        </button>

                        
                        <div class="comment-date">
                            Posté le <?php echo $comm['Date_commentaire']; ?>
                    </div>
                    
                    
            </div>
                
            </div>
            </form>

    <?php
    }

    ?>

</div>
<script>

$(document).ready(function() {
    $('.comment-like-btn').click(function() {
        var id_com = $(this).data('id');
        var btn = $(this); // Référence au bouton like pour la désactivation temporaire

        // Désactiver le bouton pendant la requête AJAX pour éviter les clics multiples
        btn.prop('disabled', true);

        $.ajax({
            url: '../view/ajax_like_comment.php',
            method: 'POST',
            data: {id_com: id_com},
            success: function(response) {
                if (response === "You have already liked this comment.") {
                    alert(response); // Affichage du message si l'utilisateur a déjà aimé
                } else {
                    // Mise à jour du nombre de likes
                    btn.next('.comment-like-count').text(response);
                }
            },
            complete: function() {
                // Réactiver le bouton après la réponse AJAX
                btn.prop('disabled', false);
            }
        });
    });
});




</script>


            <script>
                $(document).ready(function() {
                    $(".edit-comment-btn").click(function() {
                        var commentId = $(this).data("id");
                        $("#comment-body-" + commentId + " input").prop("readonly", false);

                        $(this).addClass("d-none"); // Hide edit button
                        $(this).siblings(".delete-btn").addClass("d-none"); // Hide delete button
                        $(this).siblings(".save-comment-btn").removeClass("d-none"); // Show save button
   
                    });

                    $(".save-comment-btn").click(function() {
                        var commentId = $(this).data("id");
                        $("#comment-body-" + commentId + " input").prop("readonly", true);

                        $(this).addClass("d-none"); // Hide save button
                        $(this).siblings(".delete-btn").removeClass("d-none"); // Hide delete button
                        $(this).siblings(".edit-comment-btn").removeClass("d-none"); // Show save button
   
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
                            <div class="box">
    <input type="checkbox"id="checkbox" />
    <div class="menu">
    <a href="https://api.whatsapp.com/send?phone=29992140" target="_blank">
      <div class="menuItems">
        <i class="fab fa-whatsapp"></i>
      </div>
    </a>
    <a href="https://www.instagram.com/share/url=http://localhost/vacation/view/blog-single.php?id=<?php echo $Pays['id'] ?>" target="_blank">
      <div class="menuItems">
        <i class="fab fa-instagram"></i>
      </div>
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://kids.nationalgeographic.com/geography/countries/article/egypt" target="_blank">
      <div class="menuItems" >
        <i class="fab fa-facebook"></i>
      </div>
    </a>
    <a href="https://twitter.com/intent/tweet?url=http://localhost/vacation/view/blog-single.php?id=<?php echo $Pays['id'] ?>" target="_blank">
      <div class="menuItems">
        <i class="fab fa-twitter"></i>
      </div>
    </a>
    </div>
                        </div>
                        
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
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
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
                        </script> All rights reserved | This template is made with <i class="icon-heart color-danger"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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