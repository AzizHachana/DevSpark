<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/vacation/controller/unityuserU.php');
  session_start() ;

$userC = new unityuserU();

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$Email = $_POST['email'];
$password = $_POST['mdp'];
$user = $userC->login($Email,$password);

if (is_array($user)) {
      $_SESSION['id']=$user['id'];
      
      if($user['tache']==1){
      //$url = "/vacation/Admin/pages/samples/ListeUsers.php";//
      $url = 'http://localhost/user/utulisateur/view/listClient.php';
      echo "<script>window.location.replace('$url');</script>";
    //header('Location: http://localhost/user/utulisateur/view/listClient.php'); 
  }
  else if($user['tache']==2){
    if($user['etat']==1)
    {
    $url = "/vacation/view/index copy.html";
    echo "<script>window.location.replace('$url');</script>";
  }
  else{
    $url ="/vacation/Admin/pages/samples/Bloquer.html";
    echo "<script>window.location.replace('$url');</script>";
   }
  }
  else if($user['tache']==3){
    $url = "/vacation/test.php";
    echo "<script>window.location.replace('$url');</script>";
  }
} else {

    $error = "<span class='text-danger'>pseudo ou le mot de passe est incorrect.</span>";

  }
}
/*
function customHashFunction($password) {
    return md5($password);
}*/
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form method = "POST">
                  <div class="form-group">
                    <label>Username or email *</label>
                    <input type="text" name="email" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="mdp"  name="mdp" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="/vacation/view/sendmail.html" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                      <div class="error-message">
                      <?php echo $error; ?>
                      </div>
                  </div>
                  <!--<div class="d-flex">
                    <button class="btn btn-facebook me-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>-->
                  <p class="sign-up">Don't have an Account?<a href="/vacation/Admin/pages/samples/register.php"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>