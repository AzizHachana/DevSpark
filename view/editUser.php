<?php
include '../controller/UserC.php';
$userC = new UserC();
$error = "";

if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["mdp"]) &&
    isset($_POST["tel"]) &&
    isset($_POST["tache"])&&
    isset($_POST["sexe"])&&
    isset($_POST["etat"])
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST['prenom']) &&
        !empty($_POST["email"]) &&
        !empty($_POST["mdp"]) &&
        !empty($_POST["tel"]) &&
        !empty($_POST["tache"])&&
        !empty($_POST["sexe"])&&
        !empty($_POST["etat"])    
    ){

        // Créer une instance de la classe Hotel avec les données fournies
            $unityuser = new unityuser(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['mdp'],
            $_POST['tel'],
            $_POST['tache'],
            $_POST['sexe'],
            $_POST['etat'],
        );

        // Mettre à jour l'hôtel
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $mdp = $_POST["mdp"];
        $tel = $_POST["tel"];
        $tache = $_POST["tache"];
        $sexe = $_POST["sexe"];
        $etat = $_POST["etat"];
       

        if ($userC->updateunityuser($id, $nom, $prenom, $email, $mdp, $tel, $tache, $sexe, $etat)) 
        {
            // Rediriger vers une page de succès ou effectuer une autre action en cas de succès de la mise à jour
            header('Location:listClient.php');
            exit;
        }
            else{
                echo "error " ;
            }
        
         } else {
        $error = "Tous les champs doivent être remplis";
    }
    header('Location:listClient.php');
}


// Récupérer les informations de l'hôtel à mettre à jour
if (isset($_GET['id'])) {
    $unityuser = $userC->getuser($_GET['id']);
    if (!$unityuser) {
        echo "User non trouvé.";
        exit;
    }
} else {
    echo "ID de user non spécifié.";
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
<body>
<body class="Update User">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
            <div class="logo">
               
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    AdventureAwaits
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                <li class="active ">
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
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-blue navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Update User</a>
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
        <!-- Include sidebar code here -->
        <!-- Include navbar code here -->
      
            <!-- Navbar -->
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
                            <h5 class="title">Update User</h5>
                            </div>
                            <div class="card-body">
                                <!-- Form for updating hotel -->
                                <button type="button" class="btn btn-primary btn-round"><a href="../view/listClient.php"
                                        style="color: white;">Back to list</a></button>
                                <form action="" method="POST" name="myForm" enctype="multipart/form-data"
                                    onsubmit="return validateForm()">
                                    <input type="hidden" name="id" value="<?php echo $unityuser['id']; ?>">
                                    <div class="row">
                                        
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="nom" name="nom" class="form-control"
                                                    value="<?php echo $unityuser['nom']; ?>" placeholder="nom">
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Prenom</label>
                                                <input type="text" name="prenom" class="form-control"
                                                    value="<?php echo $unityuser['prenom']; ?>" placeholder="Prenom">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>email</label>
                                            <input type="text" name="email" class="form-control"
                                            value="<?php echo $unityuser['email']; ?>" placeholder="email">
                                        </div>
                                        <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>password</label>
                                            <input type="text" name="mdp" class="form-control" 
                                            value="<?php echo $unityuser['mdp']; ?>" placeholder="password">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>tel</label>
                                            <input type="text" name="tel" class="form-control"
                                            value="<?php echo $unityuser['tel']; ?>" placeholder="tel">
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                   
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>tache</label>
                                            <input type="text" name="tache" class="form-control"
                                            value="<?php echo $unityuser['tache']; ?>" placeholder="tache">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Sexe</label>
                                            <input type="text" name="sexe" class="form-control" 
                                            value="<?php echo $unityuser['sexe']; ?>" placeholder="sexe">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>etat</label>
                                            <input type="text" name="etat" class="form-control"
                                            value="<?php echo $unityuser['etat']; ?>" placeholder="etat">
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
    </div>

    <!-- Include necessary JavaScript files -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Include your custom JavaScript file -->
    <script src="./js/script.js"></script>
    <script>
    function validateForm() {
        var nom = document.forms["myForm"]["nom"].value;
        var  prenom= document.forms["myForm"]["prenom"].value;
        var email = document.forms["myForm"]["email"].value;
        var mdp = document.forms["myForm"]["mdp"].value;
        var tel  = document.forms["myForm"]["tel"].value;
        var tache = document.forms["myForm"]["tache"].value;
        var sexe = document.forms["myForm"]["sexe"].value;
        var etat = document.forms["myForm"]["etat"].value;
        /*if (!/^[A-Z]/.test(prenom)) {
        alert("Le prenom doit commencer par une majuscule.");
        return false;
    }
    if (!validateName(nom)) {
        return false;
    }
    if (!validatePrenom(prenom)) {
        return false;
    }

    
   
    if (!/^(\d+(\.\d{1,2})?)$/.test(tel)) {
    alert("Le tel doit contenir uniquement des chiffres");
    return false;
}
return true;*/
    }

   
    /*function validateName(nom) {
    var regex = /^[a-zA-ZÀ-ÿ\-/ ]+$/;
    if (!regex.test(nom)) {
        alert("Le nom ne doit contenir que des lettres, des espaces et des tirets.");
        return false;
    }
    return true;
}
function validatePrenom(prenom) {
    var regex = /^[a-zA-ZÀ-ÿ\-' ]+$/;
    if (!regex.test(lieu)) {
        alert("Le prenom ne doit contenir que des lettres, des espaces et des tirets.");
        return false;
    }
    return true;
}*/
</script>
</body>
</html>