<?php
session_start();
// Inclure le fichier de configuration et la classe ReservationC
include '../config.php';
include '../controller/ReservationEC.php';
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
$id_u = $_SESSION['id']; // ID de l'utilisateur

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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /*background-image: linear-gradient(120deg, #FEBA33, #FF5E5E);*/
            /*background-image: linear-gradient(120deg, #FEBA33, #FF8C8C);*/
            background-image: linear-gradient(120deg, #FEBA33, #FF8C8C);
          

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
.black-bold {
  font-weight: bold;
  color: black;
}

.background-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: blur(2.5px); /* Appliquer le flou */
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
        .container {
            width: 90%;
            margin: 100px auto 20px;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        td {
            color: #666;
        }
        .reservation-container {
    /* Styles communs pour le conteneur */
    margin-top: 20px;
}
.show-button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  height: 45px;
  box-shadow: 1px 1px 3px 2px #007bff; /* added box shadow for a more modern look */
  text-shadow: 1px 1px 2px rgba(0, 123, 255, 0.8); /* added text shadow for better readability */
}  </style>
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
              <li class="nav-item "><a href="#" class="nav-link">Réclamations</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			  <li class="nav-item cta"><a href="../Front/AccountUser.php" class="nav-link">My Account</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
      <div class="container">
        <div class="title-container">
            <h1 class="title">Liste de vos Réservations</h1>
        </div>
        </div>
            <table class="">
                <thead>
                    <tr>
                        <th>Check-in Date</th>
                        <th>Check-out Date</th>
                        <th>Number of People</th>
                        <th>Status</th>
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
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div style="width: 50%; margin: 0 auto;">
        <canvas id="hotel-chart" style="display: none;"></canvas>
        <button id="toggle-stats" class="btn btn-primary mt-3">Show Stats</button>
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
                            label: function (context) {
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

        const chart = new Chart(ctx, hotelConfig);

        document.getElementById('toggle-stats').addEventListener('click', function () {
            const isHidden = chart.canvas.style.display === 'none';
            chart.canvas.style.display = isHidden ? 'block' : 'none';
            this.textContent = isHidden ? 'Hide Stats' : 'Show Stats';
        });
    </script>

    <!-- Include des scripts JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
