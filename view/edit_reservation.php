<?php
include '../Controller/ReservationC.php';

$reservationC = new ReservationC();
$error = "";

if (
    isset($_POST["id"]) &&
    isset($_POST["DDP"]) &&
    isset($_POST["DDA"]) &&
    isset($_POST["Adultes"]) &&
    isset($_POST["Enfants"]) &&
    isset($_POST["Chambres"])
) {
    if (
        !empty($_POST['id']) &&
        !empty($_POST['DDP']) &&
        !empty($_POST["DDA"]) &&
        !empty($_POST["Adultes"]) &&
        !empty($_POST["Enfants"]) &&
        !empty($_POST["Chambres"])
    ) {
        // Créer une instance de la classe Reservation avec les données fournies
        $id = $_POST["id"];
        $DDP = $_POST["DDP"];
        $DDA = $_POST["DDA"];
        $Adultes = $_POST["Adultes"];
        $Enfants = $_POST["Enfants"];
        $Chambres = $_POST["Chambres"];

        if ($reservationC->updatereservation($id, $DDP, $DDA, $Adultes, $Enfants, $Chambres)) {
            // Rediriger vers une page de succès ou effectuer une autre action en cas de succès de la mise à jour
            header('Location:listreservation.php');
            exit;
        } else {
            $error = "Échec de la mise à jour de la réservation.";
        }
    } else {
        $error = "Tous les champs doivent être remplis";
    }
    header('Location:list_reservation.php');
}

// Récupérer les informations de la réservation à mettre à jour
if (isset($_GET['id'])) {
    $reservation = $reservationC->getreservation($_GET['id']);
    if (!$reservation) {
        echo "Réservation non trouvée.";
        exit;
    }
} else {
    echo "ID de la réservation non spécifié.";
    exit;
}
?>
<!DOCTYPE html>
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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
   
</head>
<body>
<body class="user-profile" >
    <div class="wrapper ">
        <div class="sidebar" data-color="yellow">
            <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
            <div class="logo">
               
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Adventure Awaits
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                <li class=>
                        <a href="../view/listClient.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Users</p>
                        </a>
                    </li>
                    <li class=>
                        <a href="../view/listUser.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Comptes Bloqués</p>
                        </a>
                    </li>
                <li class=>
                        <a href="../view/listhotel1.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Hotels</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="../view/list_reservation.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Réservations</p>
                        </a>
                    </li>
                    <li class=>
                        <a href="../view/list_reservation.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Evènements</p>
                        </a>
                    </li>
                    <li class=>
                        <a href="../view/list_reservation.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Réservations_E</p>
                        </a>
                    </li>
                    <li class=>
                        <a href="../view/list_reservation.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Réclamations</p>
                        </a>
                    </li>
                    <li class=>
                        <a href="../view/dashboard.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Blogs</p>
                        </a>
                    </li>
                   
                    <li>
                    <a href="../view/Notifications.php">
                      <i class="now-ui-icons ui-1_bell-53"></i>
                      <p>Notifications </p>
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
                    <a class="navbar-brand" href="#pablo">Update Réservation</a>
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
    <div id="error">
        <?php echo $error; ?>
    </div>

    <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                        <h5 class="title">Update Reservation</h5>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-round">
                            <a href="list_reservation.php" style="color: white;">Back to list</a>
                        </button>
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?php echo $reservation['id']; ?>">
                            <div class="row">
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Date de Départ</label>
                                        <input type="text" name="DDP" class="form-control" value="<?php echo $reservation['DDP']; ?>" placeholder="DDP">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Date d'Arrivée</label>
                                        <input type="text" name="DDA" class="form-control" value="<?php echo $reservation['DDA']; ?>" placeholder="DDA">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Adultes</label>
                                        <input type="text" name="Adultes" class="form-control" value="<?php echo $reservation['Adultes']; ?>" placeholder="Adultes">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Enfants</label>
                                        <input type="text" name="Enfants" class="form-control" value="<?php echo $reservation['Enfants']; ?>" placeholder="Enfants">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Chambres</label>
                                        <input type="text" name="Chambres" class="form-control" value="<?php echo $reservation['Chambres']; ?>" placeholder="Chambres">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-round">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Include your custom JavaScript file -->
    <script src="js/script.js"></script>
    <script>
    <!-- Include necessary JavaScript files -->
    <!-- Replace the following line with your JavaScript file link -->
    <script src="path/to/your/script.js"></script>
</body>
</html>