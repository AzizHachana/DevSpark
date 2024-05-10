<?php
include '../controller/HotelC.php';
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

// Traitement du formulaire
$query = "SELECT hotel.ville AS Ville, COUNT(*) AS total
        FROM hotel
        GROUP BY hotel.ville";
      
          $statement2  = $pdo->prepare($query);
          $statement2 ->execute();
          $client_stats =  $statement2 ->fetchAll();



$hotelC = new HotelC();
$hotels= $hotelC->listHotels();
//$professeurs = $professeurC->listProfesseur();


//$reservations = $reservationC->listreservations();
if ($hotels) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Hôtels</title>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Now UI Dashboard by Learnes
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    
    
      <style>
    /* Custom CSS styles for the table */
    
</style>

</head>


<body class="user-profile">
    <div class="wrapper ">
        <div class="sidebar" data-color="yellow">
            <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Voyage et Aventures
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="listhotel1.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./icons.html">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="./map.html">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="./notifications.html">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="addHotel.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="listhotel1.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                           
                            <p>Table List</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="./upgrade.html">
                        <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-orange navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">USER PROFILE</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons media-2_sound-wave"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons location_world"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="panel-header panel-header-lg">
        <div class="canvas" id="bigDashboardChart"></div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <table class="table">
                <thead>
                  <tr>
                    <h5 class="card-category">Hotels List</h5>
                     <th class="text-center">ID</th>
                       
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                        <th>Code Postal</th>
                        <th>Pays</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody id="hotels">
                    <?php foreach ($hotels as $hotel): ?>
                    <tr>
                        <td><?= $hotel['id']; ?></td>
                        <td><?= $hotel['Nom']; ?></td>
                        <td><?= $hotel['Adresse']; ?></td>
                        <td><?= $hotel['Ville']; ?></td>
                        <td><?= $hotel['Code_postal']; ?></td>
                        <td><?= $hotel['Pays']; ?></td>
                        <td><?= $hotel['Tel']; ?></td>
                        <td><?= $hotel['Email']; ?></td>
                        <td><img src="./images/uploads/<?= $hotel['image']; ?>" alt="Hotel Image"></td>
                        <td align="center">
                            <form action="editprof.php" method="get">
                                <input type="hidden" name="id" value="<?php echo $hotel['id']; ?>">
                                <button type="submit" style="border: none; background: none; padding: 0 ; margin: 0 ; cursor : pointer;">
                                    <img src="btn1_modify.png" alt="Update">
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="../View/deleteprof.php" method="get">
                                <input type="hidden" name="id" value="<?php echo $hotel['id']; ?>">
                                <button type="submit" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                                    <img src="btn3_delete.jpg" alt="Delete">
                                </button>
                            </form>
                           
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div> 
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
   
    labels: <?php echo json_encode(array_column( $client_stats, 'Ville')) ?>,
    
    datasets: [{
        label: 'Nombre de réservations',
        data: <?php echo json_encode(array_column( $client_stats, 'total'))?>,
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



 <script>
        function filterHotels() {
            // code to filter the hotels based on the input value
        }
    </script>
</body>
    
</html>
    



<?php
} else {
    echo "<center><h2>Aucun hotel trouvé.</h2></center>";
}
?>
