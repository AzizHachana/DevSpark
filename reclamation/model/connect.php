<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'ayachi';

// PDO connection
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>