<?php
include_once '../config.php';

if (isset($_POST['id'], $_POST['rating'])) {
    $eventId = $_POST['id'];
    $rating = $_POST['rating'];

    // Update the event rating in the database
    $sql = "UPDATE events SET rating = :newRating, num_ratings = num_ratings + 1 WHERE id = :eventId";
    $query = $pdo->prepare($sql);
    $query->execute(['newRating' => $rating, 'id' => $eventId]);

    // Redirect back to the page after updating the rating
    header('Location: ../view/eventFront.php');
    exit;
}
?>