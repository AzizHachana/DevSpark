<?php
include '../controller/EventC.php'; // Inclure le fichier contenant la classe HotelC
$eventC = new EventC(); // Créer une instance de HotelC

$error = "";

if (
    isset($_POST["Nom"]) &&
    isset($_POST["DateE"]) &&
    isset($_POST["Lieu"]) &&
    isset($_POST["DescriptionE"]) &&
    isset($_POST["Prix"]) &&
    isset($_FILES["image"])
) {
    if (
        !empty($_POST['Nom']) &&
        !empty($_POST["DateE"]) &&
        !empty($_POST["Lieu"]) &&
        !empty($_POST["DescriptionE"]) &&
        !empty($_POST["Prix"]) &&
        $_FILES["image"]["size"] != 0
    ) {
        // Renommer l'image avant de l'enregistrer dans la base de données
        $original_name = $_FILES["image"]["name"];
        $imageName = uniqid() . time() . "." . pathinfo($original_name, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["image"]["tmp_name"], "./images/uploads/" . $imageName);

        // Créer une instance de la classe Hotel avec les données fournies
        $event = new Event(
            null, // Laissez null pour que l'ID soit auto-incrémenté
            $_POST['Nom'],
            $_POST['DateE'],
            $_POST['Lieu'],
            $_POST['DescriptionE'],
            $_POST['Prix'],
            $imageName // Utilisez le nom de l'image nouvellement téléchargée
        );

        // Ajouter l'hotel
        $eventC->ajouterEvent($event);

        // Rediriger vers une page de succès ou effectuer une autre action en cas d'ajout réussi
        header('Location: ../view/listEvent.php');
        exit;
    } else {
        $error = "Tous les champs doivent être remplis";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Panel
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
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="user-profile">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    AW
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    AdventureAwaits
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="../examples/dashboard.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="./user.html">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Add</p>
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
        <!-- error handlers -->
        <div id="error">
            <?php echo $error; ?>
        </div>
        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Ajouter un Event</h5>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-round"><a href="../examples/dashboard.php"
                                    style="color: white;">Retour à la liste</a></button>
                            <form action="" method="POST" name="myForm" enctype="multipart/form-data"
                                onsubmit="return validateForm()">
                                <div class="row">
                                    <div class="col-md-4 px-1">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" name="Nom" class="form-control" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" name="DateE" class="form-control"
                                                placeholder="DateE">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 px-1">
                                        <div class="form-group">
                                            <label>Lieu</label>
                                            <input type="text" name="Lieu" class="form-control" placeholder="Lieu">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" name="DescriptionE" class="form-control"
                                                placeholder="Description">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Prix</label>
                                            <input type="text" name="Prix" class="form-control" placeholder="Pays">
                                        </div>
                                    </div>
                                </div>
                            
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control"
                                                onchange="previewImage(event)">
                                            <div class="img-container" style="margin-top: 10px; text-align: center;">
                                                <img id="preview" src="./images/default_profile.jpg"
                                                    alt="Profile Picture" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
                                            </div>
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
        var nom = document.forms["myForm"]["Nom"].value;
        var date = document.forms["myForm"]["DateE"].value;
        var lieu = document.forms["myForm"]["Lieu"].value;
        var Description = document.forms["myForm"]["DescriptionE"].value;
        var prix = document.forms["myForm"]["Prix"].value;
       
        var image = document.forms["myForm"]["image"].value;
        if (nom == "" || date == "" || lieu == "" || Description == "" || prix == "" || image == "") {
            alert("Tous les champs doivent être remplis");
            return false;
        }
        
        if (!/^[A-Z]/.test(nom)) {
        alert("Le nom doit commencer par une majuscule.");
        return false;
    }
    if (!validateName(nom)) {
        return false;
    }
    if (!validateLieu(lieu)) {
        return false;
    }

    
   
    if (!/^(\d+(\.\d{1,2})?)$/.test(prix)) {
    alert("Le prix doit contenir uniquement des chiffres");
    return false;
}
return true;
    }

    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
    function validateName(nom) {
    var regex = /^[a-zA-ZÀ-ÿ\- ]+$/;
    if (!regex.test(nom)) {
        alert("Le nom ne doit contenir que des lettres, des espaces et des tirets.");
        return false;
    }
    return true;
}
function validateLieu(lieu) {
    var regex = /^[a-zA-ZÀ-ÿ\- ]+$/;
    if (!regex.test(lieu)) {
        alert("Le Lieu ne doit contenir que des lettres, des espaces et des tirets.");
        return false;
    }
    return true;
}
</script>
</body>

</html>

