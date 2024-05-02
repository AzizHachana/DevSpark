<?php
include $_SERVER["DOCUMENT_ROOT"] . '/vacation/controller/unityuserU.php';
include $_SERVER["DOCUMENT_ROOT"] . '/vacation/model/unityuser.php';
$error = "";
$unityuser = null;
$unityuserU = new unityuserU();
$unityuser = $unityuserU->showUnityuser($_SESSION['id']);

// create client

// create an instance of the controller


if (

    isset($_POST["mdp"]) &&
    isset($_POST["mdpn"]) &&
    isset($_POST["mdprn"])
) {
    if (
        !empty($_POST['mdp']) &&
        !empty($_POST['mdpn']) &&
        !empty($_POST["mdprn"]) 

    ) {

        if($_POST['mdp']==$unityuser['mdp'] && $_POST['mdpn']==$_POST['mdprn']){
        $unityuser = new unityuser(
            $unityuser['nom'],
            $unityuser['prenom'],
            $unityuser['email'],
            $_POST['mdpn'],
            $unityuser['tel'],
            $unityuser['tache'],
            $unityuser['sexe'],
            $unityuser['etat']
        );

        $unityuserU->updateUnityuser($unityuser, $_SESSION['id']);
        }

        //header('Location: listeUnityusers.php');
        //exit();
    } else {
        $error = "Missing information";
    }
}
    if ($_SERVER['SCRIPT_FILENAME'] == $_SERVER["DOCUMENT_ROOT"] . "/vacation/Front/AccountUsermdp.php") {

        ?>
        <form action="" method="POST">
            <div class="form-group">
                <label class="form-label">Current password</label>
                <input type="password" class="form-control" name="mdp">
            </div><br>
            <div class="form-group">
                <label class="form-label">New password</label>
                <input type="password" class="form-control" name="mdpn">
            </div><br>
            <div class="form-group">
                <label class="form-label">Repeat new password</label>
                <input type="password" class="form-control" name="mdprn">
            </div><br>
          
            <div class="text-right mt-3">
                <input type="submit" value="Save changes" class="btn btn-primary" />&nbsp;
                <input type="reset" value="Cancel" class="btn btn-default" />
            </div>
        </form>
        <?php
    }
    ?>

