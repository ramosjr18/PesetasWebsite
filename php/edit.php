<?php
// Connect to the MySQL database
require 'connection_db.php';

$db = $conn;

// Check for a valid reservation ID in the URL
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    // Retrieve the reservation data from the MySQL database
    $query = "SELECT * FROM reservations WHERE id = $id";
    $result = $db->query($query);
    $reservation = $result->fetch_assoc();
    
    // Check if the reservation data was found
    if($reservation) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            // Sanitize and validate the data
            $name = mysqli_real_escape_string($db, $_POST['name']);
            $email = mysqli_real_escape_string($db, $_POST['email']);
            $date = mysqli_real_escape_string($db, $_POST['date']);
            $time = mysqli_real_escape_string($db, $_POST['time']);
            $party_size = mysqli_real_escape_string($db, $_POST['party_size']);
            $notes = mysqli_real_escape_string($db, $_POST['notes']);
            
            // Update the reservation data in the MySQL database
            $query = "UPDATE reservations SET name='$name', email='$email', date='$date', time='$time', party_size='$party_size',notes='$notes' WHERE id = $id";
            $result = $conn->query($query);
            
            if($result){
                echo "Reservation updated successfully";
            }else{
                echo "Error updating reservation: " . $db->error;
            }
        }
        // Display the form to edit the reservation data
        echo "<form action='edit.php?id=$id' method='post'>";
        echo "<label for='name'>Name:</label>";
        echo "<input type='text' id='name' name='name' value='" . $reservation['name'] . "'><br><br>";
        echo "<label for='email'>Email:</label>";
        echo "<input type='email' id='email' name='email' value='" . $reservation['email'] . "'><br><br>";
        echo "<label for='date'>Date of reservation:</label>";
        echo "<input type='date' id='date' name='date' value='" . $reservation['date'] . "'><br><br>";
        echo "<label for='time'>Time of reservation:</label>";
        echo "<input type='time' id='time' name='time' value='" . $reservation['time'] . "'><br><br>";
        echo "<label for='party-size'>Party size:</label>";
        echo "<input type='number' id='party-size' name='party_size' value='" . $reservation['party_size'] . "' min='1' max='10'><br><br>";
        echo "<label for='notes'>Notes:</label>";
        echo "<textarea id='notes' name='notes'>" . $reservation['notes'] . "</textarea><br><br> ";
        echo "<input type='submit' value='Save Changes'>";
        echo "</form>";
    } else {
        echo "Invalid reservation ID";
    }
} else {
    echo "Invalid reservation ID";
}

// Close the database connection
$db->close();
?>