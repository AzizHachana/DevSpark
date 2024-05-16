<?php
include '../config.php';
include '../view/statistiques.php';
include '../controller/PaysC.php';
include '../controller/DescriptionC.php';
include '../controller/CommentaireC.php';

$PaysC = new PaysC();
$Pays = $PaysC->listPays();
$CommentaireC = new CommentaireC();
$newCommentsNotifications = $CommentaireC->getNewCommentsNotifications();
$numNotifications = count($newCommentsNotifications);

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
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
   

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
            <div class="logo">
                <a href="http://www.learnes.com" class="simple-text logo-normal">
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
                    <li class=>
                        <a href="../view/list_reservation.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Réservations</p>
                        </a>
                    </li>
                    <li class=>
                        <a href="../view/listEvent.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Evènements</p>
                        </a>
                    </li>
                    <li class=>
                        <a href="../view/listReservation.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Réservations_E</p>
                        </a>
                    </li>
                    <li class=>
                        <a href="../view/listContact.php">
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
        <p>Notifications <?php echo ($numNotifications > 0) ? '<span class="badge badge-danger">' . $numNotifications . '</span>' : ''; ?></p>
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
                            <a class="navbar-brand" href="#pablo">Liste Des Blogs</a>
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

                            button.custom-link {
                                color: white;
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
                            button.custom-link:hover {
                                background-color: black;
                                /* Changement de couleur de fond au survol */
                                color: pink;
                                /* Changement de couleur de texte au survol */
                                box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.7);
                                /* Ombre plus prononcée au survol */
                            }

                            /* Style du champ de recherche */
                            .input-group {
                                margin-bottom: 0;
                            }

                            /* Style du bouton de recherche */
                            .btn-primary {
                                margin-left: 10px;
                            }

                            /* Style du champ de recherche avec une largeur réduite */
                            .search-input {
                                width: 450px;
                                /* Ajustez la largeur selon vos besoins */
                            }

                            .card.card-plain:nth-child(2) {
                                margin-bottom: 10px;
                                /* Réduit la marge inférieure de la deuxième carte */
                            }

                            .card.card-plain:nth-child(3) {
                                margin-top: 10px;
                                /* Réduit la marge supérieure de la troisième carte */
                            }
                        </style>

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
                </nav>
                <!-- End Navbar -->



            </div>
            <div id="backOfficeData">
            <div class="container">
                <div class="col-md-12">
                    <div class="card card-plain" id="invoice">
                        <div class="d-flex justify-content-between align-items-center pr-4 pl-4 mb-4">
                            <div class="card-header">

                                <h4 class="card-title"> Liste des Blogs</h4>
                                <p class="category"> Here is a subtitle for this table</p>
                            </div>
                            <div class="input-group search-input">
                                <input type="text" class="form-control" id="searchInputBlogs" placeholder="Rechercher...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" onclick="searchTableBlogs(event)">Rechercher</button>
                                </div>
                            </div>
                            <a href="../view/addPays.php" class="addButton"><i class="fa-solid fa-plus"></i></a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="tableBlogs">
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
                                        <th>
                                            Continent
                                        </th>
                                        <th>Likes</th>
                                        <th>Dislikes</th>

                                        <th>
                                            Actions
                                        </th>
                                        
                                        <th>
                                            Commentaires
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
                                            echo "<td>" . $pays['Continent'] . "</td>";
                                            echo "<td>" . $pays['likes'] . "</td>";  // Affichage des likes
                                            echo "<td>" . $pays['dislikes'] . "</td>" ?>
                                            <td align="center">
                                                <a href="../view/editPays.php?id=<?php echo $pays['id']; ?>">
                                                    <img src="../assets/img/editer.png" alt="Update" class="btn-icon" width="50" height="50">
                                                </a>
                                                <a href="../view/deletePays.php?id=<?php echo $pays['id']; ?>">
                                                    <img src="../assets/img/delete.png" alt="Delete" class="btn-icon" width="55" height="55">
                                                </a>
                                            </td>
                                            <td align="center">
                        
                                                        <a href="../view/Commentaires.php?id=<?php echo $pays['id']; ?>">
                                                             <img src="../assets/img/Commentaire.png" alt="Commentaires" class="btn-icon" width="55" height="55">
                                                         </a>
                                            </td>



                                        <?php



                                            echo "</tr>";
                                        }
                                        ?>

                                    </tbody>
                                </table>
                                <script>
                                    function searchTableBlogs(event) {
                                        event
                                            .preventDefault(); // Empêcher le comportement par défaut du bouton de recherche
                                        var input, filter, table, tr, td, i, txtValue;
                                        input = document.getElementById("searchInputBlogs");
                                        filter = input.value.toUpperCase();
                                        table = document.getElementById(
                                            "tableBlogs"); // Assurez-vous que l'ID de votre table est correct
                                        tr = table.getElementsByTagName("tr");
                                        for (i = 0; i < tr.length; i++) {
                                            td = tr[i].getElementsByTagName("td")[
                                                2]; // Assurez-vous que l'index de la colonne est correct
                                            if (td) {
                                                txtValue = td.textContent || td.innerText;
                                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                    tr[i].style.display = "";
                                                } else {
                                                    tr[i].style.display = "none";
                                                }
                                            }
                                        }
                                    }
                                </script>
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
                                            borderWidth: 8,
                                            data: <?php echo json_encode($percentagesLikes) ?>,
                                        }, {
                                            label: 'Pourcentage d\'insatisfaction (dislikes)',
                                            backgroundColor: 'rgba(255, 99, 132, 0.7)',
                                            borderColor: 'rgba(255, 99, 132, 1)',
                                            borderWidth: 8,
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
                                                        size: 14 // Augmentez la taille de la police
                                                    }
                                                }
                                            },
                                            x: {
                                                ticks: {
                                                    color: 'black',
                                                    font: {
                                                        weight: 'bold',
                                                        size: 14 // Augmentez la taille de la police
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
                                <h4 class="card-title"> Liste des Descriptions des Blogs</h4>
                                <p class="category"> Here is a subtitle for this table</p>
                            </div>
                            <div class="input-group search-input">
                                <input type="text" class="form-control" id="searchInputDescriptions" placeholder="Rechercher...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" onclick="searchTableDescriptions(event)">Rechercher</button>
                                </div>
                            </div>

                            <a href="../view/addDescription.php" class="addButton"><i class="fa-solid fa-plus"></i></a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="tableDescriptions">
                                    <thead class="">
                                        <th>Nom Pays</th>
                                        <th>Capitale</th>
                                        <th>Climat</th>
                                        <th>Langue</th>
                                        <th>Monnaie</th>
                                        <th>Attractions_touristiques</th>
                                        <th>Activites</th>
                                        <th>Actions</th>
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
                                                    <img src="../assets/img/editer.png" alt="Update" class="btn-icon" width="50" height="50">
                                                </a>
                                                <a href="../view/deleteDescription.php?id=<?php echo $desc['id']; ?>">
                                                    <img src="../assets/img/delete.png" alt="Delete" class="btn-icon" width="55" height="55">
                                                </a>
                                            </td>

                                        <?php
                                            echo "</tr>";
                                        }
                                        ?>

                                    </tbody>
                                </table>
                                <script>
                                    function searchTableDescriptions(event) {
                                        event
                                            .preventDefault(); // Empêcher le comportement par défaut du bouton de recherche
                                        var input, filter, table, tr, td, i, txtValue;
                                        input = document.getElementById("searchInputDescriptions");
                                        filter = input.value.toUpperCase();
                                        table = document.getElementById(
                                            "tableDescriptions"); // Assurez-vous que l'ID de votre table est correct
                                        tr = table.getElementsByTagName("tr");
                                        for (i = 0; i < tr.length; i++) {
                                            td = tr[i].getElementsByTagName("td")[
                                                0]; // Utiliser l'index 0 pour la première colonne
                                            if (td) {
                                                txtValue = td.textContent || td.innerText;
                                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                    tr[i].style.display = "";
                                                } else {
                                                    tr[i].style.display = "none";
                                                }
                                            }
                                        }
                                    }
                                </script>

                            </div>
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