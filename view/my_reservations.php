<?php
// Inclure le fichier de configuration et la classe ReservationC
include '../config.php';
include '../controller/ReservationC.php';
$pdo = new PDO(
    'mysql:host=localhost;dbname=atelierphp',
    'root',
    '',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);
// Créer une instance de ReservationC
$ReservationC = new ReservationC();
$id_u = 7; // ID de l'utilisateur

// Récupérer les réservations de l'utilisateur actuel
$reservations = $ReservationC->getReservationByUser($id_u);
$query = "SELECT events.Nom AS events_nom, COUNT(reservation.id_r) AS reservation_count
          FROM reservation
          INNER JOIN events ON reservation.id_e = events.id
          WHERE reservation.id_u = ?
          GROUP BY events.Nom
          ORDER BY reservation_count DESC";
          $statement2  = $pdo->prepare($query);
          $statement2 ->execute([$id_u]);
          $hotel_stats =   $statement2 ->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AdventureAwaits</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">



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
    <div class="container mt-5">
        <h1>My Reservations</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Number of People</th>
                    <th>Status</th>
                    <!-- Ajouter d'autres colonnes au besoin -->
                </tr>
            </thead>
            <tbody>
                <!-- Boucle sur les réservations -->
                <?php foreach ($reservations as $reservation): ?>
                <tr>
                    <td><?php echo $reservation['date_check_in']; ?></td>
                    <td><?php echo $reservation['date_check_out']; ?></td>
                    <td><?php echo $reservation['nbr_p']; ?></td>
                    <td><?php echo $reservation['status']; ?></td>
                    <!-- Ajouter d'autres colonnes au besoin -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div style="width: 50%; margin: 0 auto;">
    <canvas id="hotel-chart"></canvas>
</div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
const ctx = document.getElementById('hotel-chart').getContext('2d');
const hotelData = {
   
    labels: <?php echo json_encode(array_column($hotel_stats, 'events_nom')) ?>,
    
    datasets: [{
        label: 'Nombre de réservations',
        data: <?php echo json_encode(array_column($hotel_stats, 'reservation_count')) ?>,
        backgroundColor: [
            'rgba(155, 49, 91, 0.7)',    // Rouge foncé
    'rgba(40, 114, 179, 0.7)',   // Bleu foncé
    'rgba(189, 155, 31, 0.7)',   // Jaune foncé
    'rgba(47, 141, 141, 0.7)',   // Vert foncé
    'rgba(113, 47, 141, 0.7)',   // Violet foncé
    'rgba(189, 114, 40, 0.7)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
    }]
};
const hotelConfig = {
    type: 'pie',
    data: hotelData,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        const label = context.label;
                        const value = context.formattedValue;
                        const percentage = context.percentage.toFixed(1) + '%';
                        return label + ': ' + value + ' (' + percentage + ')';
                    }
                }
            }
        }
    }
};

new Chart(ctx, hotelConfig);
</script>
    <!-- Include des scripts JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
