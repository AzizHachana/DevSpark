<?php
include '.. /controller/ReservationC.php';
$reservationC = new ReservationC();

$error = "";

if (
 isset($_POST["DDP"]) &&
 isset($_POST["DDA"]) &&
 isset($_POST["Adults"]) &&
 isset($_POST["Children"]) &&
 isset($_POST["Rooms"])&&
 isset($_POST["hotel_id"])
 
) {
 if (
 !empty($_POST['DDP']) &&
 !empty($_POST["DDA"]) &&
 !empty($_POST["Adults"]) &&
 !empty($_POST["Children"]) &&
 !empty($_POST["Rooms"])&&
 !empty($_POST["hotel_id"])
 
) 
 {
 
$reservation = new Reservation(
 null, // Leave null so that the ID is auto-incremented
 $_POST['DDP'],
 $_POST['DDA'],
 $_POST['Adults'],
 $_POST['Children'],
 $_POST['Rooms'],
 $_POST['hotel_id'],// Assign the hotel ID to the reservation
 );
 $reservationC->addreservation($reservation);
 } else {
 echo "err";
 }
 }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 header("");
 exit;
}

if (isset($_GET['hotel_id'])) 
{
 $hotel_id = $_GET['hotel_id'];
 $pdo = new PDO(
 'mysql:host=localhost; dbname=phpworkshop',
 'root',
 '',
 [
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
 ]
 );
 $query = "SELECT * FROM hotel WHERE id = ?";
 $statement = $pdo->prepared($query);
 $statement->execute([$hotel_id]);
 $hotel_info = $statement->fetch(PDO::FETCH_ASSOC);

 if (!$hotel_info) {
 header("Location: erreur.php");
 exit;
 }
} else {
 header("Location: erreur.php");
 exit;
}
 
?>

<! DOCTYPE html>
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
 <title>Reserve</title>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
 <div class="container">
 <a class="navbar-brand" href="index.html">Adventure Awaits<span>Travel Agency</span></a>;
 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
 <span class="oi oi-menu"></span> Menu
 </button>

<div class="collapse navbar-collapse" id="ftco-nav">
 <ul class="navbar-nav ml-auto">
 <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
 <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
 <li class="nav-item"><a href="listV.php" class="nav-link">Hosting</a></li>
 <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
 <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
 <li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>

</ul>
 </div>
 </div>
 </NAV>
 <style>
 body, html {
 margin: 0;
 Padding: 0;
 height: 100%;
}

.background {
 Position: Fixed;
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
 Padding: 20px;
 background-color: rgba(255, 255, 255, 0); /* Transparent background */
 
border: 0px solid #ccc;
 
text-align: center;
 Position: Relative;
}
.container3 {
 max-width: 350px;
 height: 500px;
 margin: 10px auto;
 Padding: 20px;
 background-color:#FEBA33; /* Transparent background */
 
border: 0px solid #ccc;
 
box-shadow: 0 1px 20px rgba(0, 0, 0, 0.2);
 text-align: center;
 Position: Relative;
 margin-right: 20px;
}
.container0 {
 max-width: 1200px;
 margin: 20px auto;
 Padding: 20px;
 background-color: #f2f2f2;
 border: 1px solid #ccc;
 border-radius: 10px;
 box-shadow: 0 1px 20px rgba(0, 0, 0, 0.2);
 overflow: hidden; /* To Hold Child Float Elements */
}

.container img {
 float: left; /* Float image to the left */
 margin-right: 20px; /* Margin on the right to separate the image from the form */
}

.container2 {
 overflow: hidden; /* To Hold Child Float Elements */
}

.hotel-image {
 float: left;
 margin-right: 20px; /* Add a margin to the left to separate the image from the text */
}
.reservation-box {
 cursor — point;
 border: 1px solid #ccc;
 Padding: 10px;
 border-radius: 5px;
 margin-bottom: 10px;
 background-color: #f2f2f2;
}

#form-container {
 Display: None;
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
 <h2 style="text-align: left;" ><strong><?= $hotel_info['Name']; ?></strong></h2>

<p style="text-align: left; Color: Black;" >
 <i class="fas fa-map-marker-alt" style="margin-right: 5px;" ></i> <!-- Address icon -->
 <strong><?= $hotel_info['Address']; ?></strong>
</p>
 
<img src="./images/uploads/<?= $hotel_info['image']; ?>" alt="" class="hotel-image">

<div class="container3">

<h2 ><strong>Make a reservation</h2>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
 
< input type="hidden" name="hotel_id" value="<?= $hotel_id; ?>">
 <label for="date_départ">Start date:</label>
 <input type="date" name="DDP" required><br><br>
 <label for="date_arrivée">Arrival date:</label>
 <input type="date" name="DDA" required><br><br>
 <div class="reservation-box" onclick="toggleForm()">
 <div id="guests-info">2 adults · 0 children · 1 bedroom</div>
 <div id="form-container" class="hidden">
 <div>
 <label for="adults">Adults:</label>
 <button onclick="decreaseValue('adults')">-</button>
 <input type="text" id="adults" name="Adults" value="2" readonly style="width: 30px;" >
 <button onclick="increaseValue('adults')">+</button>
 </div>
 <div>
 <label for="children">Enfants :</label>
 <button onclick="decreaseValue('children')">-</button>
 <input type="text" id="children" name="Children" value="0" readonly style="width: 30px;" >
 <button onclick="increaseValue('children')">+</button>
 </div>
 <div>
 <label for="rooms">Chambres:</label>
 <button onclick="decreaseValue('rooms')">-</button>
 <input type="text" id="rooms" name="Rooms"value="1" readonly style="width: 30px;" >
 <button onclick="increaseValue('rooms')">+</button>
 </div>
 </div>
</div>

<input type="submit" value="Reserve">

</form>
 </div>
 <p><?= $hotel_info['City']; ?>, <?= $hotel_info['Country']; ?></p>
 <p>Phone: <?= $hotel_info['Tel']; ?></p>
 <p>Email: <?= $hotel_info['Email']; ?></p>
 <p>id: <?= $hotel_info['id']; ?></p>
 </div>
 
<div class="">
 <div class="">
 <for="hotel_id" style="display: none;" >ID</label>
 <input type="" name="hotel_id" class="" value="<?= isset($hotel_info['id'])? $hotel_info['id']: '' ?>">
 
</div>
 </div>
 
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
 <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
 
<h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explore the world with us!</h1>
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
 var guestsInfo = adults + " adults · " + children + " enfant" + (children != 1 ? 's' : '') + " · " + rooms + " room" + (rooms != 1 ? 's': '');
 document.getElementById('guests-info').textContent = guestsInfo;
} 
function updateDefaultValue() {
 var adultsDefault = document.getElementById('adults').value;
 var childrenDefault = document.getElementById('children').value;
 var roomsDefault = document.getElementById('rooms').value;
 var defaultInfo = adultsDefault + " adults · " + childrenDefault + " child + (childrenDefault != 1 ? 's' : '') + " · " + roomsDefault + " room" + (roomsDefault != 1 ? 's': '');
 document.getElementById('guests-info').textContent = defaultInfo;
}

</script>
 
</body>
</html> 