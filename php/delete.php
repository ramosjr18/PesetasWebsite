<?php
// Connect to the MySQL database
require 'connection_db.php';
$db = $conn;

// Check if a reservation ID is passed in the URL
if (isset($_GET['id'])) {
    // Sanitize and validate the reservation ID
    $id = intval($_GET['id']);

    // Check if the reservation ID is valid
    if ($id > 0) {
        // Delete the reservation from the MySQL database
        $query = "DELETE FROM reservations WHERE id = $id";
        $result = $db->query($query);

        // Check if the deletion was successful
        if ($result) {
            echo "Reservation deleted successfully.";
            header('location: ../assets/pag/adminpanel.php');
        } else {
            echo "Error deleting reservation: " . $db->error;
        }
    } else {
        echo "Invalid reservation ID";
    }
} else {
    echo "Invalid reservation ID";
}

// Close the database connection
$db->close();
?>