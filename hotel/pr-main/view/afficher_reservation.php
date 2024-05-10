<?php
 // Inclure le fichier de connexion à la base de données
 session_start(); 
 include_once __DIR__ . '/../config.php';
// Assurez-vous que l'ID de l'utilisateur est 7
if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];
} else {
    // Rediriger l'utilisateur vers une page de connexion s'il n'est pas connecté
    header("Location: login.php");
    exit(); // Arrêter l'exécution du script après la redirection
}
$pdo = new PDO(
    'mysql:host=localhost;dbname=atelierphp',
    'root',
    '',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);
// Écrire une requête SQL pour récupérer toutes les réservations associées à l'ID utilisateur 7
$query = "SELECT reservation.*, hotel.Nom AS hotel_nom FROM reservation
          INNER JOIN hotel ON reservation.hotel_id = hotel.id
          WHERE reservation.user_id = ?";
  $statement  = $pdo->prepare($query);
  $statement ->execute([$userId]);
$reservations =   $statement ->fetchAll();

$query = "SELECT hotel.Nom AS hotel_nom, COUNT(reservation.id) AS reservation_count
          FROM reservation
          INNER JOIN hotel ON reservation.hotel_id = hotel.id
          WHERE reservation.user_id = ?
          GROUP BY hotel.Nom
          ORDER BY reservation_count DESC";
          $statement2  = $pdo->prepare($query);
          $statement2 ->execute([$userId]);
          $hotel_stats =   $statement2 ->fetchAll();

          $eventsPerPage = 6; // Nombre d'événements par page
          $totalEvents = count($reservations); // Nombre total d'événements
          $totalPages = ceil($totalEvents / $eventsPerPage); // Nombre total de pages
          $page = isset($_GET['page']) ? $_GET['page'] : 1; // Page actuelle, par défaut la première page
          
          $start = ($page - 1) * $eventsPerPage;
          $end=$start+$eventsPerPage; // Index de début pour extraire les événements de la page actuelle
          $reservations = array_slice($reservations, $start, $eventsPerPage); 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    

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
    <title>Réservations de l'utilisateur</title>
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
	      <a class="navbar-brand" href="index.html">Adventure Awaits<span>Travel Agency</span></a>
		 

	     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="destination.html" class="nav-link">Hebergement</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="container">
        <div class="title-container">
            <h1 class="title">Liste de vos Réservations</h1>
        </div>
        </div>
    <table>
        <thead>
            <tr>
                <th>Date de départ</th>
                <th>Date d'arrivée</th>
                <th>Nombre d'adultes</th>
                <th>Nombre d'enfants</th>
                <th>Nombre de chambres</th>
                <th>Nom de l'hôtel</th>
                <th>Voucher</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation): ?>
                <tr>
                    <td><?= $reservation['DDP'] ?></td>
                    <td><?= $reservation['DDA'] ?></td>
                    <td><?= $reservation['Adultes'] ?></td>
                    <td><?= $reservation['Enfants'] ?></td>
                    <td><?= $reservation['Chambres'] ?></td>
                    <td><?= $reservation['hotel_nom'] ?></td>
                    <td>
                    <a href="voucher.php?reservation_id=<?= $reservation['id']; ?>" class="show-link">
                        <button class="show-button"><i class="fas fa-eye"></i></button>
                    </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="row mt-5">
    <div class="col text-center">
        <div class="block-27">
            <ul>
                <?php if ($page > 1): ?>
                    <li><a href="afficher_reservation.php?page=<?php echo $page - 1; ?>">&lt;</a></li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li <?php if($i == $page) echo 'class="active"'; ?>>
                    <a href="afficher_reservation.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
                <?php if ($page < $totalPages): ?>
                    <li><a href="afficher_reservation.php?page=<?php echo $page + 1; ?>">&gt;</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
    <div style="width: 50%; margin: 0 auto;">
    <canvas id="hotel-chart"></canvas>
</div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
const ctx = document.getElementById('hotel-chart').getContext('2d');
const hotelData = {
   
    labels: <?php echo json_encode(array_column($hotel_stats, 'hotel_nom')) ?>,
    
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
</body>
</html>
