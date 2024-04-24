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
                       
                $reservation = new Reservation(
                    null, // Leave null so that the ID is auto-incremented
                    $_POST['DDP'],
                    $_POST['DDA'],
                    $_POST['Adultes'],
                    $_POST['Enfants'],
                    $_POST['Chambres'],
                    $_POST['hotel_id'],// Assign the hotel ID to the reservation
                );
            // Add the reservation
                    $reservationC->ajouterreservation($reservation);
            } else {
                echo "err";
                   }
   }


// Vérification si des données sont envoyées depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("");
    exit;
}

// Récupération de l'identifiant de l'hôtel depuis l'URL
if (isset($_GET['hotel_id'])) 
{
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
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
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
    margin: 100px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0); /* Fond transparent */
   
    border: 0px solid #ccc;
   
    text-align: center;
    position: relative;
}
.container3 {
    max-width: 350px;
    height: 500px;
    margin: 10px auto;
    padding: 20px;
    background-color:#FEBA33; /* Fond transparent */
   
    border: 0px solid #ccc;
   
    box-shadow: 0 1px 20px rgba(0, 0, 0, 0.2);
    text-align: center;
    position: relative;
    margin-right: 20px;
}
.container0 {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color:  #f2f2f2;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 1px 20px rgba(0, 0, 0, 0.2);
    overflow: hidden; /* Pour contenir les éléments floats enfants */
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
<div class="background">
        <img src="bg_2.jpg" alt="Background Image" class="background-image">
    </div>

       <!-- END nav -->
      <div class="overlay"></div>
        <div class="container1">
            <div class="hotel-info">
            <div class="container0">
            <h2 style="text-align: left;"><strong><?= $hotel_info['Nom']; ?></strong></h2>

            <p style="text-align: left; color: black;">
    <i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> <!-- Icône d'adresse -->
    <strong><?= $hotel_info['Adresse']; ?></strong>
</p>
                
<img src="./images/uploads/<?= $hotel_info['image']; ?>" alt="" class="hotel-image">

    <div class="container3">

        <h2 ><strong>Passer une réservation</h2>
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

        </form>
               </div>
                    <p><?= $hotel_info['Ville']; ?>, <?= $hotel_info['Pays']; ?></p>
                    <p>Téléphone: <?= $hotel_info['Tel']; ?></p>
                    <p>Email: <?= $hotel_info['Email']; ?></p>
                    <p>id: <?= $hotel_info['id']; ?></p>
                </div>
                
                <div class="">
                    <div class="">
                        <for="hotel_id" style="display: none;">ID</label>
                            <input type="" name="hotel_id" class="" value="<?= isset($hotel_info['id']) ? $hotel_info['id'] : '' ?>">
                            
                        </div>
               </div>
               
              
       
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	
           
            <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explorez le monde avec nous !</h1>
          </div>
        </div>
      </div>
    </div>
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
