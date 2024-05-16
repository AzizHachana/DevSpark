<?php
//include '../config.php' ;
include '../controller/unityuserU.php' ;
include '../controller/cGraph.php';
    session_start();
// Vérifie si l'utilisateur est connecté en vérifiant la présence de son identifiant dans la session



$c = new unityuserU();
$tab = $c->listeUnityusers();


$eventsPerPage = 5; // Nombre d'événements par page
// Vérifie si $tab est un tableau valide et s'il contient des éléments
if (is_array($tab) && !empty($tab)) {
  $totalEvents = count($tab); // Nombre total d'événements
} else {
  $totalEvents = 0; // Aucun événement trouvé
}
// Nombre total d'événements
$totalPages = ceil($totalEvents / $eventsPerPage); // Nombre total de pages
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Page actuelle, par défaut la première page

$start = ($page - 1) * $eventsPerPage;
$end=$start+$eventsPerPage; // Index de début pour extraire les événements de la page actuelle
$tab = $tab->fetchAll(PDO::FETCH_ASSOC); // Extraction des données de l'objet PDOStatement
$tab = array_slice($tab, $start, $eventsPerPage); // Extraire les événements de la page actuelle
// Extraire les événements de la page actuelle

$query = "SELECT unityuser.sexe AS client_sexe, COUNT(*) AS total
        FROM unityuser
        GROUP BY unityuser.sexe";
      
          $statement2  = $pdo->prepare($query);
          $statement2 ->execute();
          $client_stats =  $statement2 ->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  
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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('hot2.jpg'); /* Remplacez 'background.jpg' par le chemin de votre image de fond */
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            width: 90%;
            margin: 20px auto;
        }

        .title-container {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 15px;
            background-color: rgba(255, 255, 255, 0.8); /* Fond de la boîte de titre */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre douce */
        }

        .title {
            font-size: 32px;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .user-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .hotel-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 10px;
            overflow: hidden;
            background-color: #fff; /* Fond de la carte de l'hôtel */
            width: 300px; /* Largeur de chaque carte */
            display: flex;
            flex-direction: column; /* Pour empiler l'image et les informations */
        }

        .hotel-image {
            width: 100%;
            height: auto;
            border-radius: 8px 8px 0 0; /* Coins arrondis seulement en haut */
        }

        .hotel-info {
            padding: 15px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9); /* Fond blanc pour les informations uniquement */
        }

        .hotel-info-item {
            margin-bottom: 5px;
        }

        .hotel-info-label {
            font-weight: bold;
        }

        .hotel-name {
            color: #000000;
            font-weight: bold; /* Couleur bleue pour le nom de l'hôtel */
        }

        .availability-button {
            background-color: #4a90e2; /* Couleur rouge pour le bouton */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 16px;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .availability-button:hover {
            background-color: #ff6b6b; /* Changement de couleur au survol */
        }
    </style>
</head>

<body class="Liste Des Users">
    
    <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
      <div class="logo">
       
        <a href="http://www.learnes.com" class="simple-text logo-normal">
          Adventure Awaits 
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
                        <a href="../view/listEvent.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Evènements</p>
                        </a>
                    </li>
                    <li class=>
                        <a href="../view/ListReservation.php">
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
            <a class="navbar-brand" href="#pablo">Liste Des Users</a>
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
              <input type="text" id="searchInput" placeholder="Search for user...">
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
                    <h5 class="card-category">User List</h5>
                    <th class="text-center">ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Mot de passe  </th>
                    <th>tel</th>
                    <th>tache</th>
                    <th>sexe</th>
                    <th>etat</th>
                    <th>Action</th>
              
                    
                    
                  </tr>
                </thead>
                <tbody>
           <!-- PHP Loop to display data -->              
<tbody>
    <!-- PHP Loop to display data -->
    <?php foreach ($tab as $unityuser) { ?>
        <tr>
            <td class="text-center"><?= $unityuser['id']; ?></td>
            <td><?= $unityuser['nom']; ?></td>
            <td><?= $unityuser['prenom']; ?></td>
            <td><?= $unityuser['email']; ?></td>
            <td><?= $unityuser['mdp']; ?></td>
            <td><?= $unityuser['tel']; ?></td>
            <td><?= $unityuser['tache']; ?></td>
            <td><?= $unityuser['sexe']; ?></td>
            <td><?= $unityuser['etat']; ?></td>
            <td>
                <a href="../view/editUser.php?id=<?= $unityuser['id']; ?>">Modifier</a>
                <a href="#" onclick="confirmDelete(<?= $unityuser['id']; ?>)">Delete</a>
                <div class="d-flex justify-content-between mt-3">
                                <!-- Bouton Like -->
                                <button class=" like-btn" data-id="<?php echo $unityuser['id']; ?>">
                                    <i class=""></i>Bloquer
                                </button>
                                <span class="like-count"><?php echo $unityuser['etat']; ?></span>
      
            </td>
        </tr>
        
    <?php } ?>
    <!-- End of PHP Loop -->
    
</tbody>
 <!-- Pagination -->
<div class="row mt-5">
    <div class="col text-center">
        <div class="block-27">
            <ul>
                <!-- Bouton "Précédent" -->
                <?php if ($page > 1): ?>
                    <li><a href="listClient.php?page=<?php echo $page - 1; ?>">&lt;</a></li>
                <?php endif; ?>

                <!-- Affichage des numéros de page -->
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li <?php if($i == $page) echo 'class="active"'; ?>>
                        <a href="listClient.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>

                <!-- Bouton "Suivant" -->
                <?php if ($page < $totalPages): ?>
                    <li><a href="listClient.php?page=<?php echo $page + 1; ?>">&gt;</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<!-- ... (previous code) ... -->

<script>
    function confirmDelete(userId) {
        if (confirm('Do you really want to delete this user?')) {
            window.location.href = 'deleteUser.php?id=' + userId;
        }
    }

    $(document).ready(function () {
        // JavaScript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
</script>

                  <!-- End of PHP Loop -->
                </tbody>
              </table>
              <div style="width: 30%; margin: 0 auto;">
              <canvas id="client-chart"></canvas>
             
              </div>
              <div style="width: 30%; margin: 0 auto;">
              <canvas id="client-chart2"></canvas>
             
              </div>
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
                  Learnes
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
  
  <script src="../assets/js/plugins/chartjs.min.js"></script>
 
<script>
    $(document).ready(function () {
      // JavaScript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
    });
  </script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
<script>
  const ctx = document.getElementById('client-chart').getContext('2d');
const clientData = {
    labels: <?php echo json_encode(array_column($client_stats, 'client_sexe')) ?>, // Étiquettes pour les catégories de sexe
    datasets: [{
        label: 'Statistiques selon le sexe des clients',
        data: <?php echo json_encode(array_column($client_stats, 'total')) ?>,
        backgroundColor: [
            'rgba(255, 99, 132, 0.7)', // Couleur pour le sexe masculin
            'rgba(54, 162, 235, 0.7)', // Couleur pour le sexe féminin
            // Ajoutez plus de couleurs au besoin pour d'autres catégories de sexe
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            // Ajoutez plus de couleurs au besoin pour d'autres catégories de sexe
        ],
        borderWidth: 1
    }]
};

const clientConfig = {
    type: 'bar',
    data: clientData,
    options: {
        indexAxis: 'y', // Afficher les barres horizontalement
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        const label = context.dataset.label || '';
                        const value = context.parsed.y || 0;
                        return label + ': ' + value;
                    }
                }
            }
        }
    }
};

new Chart(ctx, clientConfig);
</script>
<script>
    // Fonction pour gérer la recherche et le filtrage des utilisateurs
    function searchUsers() {
        // Récupérer la valeur saisie dans le champ de recherche
        var input = document.getElementById('searchInput');
        var filter = input.value.toUpperCase();
        var table = document.querySelector('.table'); // Sélectionner la table des utilisateurs
        var rows = table.getElementsByTagName('tr');

        // Parcourir toutes les lignes de la table
        for (var i = 0; i < rows.length; i++) {
            var nameColumn = rows[i].getElementsByTagName('td')[1]; // Colonne contenant le nom de l'utilisateur
            if (nameColumn) {
                var nameText = nameColumn.textContent || nameColumn.innerText;
                if (nameText.toUpperCase().indexOf(filter) > -1) {
                    rows[i].style.display = ''; // Afficher la ligne si le nom correspond à la recherche
                } else {
                    rows[i].style.display = 'none'; // Masquer la ligne sinon
                }
            }
        }
    }

    // Ajouter un écouteur d'événements pour déclencher la recherche à chaque saisie dans le champ de recherche
    document.getElementById('searchInput').addEventListener('input', searchUsers);
</script>
<script src="../js/jquery.min.js"></script>
     <script src="../js/jquery-migrate-3.0.1.min.js"></script>
     <script>
   document.addEventListener('DOMContentLoaded', function() 
   {
    document.querySelectorAll('.like-btn').forEach(function(button) 
    {
        button.addEventListener('click', function() 
        {
            var id = this.getAttribute('data-id'); // Vérifiez si id est correct ici
            console.log("ID User:", id); // Affichez l'ID de l'hôtel dans la console
            var countSpan = this.nextElementSibling;

            // Désactiver le bouton après le clic
            this.disabled = true;
            this.classList.add('clicked');

            fetch('/view/Bloquer.php', {
                method: 'POST',
                body: JSON.stringify({ id: id }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.text())
            .then(data => {
                // Mettre à jour le nombre de likes affiché
                countSpan.textContent = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
  });
</script>

</body>

</html>

