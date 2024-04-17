<?php
include '../config.php';
include '../controller/DescriptionC.php';
include '../controller/PaysC.php';
$DescriptionC = new DescriptionC();
$error = "";

if (
    isset($_POST["id"]) &&
    isset($_POST["Capitale"]) &&
    isset($_POST["Climat"]) &&
    isset($_POST["Langue"]) &&
    isset($_POST["Monnaie"]) &&
    isset($_POST["Attractions_touristiques"]) &&
    isset($_POST["Activites"])
) {
    if (
        !empty($_POST['id']) &&
        !empty($_POST["Capitale"]) &&
        !empty($_POST["Climat"]) &&
        !empty($_POST["Langue"]) &&
        !empty($_POST["Monnaie"]) &&
        !empty($_POST["Attractions_touristiques"]) &&
        !empty($_POST["Activites"])
    ) {
        // Fonction pour vérifier si le champ contient uniquement des lettres et des espaces
        function isValidText($text) {
            return preg_match('/^[a-zA-Z\s]+$/', $text);
        }

        if (!isValidText($_POST["Capitale"]) || !isValidText($_POST["Climat"]) || !isValidText($_POST["Langue"]) || !isValidText($_POST["Monnaie"]) || !isValidText($_POST["Attractions_touristiques"]) || !isValidText($_POST["Activites"])) {
            $error = "Les champs ne doivent contenir que des lettres et des espaces.";
        } else {
            $Description = new Description(
                $_POST['id'],
                $_POST['Capitale'],
                $_POST['Climat'],
                $_POST['Langue'],
                $_POST['Monnaie'],
                $_POST['Attractions_touristiques'],
                $_POST['Activites']
            );

            $DescriptionC->ajouterDescription($Description);

            header('Location: ../examples/dashboard.php');
            exit;
        }
    } else {
        $error = "Tous les champs doivent être remplis";
    }
}
?>


<!-- Le reste du code HTML reste inchangé -->

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
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="user-profile">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
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
                    <li>
                        <a href="./user.html">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class>
                        <a href="./tables.html">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Description</p>
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
                        <a class="navbar-brand" href="#pablo">Description Des Pays</a>
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
            <!-- error handlers -->
            

            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Ajouter une description</h5>
                            </div>
                            <?php if (!empty($error)) : ?>
                                 <div class="alert alert-danger">
                                    <?php echo $error; ?>
                                 </div>
                            <?php endif; ?>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary btn-round"><a
                                        href="../examples/dashboard.php" style="color: white;">Retour à la
                                        liste</a></button>
            

                                <form action="" method="POST" name="myForm" enctype="multipart/form-data"
                                    onsubmit="return validateForm()">
                                    <div class="row">
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Pays</label>
                                                <select name="id" class="form-control">
                                                    <option value="">Select a country</option>
                                                    <?php
                                                    $PaysC = new PaysC();
                                                    $countries = $PaysC->listPays();
                                                    foreach ($countries as $country) {
                                                        echo "<option value=" . $country['id'] . ">" . $country['NomP'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Capitale</label>
                                                <input type="text" name="Capitale" class="form-control"
                                                    placeholder="Capitale">
                                            </div>
                                        </div>

                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Climat</label>
                                                <input type="text" name="Climat" class="form-control"
                                                    placeholder="Climat">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Monnaie</label>
                                                <input type="text" name="Monnaie" class="form-control"
                                                    placeholder="Monnaie">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Langue</label>
                                                <input type="text" name="Langue" class="form-control"
                                                    placeholder="Langue">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Attractions Touristiques</label>
                                                <input type="text" name="Attractions_touristiques" class="form-control"
                                                    placeholder="Attractions_touristiques">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Activites</label>
                                                <input type="text" name="Activites" class="form-control"
                                                    placeholder="Activites">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-round">Enregistrer</button>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
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
    <script>
    function validateForm() {
        var NomP = document.forms["myForm"]["NomP"].value;
        var Capitale = document.forms["myForm"]["Capitale"].value;
        var Climat = document.forms["myForm"]["Climat"].value;
        var Langue = document.forms["myForm"]["Langue"].value;
        var Monnaie = document.forms["myForm"]["Monnaie"].value;
        var Attractions_touristiques = document.forms["myForm"]["Attractions_touristiques"].value;
        var Activites = document.forms["myForm"]["Activites"].value;
        if (NomP == "" || Capitale == "" || Climat == "" || Langue == "" || Monnaie == "" || Attractions_touristiques ==
            "" || Activites == "") {
            alert("Tous les champs doivent être remplis");
            return false;
        }
        return true;
    }

    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
    </script>
</body>

</html>