<?php
include '../controller/ReservationC.php';
include '../controller/HotelC.php';

$reservationC = new ReservationC();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['hotel']) && isset($_POST['search'])) 
    {
    $id = $_POST['hotel'];
    $list2 = $reservationC->affichereservation($id);
 }
}
$hoteles = $reservationC->afficherhotel();
// Traitement du formulaire
//$professeurs = $professeurC->listProfesseur();
$reservationC = new ReservationC();
$list = $reservationC->listreservation();
//$reservations = $reservationC->listreservations();
if ($list) 
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Hôtels</title>
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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    
    
      <style>
    .title {
  font-size: 2rem;
  font-weight: bold;
  text-align: center;
  margin-top: 2rem;
  margin-bottom: 1rem;
}

.search-form {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  align-items: center;
  margin-bottom: 2rem;
}

.search-form label {
  flex-basis: 100%;
  font-weight: bold;
}

.search-form select,
.search-form button {
  flex-basis: calc(100% - 8rem);
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 1rem;
  font-weight: normal;
  cursor: pointer;
}

.search-form button {
  background-color: #4CAF50;
  color: white;
  border-color: #4CAF50;
}

.subtitle {
  font-size: 1.5rem;
  font-weight: bold;
  text-align: center;
  margin-bottom: 1rem;
}
.btn {
  display: inline-block;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  border-radius: 4px;
  border: 1px solid #ccc;
  background-color: #4CAF50;
  color: #fff;
  transition: background-color 0.3s ease;
}

.form-label1 {
  display: block;
  margin-top: 30px;
  font-size: 1.2rem;
  font-weight: bold;
  color: #333;
}

.btn:hover {
  background-color: #3e8e41;
}

.btn-primary {
  color: #fff;
  background-color: #4CAF50;
  border-color: #4CAF50;
}
.table-container {
  margin-left: -0rem;
}
    
</style>


</head>


<body class="user-profile">
    <div class="wrapper ">
        <div class="sidebar" data-color="yellow">
            <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
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
                    <li class="active">
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
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-orange navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Liste Des Réservtaions</a>
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
        <div class="container">
                <div class="col-md-12">
                    <div class="card card-plain" id="invoice">
                        <div class="d-flex justify-content-between align-items-center pr-4 pl-4 mb-4">
                            <div class="card-header">
      
                    <h1 class="title">Recherche des reservations par hotel</h1>
                    <form class=""  action="" method="POST">
                        <label for="hotel">  <div class="form-label1" style="margin-top: 30px; margin-left: 20px;" > Sélectionnez un hotel : </label>
                        <select name = "hotel" id="hotel"> 
                    <?php foreach ($hoteles as $hotel) {
                        ?>
                        <option value="<?php echo $hotel['id']?>"><?php echo $hotel['Nom']?></option>
                <?php
                }
                ?>
                </select>
                
                    <input type="submit" value="Rechercher" name="search">
                        </form>
                    <?php 
                    if (isset($list2)) { 
                        ?>
                    <br>
                    
                    <h2  class="subtitle" style="margin-top: 40px;">Reservation correspondants au hotel sélectionné : </h2>
        <div class="table-container" style="margin-top: 50px;">
    
       

      </div>
      
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <table class="table">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Id_user
                                        </th>
                                        <th>
                                            Date_D
                                        </th>
                                        <th>
                                            Date_A
                                        </th>
                                        <th>Adultes</th>
                                        <th>Enfants</th>

                                        <th>
                                           Chambres
                                        </th>
                                        
                                        <th>
                                        Actions
                                        </th>
                                    </thead>
                                    <tbody>
            <?php foreach ($list2 as $reservation):?>
            <tr>
              <td class="text-center"><?= $reservation['id'];?></td>
              <td class="text-center"><?= $reservation['user_id'];?></td>
              <td><?= $reservation['DDP'];?></td>
              <td><?= $reservation['DDA'];?></td>
              <td><?= $reservation['Adultes'];?></td>
              <td><?= $reservation['Enfants'];?></td>
              <td><?= $reservation['Chambres'];?></td>
              <td class="text-center">
                <form action="edit_reservation.php" method="get">
                  <input type="hidden" name="id" value="<?php echo $reservation['id'];?>">
                  <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fas fa-edit"></i>
                  </button>
                </form>
              </td>
              <td class="text-center">
                            <form action="deletereservation.php" method="get">
                                <input type="hidden" name="id" value="<?php echo $reservation['id']; ?>">
                                <button type="submit"  class="btn btn-sm btn-primary">
                                <i class="fas fa-trash"></i>
                              
                                </button>
                            </form>
                           
                        </td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</form>


 <script>
        function filterHotels() {
            // code to filter the hotels based on the input value
        }
    </script>
</body>
    
</html>

    



<?php
} else {
    echo "<center><h2>Aucun hotel trouvé.</h2></center>";
}
}?>

