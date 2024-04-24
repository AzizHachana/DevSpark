<?php
include '../config.php';
include '../view/statistiques.php';
include '../controller/PaysC.php';
include '../controller/DescriptionC.php';
include '../controller/CommentaireC.php';

$PaysC = new PaysC();
$Pays = $PaysC->listPays();

// Vérification si un fichier image a été envoyé
if (isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "../assets/img/" . $file_name);
        echo "Success";
    } else {
        print_r($errors);
    }
}
$totalPays = count($Pays);

?>

<!-- Le reste de votre code HTML pour le dashboard reste le même -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- cdn for awesome fonts icons -->
    <script src="https://kit.fontawesome.com/20ee220576.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="../assets/fontawesome-free/css/fontawesome.min.css">

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">
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

            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li class="active ">
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
                    <li>
                        <a href="./tables.html">
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
            <div class="panel-header">
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
                        <div>
                            <a class="custom-link" href="http://localhost/oumey/view/index.php">To The Front Office</a>
                        </div>
                        <style>
                        /* Style du lien */
                        a.custom-link {
                            color: black;
                            /* Couleur du texte */
                            text-decoration: none;
                            /* Supprimer le soulignement par défaut */
                            font-weight: bold;
                            /* Gras */
                            padding: 10px 20px;
                            /* Ajouter de l'espace autour du texte */
                            border: 2px solid black;
                            /* Bordure noire */
                            border-radius: 10px;
                            /* Bordure arrondie */
                            background-color: pink;
                            /* Fond rose */
                            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
                            /* Ombre */
                            transition: all 0.3s ease;
                            /* Transition fluide pour l'effet hover */
                        }

                        /* Style du lien lorsqu'il est survolé */
                        a.custom-link:hover {
                            background-color: black;
                            /* Changement de couleur de fond au survol */
                            color: pink;
                            /* Changement de couleur de texte au survol */
                            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.7);
                            /* Ombre plus prononcée au survol */
                        }
                        </style>

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
                                    </ </form>
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
                        </div>
                </nav>
                <!-- End Navbar -->



            </div>

            <div class="container">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="d-flex justify-content-between align-items-center pr-4 pl-4">
                            <div class="card-header">
                                <h4 class="card-title"> Liste des Pays</h4>
                                <p class="category"> Here is a subtitle for this table</p>
                            </div>
                            <a href="../view/addPays.php" class="addButton"><i class="fa-solid fa-plus"></i></a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Nom
                                        </th>
                                        <th>Likes</th>
                                        <th>Dislikes</th>
                                        <th>
                                            Modifier
                                        </th>
                                        <th>
                                            Supprimer
                                        </th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $Pays = $PaysC->listPays();
                                        foreach ($Pays as $pays) {
                                            echo "<tr>";
                                            echo "<td>" . $pays['id'] . "</td>";
                                            echo "<td> <img src=../assets/img/uploads/" . $pays['image'] . " width='100px' height='100px'/></td>";
                                            echo "<td>" . $pays['NomP'] . "</td>";
                                            echo "<td>" . $pays['likes'] . "</td>";  // Affichage des likes
                                            echo "<td>" . $pays['dislikes'] . "</td>"; ?>
                                        <td align="center">
                                            <a href="../view/editPays.php?id=<?php echo $pays['id']; ?>">
                                                <img src="../assets/img/editer.png" alt="Update" class="btn-icon"
                                                    width="50" height="50">
                                            </a>
                                        </td>


                                        <td>
                                            <a href="../view/deletePays.php?id=<?php echo $pays['id']; ?>">
                                                <img src="../assets/img/delete.png" alt="Delete" class="btn-icon"
                                                    width="55" height="55">
                                            </a>
                                        </td>


                                        <?php



                                            echo "</tr>";
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Ajout de la section pour afficher le graphique des statistiques -->
                    <div class="card card-plain">
                        <div class="d-flex justify-content-between align-items-center pr-4 pl-4">
                            <div class="card-header">
                                <h4 class="card-title">Statistiques des Pays</h4>
                                <p class="category">Pourcentage de satisfaction et d'insatisfaction par pays</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="myChart"></canvas>
                            </div>

                            <script>
                            const ctx = document.getElementById('myChart');

                            new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: <?php echo json_encode($PaysNames) ?>,
                                    datasets: [{
                                        label: 'Pourcentage de satisfaction (likes)',
                                        backgroundColor: 'rgba(75, 192, 192, 0.7)',
                                        borderColor: 'rgba(75, 192, 192, 1)',
                                        borderWidth: 1,
                                        data: <?php echo json_encode($percentagesLikes) ?>,
                                    }, {
                                        label: 'Pourcentage d\'insatisfaction (dislikes)',
                                        backgroundColor: 'rgba(255, 99, 132, 0.7)',
                                        borderColor: 'rgba(255, 99, 132, 1)',
                                        borderWidth: 1,
                                        data: <?php echo json_encode($percentagesDislikes) ?>,
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true,
                                            max: 100,
                                            ticks: {
                                                color: 'black',
                                                font: {
                                                    weight: 'bold',
                                                    size: 14 // Increase the font size
                                                }
                                            }
                                        },
                                        x: {
                                            ticks: {
                                                color: 'black',
                                                font: {
                                                    weight: 'bold',
                                                    size: 14 // Increase the font size
                                                }
                                            }
                                        }
                                    }
                                }
                            });
                            </script>

                        </div>
                    </div>


                    <div class="card card-plain">

                        <div class="d-flex justify-content-between align-items-center pr-4 pl-4">
                            <div class="card-header">
                                <h4 class="card-title"> Liste des Descriptions des pays</h4>
                                <p class="category"> Here is a subtitle for this table</p>
                            </div>
                            <a href="../view/addDescription.php" class="addButton"><i class="fa-solid fa-plus"></i></a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="">
                                        <th>Nom Pays</th>
                                        <th>Capitale</th>
                                        <th>Climat</th>
                                        <th>Langue</th>
                                        <th>Monnaie</th>
                                        <th>Attractions_touristiques</th>
                                        <th>Activites</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $DescriptC = new DescriptionC();
                                        $Descript = $DescriptC->listDescription();
                                        foreach ($Descript as $desc) {

                                            $Pays = $PaysC->getPaysById($desc['id']);
                                            echo "<td>" . $Pays['NomP'] . "</td>";
                                            echo "<td>" . $desc['Capitale'] . "</td>";
                                            echo "<td>" . $desc['Climat'] . "</td>";
                                            echo "<td>" . $desc['Langue'] . "</td>";
                                            echo "<td>" . $desc['Monnaie'] . "</td>";
                                            echo "<td>" . $desc['Attractions_touristiques'] . "</td>";
                                            echo "<td>" . $desc['Activites'] . "</td>"; ?>
                                        <td align="center">
                                            <a href="../view/editDescription.php?id=<?php echo $desc['id']; ?>">
                                                <img src="../assets/img/editer.png" alt="Update" class="btn-icon"
                                                    width="50" height="50">
                                            </a>
                                        </td>

                                        <td>
                                            <a href="../view/deleteDescription.php?id=<?php echo $desc['id']; ?>">
                                                <img src="../assets/img/delete.png" alt="Delete" class="btn-icon"
                                                    width="55" height="55">
                                            </a>
                                        </td>

                                        <?php
                                            echo "</tr>";
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-plain">
                    <div class="d-flex justify-content-between align-items-center pr-4 pl-4">
                        <div class="card-header">
                            <h4 class="card-title"> Liste des Commentaires</h4>
                            <p class="category"> Here is a subtitle for this table</p>
                        </div>
                        <a href="../view/addCommentaire.php" class="addButton"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="">
                                    <th>Nom Pays</th>
                                    <th>Commentaires</th>
                                    <th>Date_commentaire</th>
                                    <th>Modifier</th>
                                    <th>Supprimer</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $CommentC = new CommentaireC();
                                    $PaysC = new PaysC();
                                    $Comment = $CommentC->listCommentaire();
                                    foreach ($Comment as $comm) {
                                        $Pays = $PaysC->getPaysById($comm['id_pays']);
                                        echo "<tr>";
                                        echo "<td>" . $Pays['NomP'] . "</td>";
                                        echo "<td>" . $comm['Commentaire'] . "</td>";
                                        echo "<td>" . $comm['Date_commentaire'] . "</td>"; ?>
                                    <td align="center">
                                        <a href="../view/editCommentaire.php?id_com=<?php echo $comm['id_com']; ?>">
                                            <img src="../assets/img/editer.png" alt="Update" class="btn-icon" width="50"
                                                height="50">
                                        </a>
                                    </td>

                                    <td>
                                        <a href="../view/deleteCommentaire.php?id_com=<?php echo $comm['id_com']; ?>">
                                            <img src="../assets/img/delete.png" alt="Delete" class="btn-icon" width="55"
                                                height="55">
                                        </a>
                                    </td>

                                    <?php
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>


                <!-- Ajout du script jQuery pour la prévisualisation de l'image -->
                <script>
                $(document).ready(function() {
                    // function to display image before upload
                    $("input.image").change(function() {
                        var file = this.files[0];
                        var url = URL.createObjectURL(file);
                        $(this).closest("tr").find(".preview_img").attr("src", url);
                    });
                });
                </script>
            </div>
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
    <!-- Now Ui
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>



</body>

</html>