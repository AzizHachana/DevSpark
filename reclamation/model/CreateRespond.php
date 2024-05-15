<?php
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $id = $_POST['id'];
    $reponse = $_POST['reponse'];


    try {
        $query = $pdo->prepare('INSERT INTO reponse (id_reponse, reponse, date_de_reponse, id)  
        VALUES (NULL, :reponse, NOW(), :id)');
        $query->bindValue(':id', $id);
        $query->bindValue(':reponse', $reponse);
        $query->execute();

        echo "<script>alert('Reponse sent successfully!.');</script>";
        header("Location: ../view/Back/listContact.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        echo '<script>alert("Error sending reponse. Please try again later.");</script>';
        header("Location: ../view/Back/listContact.php");
    }
} else {
    // Redirect to the contact page if the form is not submitted
    header("Location: ../view/Back/listContact.php");
    exit();
}


