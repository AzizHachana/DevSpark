<?php
include '../config.php';
include '../controller/PaysC.php';

$PaysC = new PaysC();
$error = "";

// Fonction pour vérifier si une chaîne ne contient que des lettres et des espaces
function containsOnlyLettersAndSpaces($str)
{
    return preg_match('/^[a-zA-Z\s]+$/', $str);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_FILES["image"]["size"] != 0) {
        $original_name = $_FILES["image"]["name"];
        $imageName = uniqid() . time() . "." . pathinfo($original_name, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["image"]["tmp_name"], "./images/uploads/" . $imageName);
        $image = $imageName;
    } else {
        $image = $_POST['image_old'];
    }

    if (isset($_POST["NomP"]) && isset($_POST["Continent"])) {
        $id = $_POST['id'];
        $NomP = $_POST['NomP'];
        $Continent = $_POST['Continent'];

        if (!containsOnlyLettersAndSpaces($NomP) || !containsOnlyLettersAndSpaces($Continent)) {
            $error = "Le nom du pays et le continent ne doivent contenir que des lettres et des espaces.";
        } else {
            try {
                // Récupérer les informations du pays à mettre à jour
                $Pays = $PaysC->getPaysById($id);

                if (!$Pays) {
                    echo "Pays non trouvé.";
                    exit;
                }

                // Mettre à jour le pays
                $PaysC->updatePays($id, $NomP, $image, $Continent);
                header('Location:../view/dashboard.php');
                exit;
            } catch (Exception $e) {
                echo "Erreur lors de la mise à jour du pays : " . $e->getMessage();
            }
        }
    } else {
        $error = "Tous les champs doivent être remplis";
    }
}

// Récupérer les informations du pays à mettre à jour
if (isset($_GET['id'])) {
    $Pays = $PaysC->getPays($_GET['id']);
    if (!$Pays) {
        echo "Pays non trouvé.";
        exit;
    }
} else {
    echo "ID du Pays non spécifié.";
    exit;
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
    <title>Update Pays</title>
    <!-- Include necessary CSS files -->
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
                <a href="http://www.learnes.com" class="simple-text logo-normal">
                Adventure Awaits
                </a>
            </div>

            <div class="sidebar" data-color="blue">
                <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
                <div class="logo">
                    <a href="http://www.learnes.com" class="simple-text logo-normal">
                    Adventure Awaits
                    </a>
                </div>

                <div class="sidebar-wrapper ps" id="sidebar-wrapper">
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
                    <li class=>
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
                    <li class="active ">
                        <a href="../view/dashboard.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Blogs</p>
                        </a>
                    </li>
                   
                    <li>
                    <a href="../view/Notifications.php">
        <i class="now-ui-icons ui-1_bell-53"></i>
        <p>Notifications</p>
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
                            <a class="navbar-brand" href="#pablo">Modification des Pays</a>
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
                                  
                                    <div class="input-group-append">
                                        
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

            <div class="container">
                <div class="col-md-12 pt-4">
                    <div class="card p-4">
                        <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger">
                            <?php echo $error; ?>
                        </div>
                        <?php endif; ?>
                        <div class="card-header d-flex justify-content-between align-items-center ">
                            <h5 class="title">Modifier le Pays</h5>
                            <a href="../view/dashboard.php" class="btn btn-primary btn-round">Back to list</a>
                        </div>
                        <div class="card-body">

                            <form action="" method="POST" name="myForm" enctype="multipart/form-data"
                                onsubmit="return validateForm()">
                                <input type="hidden" name="id" value="<?php echo $Pays['id']; ?>">
                                <div class="row">
                                    <div class="col-md-4 px-1">
                                        <div class="form-group">
                                            <label>NomP</label>
                                            <input type="text" name="NomP" class="form-control"
                                                value="<?php echo $Pays['NomP']; ?>" placeholder="NomP">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Add other fields similarly -->
                                    <!--<div class="row">-->
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control"
                                                onchange="previewImage(event)">
                                            <input type="hidden" name="image_old" value="<?php echo $Pays['image']; ?>">


                                            <div class="img-container" style="margin-top: 10px; text-align: center;">
                                                <img id="preview"
                                                    src="../assets/img/uploads/<?php echo $Pays['image']; ?>"
                                                    alt="Pays Image"
                                                    style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 px-1">
                                        <div class="form-group">
                                            <label>Continent</label>
                                            <input type="text" name="Continent" class="form-control"
                                                value="<?php echo $Pays['Continent']; ?>" placeholder="Continent">
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


    <script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
    </script>
    <!-- Include necessary JavaScript files -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Include your custom JavaScript file -->
    <script src="../assets/js/script.js"></script>
</body>

</html>