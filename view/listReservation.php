<?php
 // Inclure le fichier config.php
include '../controller/ReservationC.php';
$c = new ReservationC();
$tab = $c->listReservation();

// Vérification si un fichier image a été envoyé

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
  <style>
       
    </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
      <div class="logo">
        <a href="http://www.learnes.com" class="simple-text logo-mini">
          AD
        </a>
        <a href="http://www.learnes.com" class="simple-text logo-normal">
          AdventureAwaits
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="../view/addEvent.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Add Event</p>
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
            <a class="navbar-brand" href="#pablo">Dashboard</a>
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
              </            </form>
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
      <div class="panel-header panel-header-lg">
        <div class="canvas" id="bigDashboardChart"></div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <table class="table">
                <thead>
                  <tr>
                    <h5 class="card-category">Events List</h5>
                    <th class="text-center">ID</th>
                    <th>Nom</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Image</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- PHP Loop to display data -->
                  <?php foreach ($tab as $event) { ?>
                    <tr>
                      <td class="text-center"><?= $event['id']; ?></td>
                      <td><?= $event['Nom']; ?></td>
                      <td><?= $event['DateE']; ?></td>
                      <td><?= $event['Lieu']; ?></td>
                      <td><?= $event['DescriptionE']; ?></td>
                      <td><?= $event['Prix']; ?></td>
                      <td><img src=<?php echo ("./images/uploads/".$event['image']); ?> alt="" style="width:50px;height:50px;border:2px solid gray;border-radius:8px;object-fit:cover"></td>

                      <td>
                <a href="../view/updateEvent.php?id=<?= $event['id']; ?>">Modifier</a>
                <a href="../view/deleteEvent.php?id=<?= $event['id']; ?>">Supprimer</a>
            </td>
                        <!-- Suppression du bouton plus -->
                      </td>
                    </tr>
                  <?php } ?>
               
                  <!-- End of PHP Loop -->
                </tbody>
              </table>
            </div>
            <div class="card">
              <table class="table">
                <thead>
                  <tr>
                    <h5 class="card-category">Reservation List</h5>
                    <th class="text-center">ID</th>
                    <th>Date check in</th>
                    <th>Date check out</th>
                    <th>Status</th>
                    <th>Nombre Persone</th>
                    <th>Prix</th>
                    <th>Image</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- PHP Loop to display data -->
                  <?php foreach ($tab as $event) { ?>
                    <tr>
                      <td class="text-center"><?= $reservation['id']; ?></td>
                      <td><?= $reservation['Nom']; ?></td>
                      <td><?= $reservation['DateE']; ?></td>
                      <td><?= $reservation['Lieu']; ?></td>
                      <td><?= $reservation['DescriptionE']; ?></td>
                      <td><?= $reservation['Prix']; ?></td>

                      <td>
                <a href="../view/updateEvent.php?id=<?= $event['id']; ?>">Modifier</a>
                <a href="../view/deleteEvent.php?id=<?= $event['id']; ?>">Supprimer</a>
            </td>
                        <!-- Suppression du bouton plus -->
                      </td>
                    </tr>
                  <?php } ?>
               
                  <!-- End of PHP Loop -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.learnes.com">
                  AdventureAwaits
                </a>
              </li>
              <li>
                <a href="http://presentation.learnes.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.learnes.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a
              href="https://www.learnes.com" target="_blank">Learnes</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
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
  <script>
    $(document).ready(function () {
      // JavaScript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
    });
  </script>
</body>

</html>
