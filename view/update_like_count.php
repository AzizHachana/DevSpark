<?php
// Get the hotel ID from the AJAX request
$hotel_id = $_POST['hotel_id'];

// Update the like count in the database
$sql = "UPDATE hotels SET like_count = like_count + 1 WHERE id = $hotel_id";
$conn->query($sql);

// Close the database connection
$conn->close();
?>