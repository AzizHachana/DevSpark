<?php
require_once 'connect.php';



// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $id = $_POST['modify'];
    try {
        // Prepare and execute the UPDATE query
        $query = $pdo->prepare('UPDATE reclamation SET status = "Responded" WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        // Check if any rows were affected
        $rowCount = $query->rowCount();
        
        if ($rowCount > 0) {
            echo "<script>alert('Reclamation with ID $id has been modified.');</script>";
        } else {
            echo "<script>alert('No changes were made to the reclamation with ID $id.');</script>";
        }

        // Redirect after successful update
        header("Location: ../view/Back/listContact.php");
        // Ensure no further code execution after redirection
    } catch (PDOException $e) {
        // Display error message if the query fails
        echo "Error: " . $e->getMessage();
    }
}

?>
