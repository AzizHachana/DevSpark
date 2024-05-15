<!-- like.php -->
<?php
include "../controller/PaysC.php";

if (isset($_POST["likes"]) && isset($_POST["id"])) {
    $id = $_POST["id"];
    $Pays = new PaysC();
    $Pays->getLikesCount($id);
    header('Location: ../view/dashboard.php');
}
?>

<!-- dislike.php -->
<?php
include "../controller/PaysC.php";

if (isset($_POST["dislikes"]) && isset($_POST["id"])) {
    $id = $_POST["id"];
    $Pays = new PaysC();
    $Pays->getDislikesCount($id);
    header('Location: ../view/dashboard.php');
}
?>
