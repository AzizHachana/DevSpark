<?php
include '../config.php';
include '../controller/PaysC.php';
include '../controller/CommentaireC.php';

$CommentaireC = new CommentaireC();
$error = "";



if (isset($_GET['id_com'])) {
    $Commentaire = $CommentaireC->getCommentById($_GET['id_com']);
    if (!$Commentaire) {
        echo "Commentaire non trouvé.";
        exit;
    }
} else {
    echo "ID du Commentaire non spécifié.";
    exit;
}

if (
    isset($_GET["id_com"]) &&
    isset($_POST["Commentaire"]) &&
    isset($_POST["Date_commentaire"])
) {
    if (
        !empty($_GET["id_com"]) &&
        !empty($_POST["Commentaire"]) &&
        !empty($_POST["Date_commentaire"])
    ) {
        $id_com = $_GET['id_com'];
        $commentText = $_POST['Commentaire'];  // Renommé pour éviter la confusion avec la variable $Commentaire
        $Date_commentaire = $_POST['Date_commentaire'];


        $CommentaireC->updateCommentaire($id_com, $id_pays, $commentText, $Date_commentaire);
        header('Location:../examples/dashboard.php');
        exit;
    } else {
        $error = "Tous les champs doivent être remplis";
    }
}
?>

<!-- update.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Update Description</title>
    <!-- Include necessary CSS files -->
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- Include your custom CSS file -->

</head>

<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
            <div class="logo">
                <a href="http://www.learnes.com" class="simple-text logo-mini">
                    LR
                </a>
                <a href="http://www.learnes.com" class="simple-text logo-normal">
                    Learner
                </a>
            </div>

            <div class="sidebar-wrapper ps" id="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="../examples/dashboard.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/icons.html">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/map.html">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/notifications.html">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/user.html">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/tables.html">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/typography.html">
                            <i class="now-ui-icons text_caps-small"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="../examples/upgrade.html">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
            </div>
        </div>
        <div class="main-panel" id="main-panel">
            <div class="panel-header panel-header-lg">
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
                            <a class="navbar-brand" href="#pablo">Modification des Commentaires</a>
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
                                    <!-- </form-->
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
                                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="now-ui-icons location_world"></i>
                                                <p>
                                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                                </p>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="navbarDropdownMenuLink">
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
                            </form>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
            <div class="content">
                <div class="col-md-12 pt-5">
                    <div class="card p-4">
                        <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger">
                            <?php echo $error; ?>
                        </div>
                        <?php endif; ?>

                        <div class="card-header d-flex justify-content-between align-items-center ">
                            <?php $PaysC = new PaysC();
                            $Pays = $PaysC->getPaysById($Commentaire['id_pays']); ?>
                            <h5 class="title">Modifier le commentaire pour le pays :
                                <strong><?php echo $Pays['NomP'] ?></strong>
                            </h5>
                            <a href="../examples/dashboard.php" class="btn btn-primary btn-round"
                                style="color: white;">Back to list</a>
                        </div>


                        <div class="card-body">
                            <!-- Form for updating professeur -->
                            <form action="" method="POST" name="myForm" enctype="multipart/form-data"
                                onsubmit="return validateForm()">
                                <div class="row">
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Commentaire</label>
                                            <input type="text" name="Commentaire" class="form-control"
                                                value="<?php echo $Commentaire['Commentaire']; ?>"
                                                placeholder="Commentaire">
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-1">
                                        <div class="form-group">
                                            <label>Date_commentaire</label>
                                            <input type="date" name="Date_commentaire" class="form-control"
                                                value="<?php echo $Commentaire['Date_commentaire']; ?>"
                                                placeholder="Date_commentaire">
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
    </div>

    <!-- Include necessary JavaScript files -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Include your custom JavaScript file -->
    <script src="../assets/js/script.js"></script>
</body>

</html>