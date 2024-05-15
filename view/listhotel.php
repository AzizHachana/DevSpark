<?php
//include '../config.php' ;
include '../controller/HotelC.php' ;

$c = new HotelC();
$tab = $c->listHotels()

// Vérification si un fichier image a été envoyé

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
    name="viewport" />
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  
  <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('hot2.jpg'); /* Remplacez 'background.jpg' par le chemin de votre image de fond */
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            width: 90%;
            margin: 20px auto;
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

<body class="">
    
    <div class="wrapper ">
    <div class="sidebar" data-color="yellow">
      <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
      <div class="logo">
        <a href="http://www.learnes.com" class="simple-text logo-mini">
          
        </a>
        <a href="http://www.learnes.com" class="simple-text logo-normal">
          Voyage 
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="">
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
          <li>
            <a href="../view/addHotel.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./listhotel.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
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
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
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
              </            </form>
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
                    <th>Code_postal</th>
                    <th>Pays</th>
                    <th>Tel</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- PHP Loop to display data -->
                  <?php foreach ($tab as $hotel) { ?>
                    <tr>
                      <td class="text-center"><?= $hotel['id']; ?></td>
                      <td><?= $hotel['Nom']; ?></td>
                      <td><?= $hotel['Adresse']; ?></td>
                      <td><?= $hotel['Ville']; ?></td>
                      <td><?= $hotel['Code_postal']; ?></td>
                      <td><?= $hotel['Pays']; ?></td>
                      <td><?= $hotel['Tel']; ?></td>
                      <td><?= $hotel['Email']; ?></td>
                      <td><img src=<?php echo ("./images/uploads/".$hotel['image']); ?> alt="" style="width:50px;height:50px;border:2px solid gray;border-radius:8px;object-fit:cover"></td>
                      
                     
                      </td>
                      <td align="center">
                      <form action="editprof.php" method="get">
                                <input type="hidden" name="id" value="<?php echo $hotel['id']; ?>">
                                <button type="submit" style="border: none; background: none; padding: 0 ; margin: 0 ; cursor : pointer;">
                                    <img src="btn1_modify.png" alt="Update">
                                </button>
                            </form>
               
                <td>
                   <form action="../View/deleteprof.php" method="get">
                     <input type="hidden" name="id" value="<?php echo $hotel['id']; ?>">
                       <button type="submit" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                         <img src="btn3_delete.jpg" alt="Delete">
                       </button>
                    </form>
                </td>
            </td>
                    </tr>
                  <?php } ?>
                  <!-- End of PHP Loop -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.learnes.com">
                  Learnes
                </a>
              </li>
              <li>
                <a href="http://presentation.learnes.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.learnes.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a
              href="https://www.learnes.com" target="_blank">Learnes</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Core JS Files -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Google Maps Plugin -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!-- Notifications Plugin -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>

  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function () {
      // JavaScript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
    });
  </script>
</body>

</html>

