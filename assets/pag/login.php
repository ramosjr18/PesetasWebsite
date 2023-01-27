<?php
    session_start();

    if(isset($_SESSION['Usuario'])){
        header("location: adminpanel.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>

<body>

    <div class="content">
        <div class="Login">
            <img src="../img/logodepesetas.png" alt=""> <br>
            <form action="../../php/login_user.php" method="post">
            <input type="text" name="Usuario" id="" placeholder="User" required> <br>
            <input type="password" name="Contra" id="" placeholder="Password" required> <br>
            <button type="submit" , class="button type4">Enter</button>
            </form>
        </div>
    </div>

</body>

</html>