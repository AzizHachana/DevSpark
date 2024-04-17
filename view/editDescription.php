<?php
include '../config.php';
include '../controller/PaysC.php';
include '../controller/DescriptionC.php';

$DescriptionC = new DescriptionC();
$error = "";

// Fonction pour vérifier si une chaîne ne contient que des lettres et des espaces
function containsOnlyLettersAndSpaces($str)
{
    return preg_match('/^[a-zA-Z\s]+$/', $str);
}

// Récupérer les informations de la description à mettre à jour
if (isset($_GET['id'])) {
    $Description = $DescriptionC->getDescriptById($_GET['id']);
    if (!$Description) {
        echo "Description non trouvé.";
        exit;
    }
} else {
    echo "ID de la description non spécifié.";
    exit;
}

if (
    isset($_POST["Capitale"]) &&
    isset($_POST["Climat"]) &&
    isset($_POST["Langue"]) &&
    isset($_POST["Monnaie"]) &&
    isset($_POST["Attractions_touristiques"]) &&
    isset($_POST["Activites"])
) {
    if (
        !empty($_POST["Capitale"]) &&
        !empty($_POST["Climat"]) &&
        !empty($_POST["Langue"]) &&
        !empty($_POST["Monnaie"]) &&
        !empty($_POST["Attractions_touristiques"]) &&
        !empty($_POST["Activites"])
    ) {
        $id = $_GET['id'];  // Récupérer l'ID depuis l'URL
        $Capitale = $_POST['Capitale'];
        $Climat = $_POST['Climat'];
        $Langue = $_POST['Langue'];
        $Monnaie = $_POST["Monnaie"];
        $Attractions_touristiques = $_POST["Attractions_touristiques"];
        $Activites = $_POST["Activites"];

        // Vérifier si les champs contiennent uniquement des lettres et des espaces
        if (!containsOnlyLettersAndSpaces($Capitale) || !containsOnlyLettersAndSpaces($Climat) || !containsOnlyLettersAndSpaces($Langue) || !containsOnlyLettersAndSpaces($Monnaie) || !containsOnlyLettersAndSpaces($Attractions_touristiques) || !containsOnlyLettersAndSpaces($Activites)) {
            $error = "Les champs ne doivent contenir que des lettres et des espaces.";
        } else {
            $DescriptionC->updateDescription($id, $Capitale, $Climat, $Langue, $Monnaie, $Attractions_touristiques, $Activites);
            header('Location:../examples/dashboard.php');
            exit;
        }
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- Include your custom CSS file -->
    <link rel="stylesheet" href="./css/style.css">
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
                        <a href="./upgrade.html">
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
                            <a class="navbar-brand" href="#pablo">Dashboard</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
                                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            $Pays = $PaysC->getPaysById($Description['id']); ?>
                            <h5 class="title">Modifier la description pour le pays :
                                <strong><?php echo $Pays['NomP'] ?></strong>
                            </h5>
                            <a href="../examples/dashboard.php" class="btn btn-primary btn-round" style="color: white;">Back to list</a>
                        </div>


                        <div class="card-body">
                            <!-- Form for updating professeur -->
                            <form action="" method="POST" name="myForm" enctype="multipart/form-data" onsubmit="return validateForm()">
                                <input type="hidden" name="id" value="<?php echo $Description['id']; ?>">
                                <div class="row">
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Capitale</label>
                                            <input type="text" name="Capitale" class="form-control" value="<?php echo $Description['Capitale']; ?>" placeholder="Capitale">
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-1">
                                        <div class="form-group">
                                            <label>Climat</label>
                                            <input type="text" name="Climat" class="form-control" value="<?php echo $Description['Climat']; ?>" placeholder="Climat">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Langue</label>
                                            <input type="text" name="Langue" class="form-control" placeholder="Langue" value="<?php echo $Description['Langue']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Monnaie</label>
                                            <input type="text" name="Monnaie" class="form-control" placeholder="Monnaie" value="<?php echo $Description['Monnaie']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 px-1">
                                        <div class="form-group">
                                            <label>Attractions_touristiques</label>
                                            <input type="text" name="Attractions_touristiques" class="form-control" placeholder="Attractions_touristiques" value="<?php echo $Description['Attractions_touristiques']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Activites</label>
                                            <input type="text" name="Activites" class="form-control" placeholder="Activites" value="<?php echo $Description['Activites']; ?>">
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
    <script src="./js/script.js"></script>
</body>

</html>