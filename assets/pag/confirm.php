<?php
// Connect to the database
require '../../php/connection_db.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the reservation information
$id = $_GET['id'];
$sql = "SELECT * FROM reservations WHERE id = '$id'";
$result = $conn->query($sql);

// Send the email confirmation
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Update the reservation status
    $sql = "UPDATE reservations SET estado = 1 WHERE id = '$id'";
    $conn->query($sql);

    $sql = "UPDATE reservations SET status = 'Confirmado' WHERE estado = 1";
    $conn->query($sql);

    // Redirect to the reservations page
    header("Location: adminpanel.php");
    exit();
} else {
    echo "Error: Invalid reservation ID";
}

$conn->close();
