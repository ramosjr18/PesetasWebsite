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
$telefono = $_POST['telefono'];
$date = $_POST['date'];
$time = $_POST['time'];
$party_size = $_POST['party-size'];
$notes = $_POST['notes'];
$table = $_POST['table-number'];

// Consulta para verificar si la mesa seleccionada está disponible en el día especificado
$sql = "SELECT * FROM reservations WHERE date='$date' AND idmesa='$table'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si la mesa ya está reservada, mostrar mensaje de error
    echo "<script>
    window.location = '../index.php';  
    alert('Lo siento, esa mesa ya está reservada para esa fecha. Por favor seleccione otra mesa.');
</script>";
} else {
    // Si la mesa está disponible, insertar reserva en la base de datos
    $sql = "INSERT INTO reservations (name, email, telefono, date, time, party_size, idmesa, notes, status)
    VALUES ('$name', '$email','$telefono', '$date', '$time', '$party_size', '$table','$notes', 'Pendiente')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            window.location = '../index.php';  
            alert('Reserva realizada con éxito. Muchas gracias!');
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
