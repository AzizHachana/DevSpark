<?php

require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Collect form data
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $subject = isset($_GET['subject']) ? $_GET['subject'] : '';
    $message = isset($_GET['message']) ? $_GET['message'] : '';

    try {
        $query = $pdo->prepare('INSERT INTO reclamation (name, email, subject, message, status) VALUES (:name, :email, :subject, :message, :status)');

        // Bind values to parameters
        $query->bindValue(':name', $name);
        $query->bindValue(':email', $email);
        $query->bindValue(':subject', $subject);
        $query->bindValue(':message', $message);

        // Set the status to "Not Responded"
        $status = "Not Responded";
        $query->bindValue(':status', $status);

        $query->execute();

        echo "<script>alert('Message sent successfully!.');</script>";
        header("Location: ../view/Front/vacation-master/contact.php"); 
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        echo '<script>alert("Error sending message. Please try again later.");</script>';
        header("Location: ../view/Front/vacation-master/contact.php");
    }

    // Redirect to the contact page with error parameter
    
    exit();
} else {
    // Redirect to the contact page if the form is not submitted
    header("Location: ../View/Contact/Contact.php");
    exit();
}