<?php
include '../config.php';

// Prepare the SQL statement
$pdo = new PDO(
  'mysql:host=localhost;dbname=atelierphp',
  'root',
  '',
  [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]
);
try{
    $query = $pdo->prepare('SELECT * FROM reclamation');
    $query->execute();
    $contacts = $query->fetchAll();
}catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    }

    try{
        $query1 = $pdo->prepare('SELECT * FROM reponse');
        $query1->execute();
        $reponses = $query1->fetchAll();
    }catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
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

.small-centered-table {
        width: 200px;
         /* Adjust the width as needed */
        margin-left: auto; /* Start the table from the right */
        margin-right: auto; /* Center the table horizontally */
    }
    .form-container {
  max-width: 500px;
  margin: 0 auto;
  text-align: center;
}

.form-container h1 {
  font-size: 2rem;
  font-weight: bold;
  margin-top: 2rem;
  margin-bottom: 1rem;
}

.form-container h2 {
  font-size: 1.5rem;
  font-weight: bold;
  margin-bottom: 1rem;
}

.form-container form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.form-container label {
  font-weight: bold;
}

.form-container input[type="text"],
.form-container select {
  width: 100%;
  padding: 0.5rem;
  margin: 0.5rem 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 1rem;
}

.form-container button[type="submit"] {
  width: 100%;
  padding: 0.5rem;
  border: none;
  border-radius: 4px;
  background-color: #4CAF50;
  color: white;
  font-size: 1rem;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.form-container button[type="submit"]:hover {
  background-color: #3e8e41;
}

</style>
</head>
<body>
<div class="sidebar" data-color="yellow">
            
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Voyage et Aventures
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
                    <li class="">
                        <a href="../view/listReservation.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Liste Des Réservations_Events</p>
                        </a>
                    </li>
                    <li class="active">
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
                   
                    <li>
                    <a href="../view/Notifications.php">
        <i class="now-ui-icons ui-1_bell-53"></i>
        <p>Notifications </p>
    </a>
                     </li>
            </ul>
        </div>
    </div>
    <div class="table-container" style="margin-top: 50px;">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
    <table class="table table-striped small-centered-table" >
        <tr>
            <th class="text-center">ID Reclamation</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Status</th>
            <th class="text-center">Modify</th>
            <th class="text-center">Delete</th>
            <th class="text-center">Reset</th>
        </tr>
        <tbody id="list2">
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?php echo $contact['id']; ?></td>
                <td><?php echo $contact['name']; ?></td>
                <td><?php echo $contact['email']; ?></td>
                <td><?php echo $contact['subject']; ?></td>
                <td><?php echo $contact['message']; ?></td>
                <td><?php echo $contact['status']; ?></td>
                <td>
                                    <form class="action-form" action="../model/Modify_rec.php" method="post">
                                        <button class="btn" type="submit">Modify</button>
                                        <input type="hidden" name="modify" value="<?php echo $contact['id'];?>">
                                    </form>
                                </td>
                                <td>
                                    <form class="action-form" action="../../model/delete_rec.php" method="post">
                                        <button class="btn" type="submit">Delete</button>
                                        <input type="hidden" name="delete" value="<?php echo $contact['id']; ?>">
                                    </form>
                                </td>
                                <td>
                                    <form class="action-form" action="../../model/reset.php" method="post">
                                        <button class="btn" type="submit">Reset</button>
                                        <input type="hidden" name="reset" value="<?php echo $contact['id']; ?>">
                                    </form>
            </tr>
        <?php endforeach; ?>
    </table>
    </tbody>
    </div>
    </div>
  </div>
</div>

<div class="table-container" style="margin-top: 50px;">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
    <table class="table table-striped small-centered-table" >
        <tr>
            <th class="text-center">ID Reponse</th>
            <th>Reponse</th>
            <th>Id reclamation</th>
            <th class="text-center">Modify</th>
            <th class="text-center">Delete</th>
            <th class="text-center">Send mail</th>
        </tr>
        <tbody id="list2">
        <?php foreach ($reponses as $reponse): ?>
            <tr>
                <td><?php echo $reponse['id_reponse']; ?></td>
                <td><?php echo $reponse['reponse']; ?></td>
                <td><?php echo $reponse['id']; ?></td>
                <td>
                                    <form class="action-form" action="../../model/Modify_rep.php" method="post">
                                        <button class="btn" type="submit">Modify</button>
                                        <input type="hidden" name="modify" value="<?php echo $reponse['id_reponse'];?>">
                                    </form>
                                </td>
                                <td>
                                    <form class="action-form" action="../../model/delete_rep.php" method="post">
                                        <button class="btn" type="submit">Delete</button>
                                        <input type="hidden" name="delete" value="<?php echo $reponse['id_reponse']; ?>">
                                    </form>
                                </td>
                                <td>
                                    <form class="action-form" action="../../controller/mailer/SendMail.php" method="post">
                                        <button class="btn" type="submit">Send mail</button>
                                        <input type="hidden" name="id_rec" value="<?php echo $reponse['id']; ?>">
                                        <input type="hidden" name="reponse" value="<?php echo $reponse['reponse']; ?>">
                                    </form>
            </tr>
        <?php endforeach; ?>
    </table>
    </tbody>
    </div>
    </div>
  </div>
</div>

<div class="form-container">
    <h1>Respond to Reclamation</h1>
    <h2>Enter the details of the reclamation response</h2>
    <form action="../../model/CreateRespond.php" method="post">
        <label for="reponse">Response:</label><br>
        <input type="text" id="reponse" name="reponse" required><br>
        <label for="id">Reclamation ID:</label><br>
        <select id="id" name="id" required>
            <?php foreach ($contacts as $contact): ?>
                <option value="<?php echo $contact['id']; ?>"><?php echo $contact['id']; ?></option>
            <?php endforeach; ?>
        </select><br>
        <button type="submit">Create</button>
    </form> 
</div>


    <!-- JavaScript for handling modify and delete actions -->
    
</body>
</html>


