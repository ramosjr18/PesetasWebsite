<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Client</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            transition: all 0.3s ease-in-out;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            background: url(../assets/img/partetraserapesetasssss.jpg) no-repeat center center fixed;
            background-size: cover;
            background-repeat: no-repeat;
            backdrop-filter: blur(15px);
        }


        .Contenido {
            height: 100%;
            width: 100%;
            backdrop-filter: blur(18px);
        }

        form {
            width: 50%;
            height: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.445);
            border-radius: 5%;
            text-align: center;
        }

        form input {
            height: 30px;
            margin-top: 5%;
            background-color: transparent;
            border: transparent;
            border-bottom: 1px solid black;
            color: white;
        }

        ::placeholder {
            color: white;
            opacity: 1;
        }

        form input:hover {
            background-color: transparent;
            border: transparent;
            border-bottom: 1px solid black;
        }


        form button {
            position: relative;
            padding: 0.5em 0.5em;
            border: none;
            background-color: transparent;
            cursor: pointer;
            outline: none;
            font-size: 20px;
            margin-top: 10%;
        }

        .button.type4 {
            color: white;
            margin-top: 1px;
        }

        .button.type4.type4::after,
        .button.type4.type4::before {
            content: "";
            display: block;
            position: absolute;
            width: 20%;
            height: 15%;
            border: 2px solid;
            transition: all 0.6s ease;
            border-radius: 2px;
        }

        .button.type4.type4::after {
            bottom: 0;
            right: 0;
            border-top-color: transparent;
            border-left-color: transparent;
            border-bottom-color: black;
            border-right-color: black;
        }

        .button.type4.type4::before {
            top: 0;
            left: 0;
            border-bottom-color: transparent;
            border-right-color: transparent;
            border-top-color: black;
            border-left-color: black;
        }

        .button.type4.type4:hover:after,
        .button.type4.type4:hover:before {
            border-bottom-color: black;
            border-right-color: black;
            border-top-color: black;
            border-left-color: black;
            width: 100%;
            height: 100%;
        }

        @media screen and (max-width: 630px) {
            form {
                width: 80%;
                height: 85%;
            }
        }

        @media screen and (max-width: 530px) {
            form {
                width: 80%;
                height: 85%;
            }
        }

        @media screen and (max-width: 230px) {
            form {
                width: 80%;
                height: 70%;
            }
        }
    </style>
</head>

<body>
    <div class="Contenido">
        <?php
        // Connect to the MySQL database
        require 'connection_db.php';

        $db = $conn;

        // Check for a valid reservation ID in the URL
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];

            // Retrieve the reservation data from the MySQL database
            $query = "SELECT * FROM reservations WHERE id = $id";
            $result = $db->query($query);
            $reservation = $result->fetch_assoc();

            // Check if the reservation data was found
            if ($reservation) {
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

                    if ($result) {
                        echo '<script>
                                window.location = "../assets/pag/adminpanel.php";    
                            </script>';
                    } else {
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
                echo "<button type='submit'  , class='button type4'>Save Changes</button>";
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
    </div>
</body>

</html>