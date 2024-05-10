<!-- like.php -->
<?php
include "../controller/HotelC.php";

if (isset($_POST["likes"]) && isset($_POST["id"])) {
    $id = $_POST["id"];
    $hotelC = new HotelC();
    $hotelC->getLikesCount($id);
    header('Location: ../examples/dashboard.php');
}
?>

<!-- dislike.php -->
<?php
include "../controller/instrumentsC.php";

if (isset($_POST["dislikes"]) && isset($_POST["id"])) {
    $id = $_POST["id"];
    $Pays = new PaysC();
    $Pays->getDislikesCount($id);
    header('Location: ../examples/dashboard.php');
}
?>