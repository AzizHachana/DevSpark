
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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
   
</head>
<body class="user-profile">
    <div class="wrapper ">
        <div class="sidebar" data-color="yellow">
            <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    LR
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Learner
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="./dashboard.php">
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
                        <a href="./user.html">
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
                           <form id="searchForm" action="chercher.php" method="GET">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                           </form >    
                           
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
        <div class="panel-header panel-header-lg">
        <div class="canvas" id="bigDashboardChart"></div>
      </div>
      <div class="container">
        <div class="title-container">
            <h1 class="title">Liste des hôtels</h1>
            <a href="addHotel.php" class="btn">Ajouter un hôtel</a>
        </div>
        <div class="container1">
            
            <div class="search-container">
      <form id="searchForm" action="chercher.php" method="GET">
        <input type="text" id="searchInput" name="query" placeholder="Rechercher un hôtel">
       
      </form>
     </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
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
                            <form action="../View/deleteprof.php" method="post">
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

        
        <style>
            .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffc107;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .container1 {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #F5F5DC;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        img {
            max-width: 50px;
            max-height: 50px;
            border: 2px solid gray;
            border-radius: 8px;
            object-fit: cover;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #343a40;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .title {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
        font-size: 2em; /* Taille de police plus grande */
        text-transform: uppercase; /* Mettre en majuscules */
        letter-spacing: 2px; /* Espacement entre les lettres */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Ombre portée pour un effet de profondeur */
    }

    .quantity {
        display: flex;
        align-items: center;
    }

    .quantity button {
        background-color: #3498db !important;
        border: 1px solid #3498db;
        padding: 5px;
        cursor: pointer;
        border-radius: 50%;
    }

    .quantity input {
        width: 30px;
        text-align: center;
        margin: 0 5px;
        border: 1px solid #ccc;
        border-radius: 10px;
    }

    .delete-btn-item {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 5px;
        cursor: pointer;
    }

    .somme {
        margin-left: 10px;
        /* Ajout de l'espace à gauche pour séparer de la quantité */
        font-size: 18px;
        font-weight: bold;
    }

    /* Ajout du style pour le bouton Enregistrer */
    .btn-primary {
        background-color: #007bff !important;
        border-color: #007bff !important;
        color: #ffffff !important;
        /* Couleur du texte */
    }
    
</style>

<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
</body>

</html>
<?php
} else {
    echo "<center><h2>Aucun hotel trouvé.</h2></center>";
}
?>