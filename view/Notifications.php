<?php
include '../config.php';
include '../controller/PaysC.php';
include '../controller/CommentaireC.php';

$PaysC = new PaysC();
$Pays = $PaysC->listPays();
$CommentaireC = new CommentaireC();
$newCommentsNotifications = $CommentaireC->getNewCommentsNotifications();
$numNotifications = count($newCommentsNotifications);



?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Notifications </title>
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
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
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
                    <li class=>
                        <a href="../view/dashboard.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Blogs</p>
                        </a>
                    </li>
                   
          <li class="active ">
          <a href="../view/Notifications.php">
        <i class="now-ui-icons ui-1_bell-53"></i>
        <p>Notifications <?php echo ($numNotifications > 0) ? '<span class="badge badge-danger">' . $numNotifications . '</span>' : ''; ?></p>
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
            <a class="navbar-brand" href="#pablo">Notifications</a>
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
      <div class="panel-header">
        <div class="header text-center">
          <h2 class="title">Notifications</h2>
        </div>
      </div>
      <div class="content">
    <div class="notifications" style="margin-top: 20px;">
        <div class="search-container">
            <input type="text" id="search-input" class="search-input" placeholder="Rechercher par nom de pays...">
        
        </div>
        <?php $counter = 0; foreach ($newCommentsNotifications as $notification) :?>
            <div class="notification-item" id="notification-<?php echo $counter;?>">
                <button class="btn btn-danger btn-sm delete-notification" data-index="<?php echo $counter;?>" style="float: right;">
                    <img src="../assets/img/delete.png" alt="Delete" class="btn-icon" width="20" height="20">
                </button>
                <p class="notification-title">- Nouveau commentaire de <strong><?php echo ucfirst(strtolower($notification['nom'])). ' '. ucfirst(strtolower($notification['prenom']));?></strong> sur le Blog <a href="../view/Commentaires.php?id=<?php echo $notification['id_pays'];?>"> <?php echo ucfirst(strtolower($notification['NomP']));?> </a></strong></p>
                <p class="notification-date" style="font-size: 12px;"><?php echo $notification['elapsed_time'];?></p>

            </div>
        <?php $counter++; endforeach;?>
    </div>
    <style>
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 60%;
            max-width: 300px; /* Limitez la largeur maximale du champ de recherche */
            margin-right: 10px;
        }

        .search-icon {
            font-size: 18px;
            color: #666;
            cursor: pointer;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Recherche par nom de pays
            document.getElementById("search-input").addEventListener("input", function() {
                var searchTerm = this.value.trim().toLowerCase();
                var notificationItems = document.querySelectorAll(".notification-item");

                notificationItems.forEach(function(item) {
                    var countryName = item.querySelector(".notification-title").innerText.toLowerCase();
                    if (countryName.includes(searchTerm)) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            });

            // Supprimer une notification
            document.querySelectorAll(".delete-notification").forEach(function(button) {
                button.addEventListener("click", function() {
                    var index = button.dataset.index;
                    // Supprimez la notification de l'interface utilisateur
                    document.getElementById("notification-" + index).remove();
                    // Mettez à jour le nombre de notifications
                    var notificationCounter = document.getElementById("notification-counter");
                    var currentCount = parseInt(notificationCounter.innerText);
                    if (!isNaN(currentCount) && currentCount > 0) {
                        notificationCounter.innerText = currentCount - 1;
                    }
                });
            });
        });
    </script>
</div>



    </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Adventure Awaits
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
 
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
