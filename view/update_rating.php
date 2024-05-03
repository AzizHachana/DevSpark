<?php
include '../controller/EventC.php'
$sql = 'UPDATE events SET rating = :rating WHERE id = :id';
$rating = $_POST['rating'];

$db = config::getConnexion();
$query = $db->prepare($sql);
$query->bindParam(':rating', $rating);
?>
