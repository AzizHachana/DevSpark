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
<title>Explorez nos Hébergements</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
    

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
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
     
            text-align: left;
            
        }

        .hotel-info-label {
            font-weight: bold;
        }

        .hotel-name {
            color: #000000;
            font-weight: bold;
           
        }

        .availability-button {
            background-color: #4a90e2; /* Couleur rouge pour le bouton */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: -0.2px 10px;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-height {
    line-height: 1;
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
	      <a class="navbar-brand" href="index copy.php">Adventure Awaits<span>Travel Agency</span></a>
		 

	     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="index copy.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="eventFront2.php" class="nav-link">Destination</a></li>
              <li class="nav-item active"><a href="listV2.php" class="nav-link">Hébèrgement</a></li>
	          <li class="nav-item "><a href="Blog2.php" class="nav-link">Blog</a></li>
              <li class="nav-item "><a href="contact2.php" class="nav-link">Réclamations</a></li>
	          <li class="nav-item"><a href="Send_mail.php" class="nav-link">Contact</a></li>
			  <li class="nav-item cta"><a href="../Front/AccountUser.php" class="nav-link">My Account</a></li>

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
                        <img class="hotel-image" src="./images/uploads/<?=$hotel['image']; ?>" alt="">
                        <!--<span class="like-button">
                            <i class="fas fa-heart" aria-hidden="true"></i>
                         <span class="like-count">/ $hotel['likes'];?></span>
                        </span>-->
                    </div>
                    <div class="hotel-info">
                        <div class="hotel-info-item">
                            <span class="hotel-info-label"></span>
                            <span class="hotel-name" ><?= $hotel['Nom']; ?></span>
                        </div>
                        <div class="hotel-info-item">
                            <span class="fas fa-map-marker-alt" >  <?= $hotel['Adresse']; ?></span> ,
                            <span ><?= $hotel['Ville']; ?></span> ,
                            <span ><?= $hotel['Pays']; ?></span>
                        </div>
                        <div class="hotel-info-item">
                            
                            <span class="fas fa-phone" > <?= $hotel['Tel']; ?></span>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                                <!-- Bouton Like -->
                                <button class="btn btn-outline-success like-btn" data-id="<?php echo $hotel['id']; ?>">
                                    <i class="icon-thumbs-o-up"></i> Like
                                </button>
                                <span class="like-count"><?php echo $hotel['likes']; ?></span>

                                <!-- Bouton Dislike -->
                                <button class="btn btn-outline-danger dislike-btn" data-id="<?php echo $hotel['id']; ?>">
                                    <i class="icon-thumbs-o-down"></i> Dislike
                                </button>
                                <span class="dislike-count"><?php echo $hotel['dislikes']; ?></span>
                        </div>
                       
                            <div class="d-flex justify-content-center mt-3">
                                <a href="addreservation2.php?hotel_id=<?= $hotel['id']; ?>" class="btn btn-primary mr-2 btn-height availability-button">Check Availability</a>
                                <a href="Send_mail.php" class="btn btn-secondary btn-height availability-button">Send Mail</a>
                            </div>
                        

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
    <script src="../js/jquery.min.js"></script>
     <script src="../js/jquery-migrate-3.0.1.min.js"></script>
     <script>
   document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.like-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            var id = this.getAttribute('data-id'); // Vérifiez si id est correct ici
            console.log("ID de l'hôtel:", id); // Affichez l'ID de l'hôtel dans la console
            var countSpan = this.nextElementSibling;

            // Désactiver le bouton après le clic
            this.disabled = true;
            this.classList.add('clicked');

            fetch('../view/ajax_like.php', {
                method: 'POST',
                body: JSON.stringify({ id: id }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.text())
            .then(data => {
                // Mettre à jour le nombre de likes affiché
                countSpan.textContent = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });

    document.querySelectorAll('.dislike-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            var id = this.getAttribute('data-id'); // Vérifiez si id est correct ici
            console.log("ID de l'hôtel:", id); // Affichez l'ID de l'hôtel dans la console
            var countSpan = this.nextElementSibling;

            // Désactiver le bouton après le clic
            this.disabled = true;
            this.classList.add('clicked');

            fetch('../view/ajax_dislike.php', {
                method: 'POST',
                body: JSON.stringify({ id: id }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.text())
            .then(data => {
                // Mettre à jour le nombre de likes affiché
                countSpan.textContent = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
});

</script>

    
</body>
</html>

<?php
}
