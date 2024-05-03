<?php
include '../config.php';
include '../controller/PaysC.php';
include '../controller/DescriptionC.php';
session_start();
$PaysC = new PaysC();

$Continent = isset($_GET['Continent']) ? $_GET['Continent'] : '';
$search = isset($_GET['search']) ? $_GET['search'] : '';

if (!empty($search)) {
    // Si le champ de recherche n'est pas vide, recherchez à la fois par nom et par langue
    $Pays = $PaysC->searchPays($search); // Recherche par nom
    // Si la recherche par nom ne donne aucun résultat, recherche par langue
    if (empty($Pays)) {
        $Pays = $PaysC->searchPaysByLang($search);
    }
} elseif (!empty($Continent)) {
    // Si aucun champ de recherche n'est rempli mais le continent est sélectionné, filtrez par continent
    $Pays = $PaysC->searchPaysByContinent($Continent);
} else {
    // Si aucun critère de recherche n'est spécifié, affichez tous les pays
    $Pays = $PaysC->listPays();
}
function compareByName($a, $b) {
    // Convertir les noms en majuscules pour un tri insensible à la casse
    $nameA = strtoupper($a['NomP']);
    $nameB = strtoupper($b['NomP']);

    // Comparer les noms
    return strcmp($nameA, $nameB);
}

// Tri du tableau $Pays par ordre alphabétique
usort($Pays, 'compareByName');

$totalPays = count($Pays);
$perPage = 6;
$totalPages = ceil($totalPays / $perPage);

// Détermination de la page actuelle
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calcul des indices de début et de fin pour les pays à afficher
$start = ($page - 1) * $perPage;
$end = $start + $perPage;

// Extraction des pays à afficher pour la page actuelle
$displayPays = array_slice($Pays, $start, $perPage);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vacation - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap-reboot.css">
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

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Adventure Awaits<span>Travel Agency</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="destination.php" class="nav-link">Destination</a></li>
                    <li class="nav-item active"><a href="Blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('../assets/img/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Travel Tips &amp; Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
        <div class="row d-flex mb-4">
    <div class="col-md-12">
        <form method="GET" action="Blog.php" class="form-inline justify-content-between">
            <div class="form-group mr-2">
                <input type="text" name="search" class="form-control" placeholder="Rechercher ...">
                <button type="submit" class="btn btn-primary ml-2">Rechercher</button>
            </div>

            <div class="form-group mx-2">
                <select name="Continent" class="form-control mr-2" id="Continent">
                    <option value="">Tous Les Continents</option>
                    <option value="Asie">Asie</option>
                    <option value="Afrique">Afrique</option>
                    <option value="Europe">Europe</option>
                    <option value="Amérique">Amérique</option>
                    <option value="Océanie">Océanie</option>
                    <option value="Antarctique">Antarctique</option>
                </select>
                <button type="submit" class="btn btn-primary" id="filterBtn">Filtrer</button>
            </div>
           
        </form>
    </div>
</div>


            <div class="row d-flex">

                <?php foreach ($displayPays as $country) : ?>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.php?id=<?php echo $country['id'] ?>" class="block-20"
                            style="background-image: url('../assets/img/uploads/<?php echo $country['image']; ?>');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-4 topp">
                                <span class="day"><?php echo $country['NomP']; ?></span>
                            </div>
                            <?php $DescriptionC = new DescriptionC();
                                $country_desc = $DescriptionC->getDescriptById($country['id']) ?>
                            <div class="d-flex justify-content-between">
                                <p><strong style="color: #f9ab30;">Continent : </strong>
                                    <?php echo $country['Continent']; ?>
                                </p>
                                <p><strong style="color: #f9ab30;">Langue : </strong>
                                    <?php echo $country_desc['Langue']; ?>
                                </p>
                            </div>

                            <div class="d-flex justify-content-between mt-3">
                                <!-- Bouton Like -->
                                <button class="btn btn-success like-btn" data-id="<?php echo $country['id']; ?>">
                                    <i class="icon-thumbs-o-up"></i> Like
                                </button>
                                <span class="like-count"><?php echo $country['likes']; ?></span>

                                <!-- Bouton Dislike -->
                                <button class="btn btn-danger dislike-btn" data-id="<?php echo $country['id']; ?>">
                                    <i class="icon-thumbs-o-down"></i> Dislike
                                </button>
                                <span class="dislike-count"><?php echo $country['dislikes']; ?></span>
                            </div>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/jquery-migrate-3.0.1.min.js"></script>
            <script>
            $(document).ready(function() {
    $('.like-btn').click(function() {
        var id = $(this).data('id');
        $.ajax({
            url: '../view/ajax_like.php',
            method: 'POST',
            data: {id: id},
            success: function(response) {
                if (response === "You have already liked this country.") {
                    alert(response); // Affichage du message si l'utilisateur a déjà aimé
                } else {
                    $('.like-count').each(function() {
                        if ($(this).prev('.like-btn').data('id') == id) {
                            $(this).text(response);
                        }
                    });
                }
            }
        });
    });

    $('.dislike-btn').click(function() {
        var id = $(this).data('id');
        $.ajax({
            url: '../view/ajax_dislike.php',
            method: 'POST',
            data: {id: id},
            success: function(response) {
                if (response === "You have already disliked this country.") {
                    alert(response); // Affichage du message si l'utilisateur a déjà disliké
                } else {
                    $('.dislike-count').each(function() {
                        if ($(this).prev('.dislike-btn').data('id') == id) {
                            $(this).text(response);
                        }
                    });
                }
            }
        });
    });
});
            </script>
           <div class="row mt-5">
    <div class="col text-center">
        <div class="block-27">
            <ul>
                <?php if ($page > 1) : ?>
                    <!-- Lien vers la page précédente -->
                    <li><a href="Blog.php?page=<?php echo $page - 1; ?>">&lt;</a></li>
                <?php endif; ?>
                
                <!-- Affichage des numéros de page -->
                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                    <li <?php if ($i == $page) echo 'class="active"'; ?>>
                        <a href="Blog.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($page < $totalPages) : ?>
                    <!-- Lien vers la page suivante -->
                    <li><a href="Blog.php?page=<?php echo $page + 1; ?>">&gt;</a></li>
                <?php endif; ?>
            </ul>
        </div>
        

    </div>
    
</div>

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
    <a href="https://www.instagram.com/share/url=http://localhost/oumey/view/Blog.php?page=1#" target="_blank">
      <div class="menuItems">
        <i class="fab fa-instagram"></i>
      </div>
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://kids.nationalgeographic.com/geography/countries/article/egypt" target="_blank">
      <div class="menuItems" >
        <i class="fab fa-facebook"></i>
      </div>
    </a>
    <a href="https://twitter.com/intent/tweet?url=http://localhost/oumey/view/Blog.php?page=1#" target="_blank">
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