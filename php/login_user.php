<?php

    session_start();

    include 'connection_db.php';

    $user = $_POST['Usuario'];
    $contra = $_POST['Contra'];

    $validation = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='$user' and contrasena='$contra'");

    if(mysqli_num_rows($validation) > 0){
        $_SESSION['Usuario'] = $user;
        header("location: ../assets/pag/adminpanel.php");
        exit;
    } else{
        echo '<script>
            alert("User not found");
            window.location = "../index.php";    
        </script>';
        exit;
    }