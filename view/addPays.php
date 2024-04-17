<?php
include '../config.php';
include '../Controller/PaysC.php';
$PaysC = new PaysC();

$error = "";

if (
    isset($_POST["NomP"]) &&
    isset($_FILES["image"])
) {
    if (
        !empty($_POST['NomP']) &&
        $_FILES["image"]["size"] != 0
    ) {
        // Vérification du nom du pays
        if (preg_match('/^[a-zA-Z\s]+$/', $_POST['NomP'])) {
            // Renommer l'image avant de l'enregistrer dans la base de données
            $original_name = $_FILES["image"]["name"];
            $imageName = uniqid() . time() . "." . pathinfo($original_name, PATHINFO_EXTENSION);
            move_uploaded_file($_FILES["image"]["tmp_name"], "./images/uploads/" . $imageName);

            // Créer une instance de la classe Pays avec les données fournies
            $Pays = new Pays(
                null, // Laissez null pour que l'ID soit auto-incrémenté
                $_POST['NomP'],
                $imageName // Utilisez le nom de l'image nouvellement téléchargée
            );

            // Ajouter le pays
            $PaysC->ajouterPays($Pays);

            // Rediriger vers une page de succès ou effectuer une autre action en cas d'ajout réussi
            header('Location:../examples/dashboard.php');
            exit;
        } else {
            $error = "Le nom du pays ne doit contenir que des lettres et des espaces.";
        }
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
        Now UI Dashboard by Learnes
    </title>
    <meta content="width=device-width, initial-scale=1.0,<?php
include '../model/Description.php';

class DescriptionC
{
    public function listDescription()
    {
        $sql = "SELECT * FROM descript";
        $db = config::getConnexion();
        try {
            $stmt = $db->query($sql);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function deleteDescription($id)
    {
        $sql = "DELETE FROM descript WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function ajouterDescription($Description)
    {
        $sql = "INSERT INTO descript VALUES (:id, :Capitale, :Climat, :Langue, :Monnaie, :Attractions_touristiques, :Activites)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $Description->getId(),
                'Capitale' => $Description->getCapitale(),
                'Climat' => $Description->getClimat(),
                'Langue' => $Description->getLangue(),
                'Monnaie' => $Description->getMonnaie(),
                'Attractions_touristiques' => $Description->getAttractions(),
                'Activites' => $Description->getActivites(),
            ]);
            echo "Description ajoutée avec succès.";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function updateDescription($id, $Capitale, $Climat, $Langue, $Monnaie, $Attractions_touristiques, $Activites)
    {
        $sql = "UPDATE descript SET Capitale=:Capitale, Climat=:Climat, Langue=:Langue, Monnaie=:Monnaie, Attractions_touristiques=:Attractions_touristiques, Activites=:Activites WHERE id=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id);
            $query->bindParam(':Capitale', $Capitale);
            $query->bindParam(':Climat', $Climat);
            $query->bindParam(':Langue', $Langue);
            $query->bindParam(':Monnaie', $Monnaie);
            $query->bindParam(':Attractions_touristiques', $Attractions_touristiques);
            $query->bindParam(':Activites', $Activites);

            $query->execute();
            echo $query->rowCount() . " records updated successfully";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function getDescriptById($id)
    {
        $sql = "SELECT * FROM descript WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id' => $id]);
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
}
?>
 maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="Pays">
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
                        <a href="../examples/dashboard.php">
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
                    <li class="">
                        <a href="./user.html">
                            <i class="now-ui-icons users_single-02"></i>
                            <p> User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="./tables.html">
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
                        <a class="navbar-brand" href="#pablo">Les Pays</a>
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
                            <?php if (!empty($error)) : ?>
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>
                                <h5 class="title">Ajouter un Pays</h5>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary btn-round"><a href="../examples/dashboard.php" style="color: white;">Retour à la
                                        liste</a></button>

                                <form action="" method="POST" name="myForm" enctype="multipart/form-data" onsubmit="return validateForm()">
                                    <div class="row">
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Nom_Pays</label>
                                                <input type="text" name="NomP" class="form-control" placeholder="NomP">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control" onchange="previewImage(event)">
                                                <div class="img-container" style="margin-top: 10px; text-align: center;">
                                                    <img id="preview" src="./images/default_profile.jpg" alt="Profile Picture" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
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
</body>

</html>