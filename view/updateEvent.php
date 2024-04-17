<?php
include '../Controller/EventC.php';

$EventC = new EventC();
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
        /*$original_name = $_FILES["image"]["name"];
        $imageName = uniqid() . time() . "." . pathinfo($original_name, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["image"]["tmp_name"], "./images/uploads/" . $imageName);
        $image = $imageName;*/
        if ($_FILES["image"]["size"] != 0) {
            $original_name = $_FILES["image"]["name"];
            $imageName = uniqid() . time() . "." . pathinfo($original_name, PATHINFO_EXTENSION);
            move_uploaded_file($_FILES["image"]["tmp_name"], "./images/uploads/" . $imageName);
            $image = $imageName;
        } else {
            // Si aucune nouvelle image n'est fournie, conserver l'image existante
            $currentHotel = $hotelC->getHotelById($id); // Suppose que cette fonction récupère les données de l'hôtel par son ID
            $image = $currentHotel['image'];
        }

        // Créer une instance de la classe Hotel avec les données fournies
        $event = new Event(
            $_POST['id'],
            $_POST['Nom'],
            $_POST['DateE'],
            $_POST['Lieu'],
            $_POST['DescriptionE'],
            $_POST['Prix'],
            $imageName // Utilisez le nom de l'image nouvellement téléchargée
        );

        // Mettre à jour l'hôtel
        $id = $_POST["id"];
        $nom = $_POST["Nom"];
        $date = $_POST["DateE"];
        $lieu = $_POST["Lieu"];
        $description = $_POST["DescriptionE"];
        $prix = $_POST["Prix"];
        $image = $_FILES["image"]["name"];
        
        if ($EventC->updateEvent($id, $nom, $date, $lieu, $description, $prix,$image)) {
            // Rediriger vers une page de succès ou effectuer une autre action en cas de succès de la mise à jour
            header('Location:listEvent.php');
            exit;
        } else {
            $error = "Échec de la mise à jour de l'hôtel.";
        }
    } else {
        $error = "Tous les champs doivent être remplis";
    }
    header('Location:listEvent.php');
}


// Récupérer les informations de l'hôtel à mettre à jour
if (isset($_GET['id'])) {
    $event = $EventC->getEventById($_GET['id']);
    if (!$event) {
        echo "Event non trouvé.";
        exit;
    }
} else {
    echo "ID de l'event non spécifié.";
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
    <title>Update Event</title>
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
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-color="blue">
            <!-- Logo -->
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    AW
                </a>
                <a href="#" class="simple-text logo-normal">
                    AdventureAwaits
                </a>
            </div>
            <!-- End Logo -->

            <!-- Sidebar Wrapper -->
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <!-- Sidebar Links -->
                    <li>
                        <a href="#">
                            <i class="now-ui-icons design_app"></i>
                            <p>List</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Add</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="#">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                    <!-- End Sidebar Links -->
                </ul>
            </div>
            <!-- End Sidebar Wrapper -->
        </div>
        <!-- End Sidebar -->

        <!-- Main Panel -->
        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent bg-primary navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Content -->
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Update Event</h5>
                            </div>
                            <div class="card-body">
                                <!-- Form for updating event -->
                                <button type="button" class="btn btn-primary btn-round"><a href="../examples/dashboard.php" style="color: white;">Back to list</a></button>
                                <form action="" method="POST" name="myForm" enctype="multipart/form-data" onsubmit="return validateForm()">
                                    <input type="hidden" name="id" value="<?php echo $event['id']; ?>">
                                    <div class="row">
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" name="nom" class="form-control" value="<?php echo $event['Nom']; ?>" placeholder="Nom">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" name="date" class="form-control" value="<?php echo $event['DateE']; ?>" placeholder="Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Lieu</label>
                                                <input type="text" name="lieu" class="form-control" value="<?php echo $event['Lieu']; ?>" placeholder="Lieu">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="description" class="form-control" value="<?php echo $event['DescriptionE']; ?>" placeholder="Description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Prix</label>
                                                <input type="text" name="prix" class="form-control" value="<?php echo $event['Prix']; ?>" placeholder="Prix">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control" onchange="previewImage(event)">
                                            <input type="hidden" name="image_old" value="<?php echo $event['image']; ?>">
                                            <div class="img-container" style="margin-top: 10px; text-align: center;">
                                                <img id="preview" src="./images/uploads/<?php echo $event['image']; ?>" alt="Event Image" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-primary btn-round">Update Event</button>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>
        <script>
        function validateForm() {
            var NomP = document.forms["myForm"]["NomP"].value;
            var image = document.forms["myForm"]["image"].value;
            if (NomP == "" || image == "") {
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
    <!-- Include necessary JavaScript files -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Include your custom JavaScript file -->
    <script src="./js/script.js"></script>
</body>
