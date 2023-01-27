<?php
// Connect to the database
require 'connection_db.php';

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$party_size = $_POST['party-size'];
$notes = $_POST['notes'];
$table = $_POST['table-number'];

// Consulta para verificar si la mesa seleccionada está disponible en el día especificado
$sql = "SELECT * FROM reservations WHERE date='$date' AND mesa='$table'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si la mesa ya está reservada, mostrar mensaje de error
    echo "<script>
    alert('Lo siento, esa mesa ya está reservada para esa fecha. Por favor seleccione otra mesa.');
    window.location = '../index.html';  
</script>";
} else {
    // Si la mesa está disponible, insertar reserva en la base de datos
    $sql = "INSERT INTO reservations (name, email, date, time, party_size, mesa, notes, status)
    VALUES ('$name', '$email', '$date', '$time', '$party_size', '$table','$notes', 'Pendiente')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Reserva realizada con éxito. Muchas gracias!');
            window.location = '../index.html';  
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>