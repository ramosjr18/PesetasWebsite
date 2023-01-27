<?php
session_start();

if (!isset($_SESSION['Usuario'])) {
    echo '
        <script>
            alert("No tienes Acceso a Esta Pagina");
            window.location = "../../index.html";
        </script>';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="../css/Panel.css">
</head>

<body>

    <aside>
        <img src="../img/logodepesetas.png" alt="">
        <h1>Dashboard</h1>
    </aside>

    <div class="Contenido">
        <nav>
            <button><a href="../../php/cerrar_sesion.php">cerrar sesion</a></button>
        </nav>

        <main>
            <h1>Reservaciones</h1>

            <div class="tabla">
                <table>
                    <?php
                    require '../../php/connection_db.php';

                    $query = "SELECT * FROM reservations";
                    $result = $conn->query($query);

                    echo "<table>";
                    echo "<tr><th>Name</th><th>Email</th><th>Telefono</th><th>Date</th><th>Time</th><th>Party Size</th><th>Mesa</th><th>Notes</th><th>Estado</th><th></th><th></th><th></th><th></th></tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['telefono'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "<td>" . $row['time'] . "</td>";
                        echo "<td>" . $row['party_size'] . "</td>";
                        echo "<td>" . $row['mesa'] . "</td>";
                        echo "<td>" . $row['notes'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                        echo "<td> <a href='edit.php?id=" . $row['id'] . "'>Edit</a></td>";
                        echo "<td> <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                        echo "<td> <a href='confirm.php?id=" . $row['id'] . "'>Cambiar Estado</a></td>";
                        echo "<td> <a href='mailto:" . $row['email'] . "?subject=Confirmation of Reservation&body=Dear ". $row['name'] . ",%0D%0A%0D%0AThank you for your reservation at our restaurant. We are looking forward to your visit on ". $row['date'] . " at " . $row['time'] . ". Your party size is " . $row['party_size'] . " and your table is number ". $row['mesa'] . ".%0D%0A%0D%0AIf you have any notes or special requests, please let us know.%0D%0A%0D%0AThank you again for choosing our restaurant.%0D%0A%0D%0ABest regards,%0D%0ARestaurant Team%0D%0A%0D%0A----------------German Version---------------%0D%0A%0D%0ASehr geehrte/r " . $row['name'] . ",%0D%0A%0D%0AVielen Dank, dass Sie bei uns eine Reservierung vorgenommen haben. Wir freuen uns auf Ihren Besuch am "
                            . $row['date'] . " um " . $row['time'] . ". Ihre Gruppengröße beträgt " . $row['party_size'] . " und Ihr Tisch ist Nummer "
                            . $row['mesa'] . ".%0D%0A%0D%0AFalls Sie Anmerkungen oder besondere Wünsche haben, lassen Sie es uns bitte wissen.
                         %0D%0A%0D%0AVielen Dank noch einmal, dass Sie uns gewählt haben.%0D%0A%0D%0AViele Grüße,%0D%0ARestaurant Team%0D%0A%0D%0A----------------Spanish Version---------------
                         %0D%0A%0D%0AEstimado/a " . $row['name'] . ",%0D%0A%0D%0AGracias por hacer su reserva en nuestro restaurante. Esperamos verlos el "
                            . $row['date'] . " a las " . $row['time'] . ". El tamaño de su grupo es de " . $row['party_size'] . " y su mesa es la número "
                            . $row['mesa'] . ".%0D%0A%0D%0ASi tiene alguna nota o solicitud especial, por favor háganoslo saber.
                         %0D%0A%0D%0AGracias nuevamente por elegir nuestro restaurante.
                         %0D%0A%0D%0ASaludos cordiales,%0D%0AEquipo de Restaurant
                         '>Confirmar Reserva</a></td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                    ?>
                </table>
            </div>

        </main>
    </div>

</body>

</html>