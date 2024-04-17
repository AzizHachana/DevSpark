<?php
include '../controller/HotelC.php';


$hotelC = new HotelC();
$hotels= $hotelC->listHotels();
//$professeurs = $professeurC->listProfesseur();


if ($hotels) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
<title>Explorez nos Hébergements</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	
    <title>Explorez nos Hébergements</title>
    <style>
        body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: -1;
}

.background-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: blur(2.5px); /* Appliquer le flou */
}
        

        .container {
            width: 90%;
            margin: 100px auto 20px;
        }

        .title-container {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 15px;
            background-color: rgba(255, 255, 255, 0.8); /* Fond de la boîte de titre */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre douce */
        }

        .title {
            font-size: 32px;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .hotels-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .hotel-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 10px;
            overflow: hidden;
            background-color: #fff; /* Fond de la carte de l'hôtel */
            width: 300px; /* Largeur de chaque carte */
            display: flex;
            flex-direction: column; /* Pour empiler l'image et les informations */
        }

        .hotel-image {
            width: 100%;
            height: auto;
            border-radius: 8px 8px 0 0; /* Coins arrondis seulement en haut */
        }

        .hotel-info {
            padding: 15px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9); /* Fond blanc pour les informations uniquement */
        }

        .hotel-info-item {
            margin-bottom: 5px;
        }

        .hotel-info-label {
            font-weight: bold;
        }

        .hotel-name {
            color: #000000;
            font-weight: bold; /* Couleur bleue pour le nom de l'hôtel */
        }

        .availability-button {
            background-color: #4a90e2; /* Couleur rouge pour le bouton */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 16px;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .availability-button:hover {
            background-color: #ff6b6b; /* Changement de couleur au survol */
        }
    </style>
</head>
<body>
<div class="background">
        <img src="bg_2.jpg" alt="Background Image" class="background-image">
    </div>
<div class="">   
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Adventure Awaits<span>Travel Agency</span></a>
		 

	     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="destination.html" class="nav-link">Destination</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="">
    <div class="container">
        <div class="title-container">
            <h1 class="title">Explorez nos Hébergements</h1>
        </div>
        </div>
        <div class="hotels-list">
            <?php foreach ($hotels as $hotel): ?>
                <div class="hotel-card">
                    <div class="hotel-image-section">
                        <img class="hotel-image" src="./images/uploads/<?= $hotel['image']; ?>" alt="">
                    </div>
                    <div class="hotel-info">
                        <div class="hotel-info-item">
                            <span class="hotel-info-label"></span>
                            <span class="hotel-name"><?= $hotel['Nom']; ?></span>
                        </div>
                        <div class="hotel-info-item">
                            <span class="hotel-info-label">Adresse:</span>
                            <span class="hotel-info-value"><?= $hotel['Adresse']; ?></span>
                            <span class="hotel-info-value"><?= $hotel['Ville']; ?></span>
                            <span class="hotel-info-value"><?= $hotel['Pays']; ?></span>
                        </div>
                        <div class="hotel-info-item">
                            <span class="hotel-info-label">Téléphone:</span>
                            <span class="hotel-info-value"><?= $hotel['Tel']; ?></span>
                        </div>
                        <div class="hotel-info-item">
                            <span class="hotel-info-label">Email:</span>
                            <span class="hotel-info-value"><?= $hotel['Email']; ?></span>
                        </div>
                        <a href="addreservation.php?hotel_id=<?= $hotel['id']; ?>" class="availability-button">Vérifier la disponibilité</a>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</body>
</html>

<?php
}
