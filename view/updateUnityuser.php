<?php
include $_SERVER["DOCUMENT_ROOT"] . '/vacation/controller/unityuserU.php';
include $_SERVER["DOCUMENT_ROOT"] . '/vacation/model/unityuser.php';
$error = "";

// create client
$unityuser = null;
// create an instance of the controller
$unityuserU = new unityuserU();

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
    ) {
        $unityuser = new unityuser(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['mdp'],
            $_POST['tel'],
            $_POST['tache'],
            $_POST['sexe'],
            $_POST['etat']
        );

        $unityuserU->updateUnityuser($unityuser, $_SESSION['id']);

        //header('Location: listeUnityusers.php');
        //exit();
    } else {
        $error = "Missing information";
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
<?php
    if($_SERVER['SCRIPT_FILENAME'] == $_SERVER["DOCUMENT_ROOT"] . "/vacation/Admin/pages/samples/updateUsers.php"){

    if (isset($_POST['id'])) {
        $unityuser = $unityuserU->showUnityuser($_POST['id']);
    ?>
    <button><a href="/vacation/Admin/pages/samples/ListeUsers.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>



        <form action="" method="POST">
            <table>

                <tr>
                    <td><label for="nom">nom :</label></td>
                    <td>
                        <input type="text" id="nom" name="nom" value="<?php echo $unityuser['nom'] ?>" />
                        <span id="erreurNom" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="prenom">prenom :</label></td>
                    <td>
                        <input type="text" id="prenom" name="prenom" value="<?php echo $unityuser['prenom'] ?>" />
                        <span id="erreurPrenom" style="color: red"></span>
                    </td>
                </tr>
                
                <tr>
                    <td><label for="email">email :</label></td>
                    <td>
                        <input type="text" id="email" name="email" value="<?php echo $unityuser['email'] ?>" />
                        <span id="erreurEmail" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="mdp">mdp :</label></td>
                    <td>
                        <input type="int" id="mdp" name="mdp" value="<?php echo $unityuser['mdp'] ?>" />
                        <span id="erreurmdp" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="tel">tel :</label></td>
                    <td>
                        <input type="int" id="tel" name="tel" value="<?php echo $unityuser['tel'] ?>" />
                        <span id="erreurtel" style="color: red"></span>
                    </td>
                </tr>
                
                <tr>
                    <td><label for="tache">tache:</label></td>
                    <td>
                        <input type="text" id="tache" name="tache" value="<?php echo $unityuser['tache'] ?>" />
                        <span id="erreurtache" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="sexe">sexe:</label></td>
                    <td>
                        <input type="text" id="sexe" name="sexe" value="<?php echo $unityuser['sexe'] ?>" />
                        <span id="erreursexe" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="etat">etat:</label></td>
                    <td>
                        <input type="text" id="etat" name="etat" value="<?php echo $unityuser['etat'] ?>" />
                        <span id="erreurtache" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Update" class="orange-button/></td>
                </tr>
            </table>
        </form>

    <?php
    } else {
        echo "Invalid request.";
    }
    }
    if($_SERVER['SCRIPT_FILENAME'] == $_SERVER["DOCUMENT_ROOT"] . "/vacation/Front/AccountUser.php"){
        $unityuser = $unityuserU->showUnityuser($_SESSION['id']);

?>
        <form action="" method="POST">
            <div class="form-group">
                <label class="form-label">Nom</label>
                <input type="text" id="nom" name="nom" value="<?php echo $unityuser['nom'] ?>" />
                <span id="erreurNom" style="color: red"></span>            
            </div><br>
            <div class="form-group">
                <label class="form-label">Prenom</label>
                <input type="text" id="prenom" name="prenom" value="<?php echo $unityuser['prenom'] ?>" />
                    <span id="erreurPrenom" style="color: red"></span>            
            </div><br>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="text" id="email" name="email" value="<?php echo $unityuser['email'] ?>" />
                    <span id="erreurEmail" style="color: red"></span>
            </div><br>
            <div class="form-group">
                <label class="form-label">Telephone</label>
                <input type="int" id="tel" name="tel" value="<?php echo $unityuser['tel'] ?>" />
                <span id="erreurtel" style="color: red"></span>
            </div><br>
            
            <div class="form-group">
                <label for="tache">tache:<span style="color: red"><?php echo $unityuser['tache'] ?></span></label>
                <input type="hidden" name="tache" value="<?php echo $unityuser['tache'] ?>"  />&nbsp;
                <label for="sexe">sexe:<span style="color: red"><?php echo $unityuser['sexe'] ?></span></label>
                <input type="hidden" name="sexe" value="<?php echo $unityuser['sexe'] ?>"  />&nbsp;
                <label for="etat">etat:<span style="color: red"><?php echo $unityuser['etat'] ?></span></label>
                <input type="hidden" name="etat" value="<?php echo $unityuser['etat'] ?>"  />&nbsp;
                <input type="hidden" name="mdp" value="<?php echo $unityuser['mdp'] ?>"  />&nbsp

            </div><br>
            <div class="text-right mt-3">
                <input type="submit" value="Save changes" class="btn btn-primary" />&nbsp;
                <input type="reset" value="Cancel" class="btn btn-default" />
            </div>
    </form>
    <?php
    }
    ?>

</body>

</html>