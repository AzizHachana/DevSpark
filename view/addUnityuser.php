<?php
include $_SERVER["DOCUMENT_ROOT"] . '/vacation/controller/unityuserU.php';
include $_SERVER["DOCUMENT_ROOT"] . '/vacation/model/unityuser.php';

$unityuser = NULL;
$unityuserU= new unityuserU();

$error="";
$pdo = Config::getConnexion(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Vérifier si l'e-mail existe déjà
    $queryCheckEmail = $pdo->prepare("SELECT * FROM unityuser WHERE email = ?");
    $queryCheckEmail->execute([$email]);
    $resultCheckEmail = $queryCheckEmail->rowCount();

    if ($resultCheckEmail > 0) {
        $error = "<span class='text-danger'>L'adresse e-mail existe déjà. Veuillez choisir une autre.</span>";
    } 
    else {

if (
    isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['tel']) && isset($_POST['tache'])&& isset($_POST['sexe']) && isset($_POST['etat']) 
   ) 
{
    if (!empty($_POST['nom']) && !empty($_POST['prenom'])&& !empty($_POST['email'])&& !empty($_POST['mdp'])&& !empty($_POST['tel'])&& !empty($_POST['sexe'])&& !empty($_POST['etat'])) {
        $unityuser = new unityuser($_POST['nom'], $_POST['prenom'],$_POST['email'],$_POST['mdp'],$_POST['tel'],$_POST['tache'],$_POST['sexe'],$_POST['etat']);
        $unityuserU->addUnityuser($unityuser);
        //header('location:listeUnityusers.php');
    } else {
        $error = "Informations manquantes";
    }
}
    }}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unityuser</title>
</head>
<body>
    <?php 
    if($_SERVER['SCRIPT_FILENAME'] == $_SERVER['DOCUMENT_ROOT'] ."/vacation/Admin/pages/samples/register.php"){
        ?>
    
    <?php 
    }
        ?>

    <hr>

    <form action="" method="POST" id="votre-formulaire">

  
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name='nom'class="form-control p_input">
                  </div>

                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name='prenom'class="form-control p_input">
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name ='email' class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name='mdp' class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name='tel' class="form-control p_input">
                  </div>
                  

                  <div class="form-group">
                    <label>do you want to register as :</label>
                    <div>
                    <?php 
                ///if(a==a){
                        ?>
                        <label>
                        <input type="radio" name="tache" value="1">
                        Admin
                      </label>
                      <?php 
                    //    }
                        ?>
                      <label>
                        <input type="radio" name="tache" value="2">
                        Client
                      </label>  
                    </div>
                    <div class="form-group">
                    <label>do you want to register as :</label>
                    <div>
                    <?php 
                ///if(a==a){
                        ?>
                        <label>
                        <input type="radio" name="sexe" value="Homme">
                        Homme
                      </label>
                      <?php 
                    //    }
                        ?>
                      <label>
                        <input type="radio" name="sexe" value="Femme">
                        Femme
                      </label>  
                  </div>
                  <div class="form-group">
                    <label></label>
                    <div>
                    <?php 
                ///if(a==a){
                        ?>
                        <label>
                        <input type="radio" name="etat" value="1">
                        Im not a robot
                      </label>
                      <?php 
                    //    }
                        ?>
                    
                    </div>

                  
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>                    
                    <div class="error-message">
                        <?php echo $error; ?>
                    </div>
                    <a href="/vacation/Admin/pages/samples/login.php">Login </a> 
                </div>
                  </form>

    <script>
      // script.js
// Add validation functions for each field
function validateForm() {
    var nom = document.getElementsByName('nom')[0].value;
    var prenom = document.getElementsByName('prenom')[0].value;
    var email = document.getElementsByName('email')[0].value;
    var mdp = document.getElementsByName('mdp')[0].value;
    var tel = document.getElementsByName('tel')[0].value;
    var tache = document.querySelector('input[name="tache"]:checked');
    var sexe = document.querySelector('input[name="sexe"]:checked');
    var etat = document.querySelector('input[name="etat"]:checked');
    
    
    



    if (nom === "") {
        alert("Please enter a name");
        return false;
    }

    if (prenom === "") {
        alert("Please enter a last name");
        return false;
    }

    if (email === "") {
        alert("Please enter an email");
        return false;
    }

    if (mdp === "") {
        alert("Please enter a password");
        return false;
    }

    if (tel === "") {
        alert("Please enter a phone number");
        return false;
    }
   

    if (tache === null) {
        alert("Please select a registration type");
        return false;
    }
    if (etat === null) {
        alert("Please select to confirm you re not a robot");
        return false;
    }

    return true;
}

// Add event listener to the form
var form = document.getElementById('votre-formulaire');
form.addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the form from submitting by default
    if (validateForm()) {
        form.submit(); // If the form is valid, submit it
    }
});

    </script>
</body>
</html>