<?php
include '../Controller/ReservationC.php'; // Inclure le fichier contenant la classe ReservationC
$reservationC = new ReservationC(); // Créer une instance de ReservationC

$error = "";

if (
    isset($_POST["DDP"]) &&
    isset($_POST["DDA"]) &&
    isset($_POST["Adultes"]) &&
    isset($_POST["Enfants"]) &&
    isset($_POST["Chambres"])&&
    isset($_POST["hotel_id"])
  

) {
    if (
        !empty($_POST['DDP']) &&
        !empty($_POST["DDA"]) &&
        !empty($_POST["Adultes"]) &&
        !empty($_POST["Enfants"]) &&
        !empty($_POST["Chambres"])&&
        !empty($_POST["hotel_id"])
  
    ) 
    {
        // Vérification si l'hôtel existe
        $userId = 7; 
        //$qr_code_link = 'chemin/vers/qr_code_image.png'; // Chemin de l'image du code QR
        
        // Créer une nouvelle instance de Reservation en incluant le chemin de l'image du code QR
        $reservation = new Reservation(
            null, // Laisser null pour que l'ID soit auto-incrémenté
            $_POST['DDP'],
            $_POST['DDA'],
            $_POST['Adultes'],
            $_POST['Enfants'],
            $_POST['Chambres'],
            $_POST['hotel_id'],
            $userId,// Assigner l'ID de l'hôtel à la réservation
            //$qr_code_link // Chemin de l'image du code QR
        );
        
        // Ajouter la réservation
        $reservationC->ajouterreservation($reservation);

        // Obtenir l'ID de la dernière réservation insérée
        /*$lastInsertedId = $reservationC->getLastInsertedId();

        // Construire le lien vers la page de détails de la réservation
        $lien = 'http://localhost/hotel/reservation_details.php?id=' . $lastInsertedId;

        // Mettre à jour la réservation avec le lien du code QR
        $reservationC->updateReservationQrCodeLink($lastInsertedId, $lien);

        // Générer le code QR avec le lien dynamique
        QRcode::png($lien, 'image-qrcode.png');*/

        // Redirection vers la page d'affichage des réservations
        header('Location: afficher_reservation.php');
        exit; // Arrêter l'exécution du script après la redirection
    }
}

// Vérification si des données sont envoyées depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("");
    exit;
}

// Récupération de l'identifiant de l'hôtel depuis l'URL
if (isset($_GET['hotel_id'])) {
    $hotel_id = $_GET['hotel_id'];
    $pdo = new PDO(
        'mysql:host=localhost;dbname=atelierphp',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
    $query = "SELECT * FROM hotel WHERE id = ?";
    $statement = $pdo->prepare($query);
    $statement->execute([$hotel_id]);
    $hotel_info = $statement->fetch(PDO::FETCH_ASSOC);

    // Vérification si l'hôtel existe
    if (!$hotel_info) {
        // Redirection vers une page d'erreur si l'hôtel n'existe pas
        header("Location: erreur.php");
        exit;
    }
} else {
    // Redirection vers une page d'erreur si aucune ID d'hôtel n'est fournie
    header("Location: erreur.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Vacation - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">        

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
    <title>Réserver</title>
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
	          <li class="nav-item"><a href="listV.php" class="nav-link">Hebergement</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <style>
         .title-container {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 15px;
            background-color: rgba(255, 255, 255, 0.8); /* Fond de la boîte de titre */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre douce */
            height:75px;
        }
        .custom-beach {
            margin: 0;
            padding: 0;
            background-color:  #4FA8FF;
           /* Couleur bleu ciel */
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 30px;
            width:125px
        }
        .custom-beach .umbrella {
            font-size: 18px; /* Taille de l'icône de parasol */
            margin-right: 5px;
            color: #FFD700;
        }
        .custom-beach .text {
            font-size: 14px; /* Taille du texte "Plage privée" */
            font-weight: bold;
            color: #FFFFFF; /* Couleur blanche pour le texte */
        }
       
    
       #map {
    position: relative;
    width: 360px; /* taille initiale de la carte */
    height: 200px; /* taille initiale de la carte */
    right: 20px; 
    top: 80px;
}

#big-map {
    display: none; /* carte de grande taille cachée par défaut */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 40%; /* Largeur de la carte de grande taille */
    height: 40%; /* Hauteur de la carte de grande taille */
    z-index: 1000; /* Assure que la carte est affichée au-dessus des autres éléments */
}
        #open-button {
            position: absolute;
            top: 680px;
            right: 320px;
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            z-index: 1000;
        }
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
       .container1 {
    max-width: 1200px;
    height:100;
    margin: 100px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0); /* Fond transparent */
    border: 0px solid #ccc;
    text-align: center;
    position: relative;
}
.container3 {
    max-width: 360px;
    height: 420px;
    margin: 10px auto;
    padding: 20px;
    background-color:#FEBA33; /* Fond transparent */
    
    border: 0px solid #ccc;
   
    box-shadow: 0 1px 20px rgba(0, 0, 0, 0.2);
    text-align: center;
    position: relative;
    margin-right: 20px;
    bottom: 165px;
   
}
.container0 {
    max-width: 1200px;
    height:150;
    margin: 20px auto;
    padding: 20px;
    background-color:  #f2f2f2;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 1px 20px rgba(0, 0, 0, 0.2);
    overflow: hidden; /* Pour contenir les éléments floats enfants */
}
.containerd {
    bottom:100px;
}
.container img {
    float: left; /* Faire flotter l'image à gauche */
    margin-right: 20px; /* Marge à droite pour séparer l'image du formulaire */
}

.container2 {
    overflow: hidden; /* Pour contenir les éléments floats enfants */
}

.hotel-image {
    float: left;
    margin-right: 20px; /* Ajoute une marge à gauche pour séparer l'image du texte */
}
.reservation-box {
    cursor: pointer;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
    background-color:  #f2f2f2;
}

#form-container {
    display: none;
}

#form-container.visible {
    display: block;
}





    </style>
</head>
<body>
<div id="big-map"></div>


    <button id="open-button" onclick="showBigMap()">Voir sur la carte</button>
    
      
<div class="background">
        <img src="bg_2.jpg" alt="Background Image" class="background-image">
    </div>

       <!-- END nav -->
      <div class="overlay"></div>
        <div class="container1" >
        
            <div class="hotel-info">
            <div class="container0" style="height: 950px;">
            <div class="custom-beach">
        <span class="umbrella">☂️</span>
        <span class="text">Plage privée</span>
    </div>
            <h2 style="text-align: left;"><strong><?= $hotel_info['Nom']; ?></strong></h2>

            <p style="text-align: left;color: black;">
    <i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i>
    <strong><?= $hotel_info['Adresse']; ?></strong>,<?= $hotel_info['Code_postal']; ?>
    <?= $hotel_info['Ville']; ?>, <?= $hotel_info['Pays']; ?></span>
    - <a href="javascript:showBigMap()"  style="color: navy;"><strong>Trés bon emplacement - voir sur la carte</a>
</p>
<img src="./images/uploads/<?= $hotel_info['image']; ?>" alt="" class="hotel-image">*




    <div class="container3">
    <div class="title-container">
        <h4 ><strong>Passer une réservation</h4>
    </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        
            <input type="hidden" name="hotel_id" value="<?= $hotel_id; ?>">
            <label for="date_départ">Date de départ :</label>
            <input type="date"  name="DDP" required><br><br>
            <label for="date_arrivée">Date d'arrivée :</label>
            <input type="date" name="DDA" required><br><br>
            <div class="reservation-box" onclick="toggleForm()">
    <div id="guests-info">2 adultes · 0 enfant · 1 chambre</div>
    <div id="form-container" class="hidden">
        <div>
            <label for="adults">Adultes :</label>
            <button onclick="decreaseValue('adults')">-</button>
            <input type="text" id="adults"  name="Adultes" value="2" readonly style="width: 30px;">
            <button onclick="increaseValue('adults')">+</button>
        </div>
        <div>
            <label for="children">Enfants :</label>
            <button onclick="decreaseValue('children')">-</button>
            <input type="text" id="children"  name="Enfants" value="0" readonly style="width: 30px;" >
            <button onclick="increaseValue('children')">+</button>
        </div>
        <div>
            <label for="rooms">Chambres :</label>
            <button onclick="decreaseValue('rooms')">-</button>
            <input type="text" id="rooms"  name="Chambres"value="1" readonly style="width: 30px;">
            <button onclick="increaseValue('rooms')">+</button>
        </div>
    </div>
    
              
</div>

          <input type="submit" value="Réserver">
          <div id="map"></div>

    
    

        </form> 
               </div>
               <div>
                    <<p  style="text-align: left;"></p>
                    <p  style="text-align: left;"></p>
                    <p style="text-align: left;color: black;"><?= $hotel_info['Description']; ?>
                    </div>
                    </div>
                </div>
                
                <div class="">
                    <div class="">
                        <for="hotel_id" style="display: none;">ID</label>
                            <input type="" name="hotel_id" class="" value="<?= isset($hotel_info['id']) ? $hotel_info['id'] : '' ?>">
                           
                    </div>
                    <!--<for="qr_code_link">Chemin de l'image du code QR :</label>
                    <input type="" id="" name="qr_code_link">-->
                        
               </div>
               
              
       
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	
           
            <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explorez le monde avec nous !</h1>
          </div>
        </div>
      </div>
    </div>
    
    
    <script>
        var map = L.map('map').setView([36.417991244632184, 10.657854141815537], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Ajouter la fonction de recherche
        L.Control.geocoder().addTo(map);

        // Liste des emplacements avec leurs coordonnées géographiques
        var locations = [
            { name: 'Location 3', coordinates: [36.920418600953155, 10.294004607895895]},
            { name: 'Location 4', coordinates: [36.4066820811439, 10.648944014801348]},
            { name: 'Location 5', coordinates: [36.420148778616735, 10.666770211285563]},
            { name: 'Location 6', coordinates: [36.42663289952416, 10.677397821021687]},
            { name: 'Location 7', coordinates: [36.41626420128574, 10.661314871551633]},
            { name: 'Location 8', coordinates: [36.41956973849154, 10.666316475041786]},
            { name: 'Location 8', coordinates: [36.44233934876374, 10.730926840282505]},
            { name: 'Location 8', coordinates: [36.42371582283454, 10.671823348586972]},
            { name: 'Location 8', coordinates: [36.427674443513425, 10.683206455127879]}
        ];


        // Ajouter chaque emplacement à la carte avec un marqueur personnalisé
        locations.forEach(function(location) {
            L.marker(location.coordinates, {
                icon: L.icon({
                    iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png',
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34]
                })
            }).addTo(map).bindPopup(location.name);
        });

        function showBigMap() {
            var containerSize = document.querySelector('.container1').getBoundingClientRect();
            var containerWidth = containerSize.width;
            var containerHeight = containerSize.height;

        // Réglez la taille de la carte agrandie pour correspondre à celle de container1
        document.getElementById('big-map').style.width = containerWidth *(0.8) + 'px';
        document.getElementById('big-map').style.height = containerHeight *(0.62) + 'px';
        document.getElementById('big-map').style.width = containerWidth * 2 + 'px';
        
        document.getElementById('big-map').style.width = '1200px';
       
           document.getElementById('open-button').style.display = 'none';
            document.getElementById('map').style.display = 'none'; // cacher la carte de petite taille
            document.getElementById('big-map').style.display = 'block'; // afficher la carte de grande taille
            var bigMap = L.map('big-map').setView([36.417991244632184, 10.657854141815537], 13); // créer une nouvelle carte de grande taille
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(bigMap);

            // Ajouter la fonction de recherche à la carte de grande taille
            L.Control.geocoder().addTo(bigMap);

            // Ajouter chaque emplacement à la carte de grande taille avec un marqueur personnalisé
            locations.forEach(function(location) {
                L.marker(location.coordinates, {
                    icon: L.icon({
                        iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png',
                        iconSize: [25, 41],
                        iconAnchor: [12, 41],
                        popupAnchor: [1, -34]
                    })
                }).addTo(bigMap).bindPopup(location.name);
            });

            // Ajouter l'événement pour revenir à la taille initiale de la carte en appuyant sur la touche "Échap"
            document.addEventListener('keyup', function(event) {
                if (event.key === 'Escape') {
                    document.getElementById('map').style.display = 'block'; // afficher la carte de petite taille
                    document.getElementById('big-map').style.display = 'none'; // cacher la carte de grande taille
                    bigMap.remove();
                    document.getElementById('open-button').style.display = 'block';
                    
                     // supprimer la carte de grande taille
                }
            });
        }
    </script>
    <script>
       function toggleForm() {
    var formContainer = document.getElementById('form-container');
    formContainer.classList.toggle('visible');
}


    
function increaseValue(field) {
    event.preventDefault();
    event.stopPropagation(); 
    var input = document.getElementById(field);
    input.value = parseInt(input.value) + 1;
    updateDefaultValue();
}

function decreaseValue(field) {
    event.preventDefault();
    event.stopPropagation(); 
    var input = document.getElementById(field);
    if (parseInt(input.value) > 0) {
        input.value = parseInt(input.value) - 1;
        updateDefaultValue();
    }
}
function updateGuestsInfo() {
    var adults = document.getElementById('adults').value;
    var children = document.getElementById('children').value;
    var rooms = document.getElementById('rooms').value;
    var guestsInfo = adults + " adultes · " + children + " enfant" + (children != 1 ? 's' : '') + " · " + rooms + " chambre" + (rooms != 1 ? 's' : '');
    document.getElementById('guests-info').textContent = guestsInfo;
}   
function updateDefaultValue() {
    var adultsDefault = document.getElementById('adults').value;
    var childrenDefault = document.getElementById('children').value;
    var roomsDefault = document.getElementById('rooms').value;
    var defaultInfo = adultsDefault + " adultes · " + childrenDefault + " enfant" + (childrenDefault != 1 ? 's' : '') + " · " + roomsDefault + " chambre" + (roomsDefault != 1 ? 's' : '');
    document.getElementById('guests-info').textContent = defaultInfo;
}

    
    
  

  

</script>
  
    
</body>
</html>
