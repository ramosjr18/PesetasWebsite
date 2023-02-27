<?php
require 'php/connection_db.php';
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Pesetas - Bar Tapas Restaurant Catering</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="script" href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js">
</head>

<body>


    <div class="willkommen">
        <div class="contentwill">
            <div class="nav">
                <nav>
                    <div class="idioma">
                        <ul>
                            <li><a href=""><img src="assets/img/alemania.png" alt="">
                                    <ul>
                                        <li><a href="assets/es/espanol.php"><img src="assets/img/espana.png" alt=""></a></li>
                                        <li><a href="assets/en/english.php"><img src="assets/img/reino-unido.png" alt=""></a></li>
                                    </ul>
                                </a></li>
                        </ul>
                    </div>
                    <div class="list_nav">
                        <ul>
                            <li><a href="#Kontakt">Kontakt</a></li>
                            <li><a href="#Lage">Lage</a></li>
                            <li><a href="#Bilder">Bilder</a></li>
                            <li><a href="#Reservierung">Reservierung</a></li>
                        </ul>
                    </div>
                    <div class="login">
                        <ul>
                            <li><a href="assets/pag/login.php"><img class="InocoLogin" src="assets/img/camarero.png" alt=""></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <h1>Herzlich Willkommen im Pesetas</h1>

            <div class="logo">
                <img src="assets\img\logodepesetas.png" alt="Logo de Pesetas" width="30%" />
            </div>
            <p>Tauchen Sie ein in ein kleines Stück Spanien in Berlin </p>

            <button class="button type3"><a href="assets/descargas/menue_2020.pdf" target="_blank">Speise und
                    Getränkekarte</a></button>
            <button class="button type3"><a href="assets/descargas/" download="catering.pdf">Catering Angebot</a></button>
        </div>

    </div>

    <div class="about">

        <div class="imgabout">
            <img src="assets/img/IMG_20221029_190215.jpg" alt="Pesetas Restaurant">
        </div>
        <div class="textoabout">
            <h1> Was finden Sie im Pesetas?</h1>

            <p>Erfahren Sie den authentischen Geschmack und verbringen Sie einen wunderschönen
                Moment in unserem liebevoll eingerichteten Restaurant. <br> <br>
                Genießen Sie unsere traditionell zubereitete Paella oder kleine Tapas im Genuß mit unseren vollmundigen
                spanischen Weinen,
                der traditionell zubereiteten Sangria oder einem eisgekühlten Bier.
            </p>
            <br>
            <p>
                Sie können Montags bis Samstags von 17:00 bis "Open End" auch leckeres
                aus der Pesetas Küche zum abholen bestellen.
            </p>
            <br>
            <p>
                Alle weiteren aktuellen News oder Informationen werden auch immer auf unser social media
                finden.
            </p>
            <br>
            <p>
                ¡Hasta pronto!
            </p>
        </div>

    </div>

    <div class="borderline">
        <img src="assets/img/Pngtreeblack_line_border_8053699.png" alt="borderLine">
    </div>

    <main id="Bilder">
        <div class="containerbilder">
            <h1>Bilder</h1>
            <input type="radio" name="slider" id="item-1" checked>
            <input type="radio" name="slider" id="item-2">
            <input type="radio" name="slider" id="item-3">
            <div class="imgcards">
                <label class="imgcard" for="item-1" id="song-1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZbHXvjcR3gMAgnp-ElLaABqECnUDC853I3grSJFrYD0sAh0jfzv2Ipvwrz-Tkx3MF-xs&usqp=CAU" alt="Imagen de Comida">
                </label>
                <label class="imgcard" for="item-2" id="song-2">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNPymZaI_WjBVi-esqKfivm9kwX7ogNJAG-HFGjohjhhCpdJNgwYrIYNKC-LWWyxGv0xQ&usqp=CAU" alt="Imagen de Comida">
                </label>
                <label class="imgcard" for="item-3" id="song-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZbHXvjcR3gMAgnp-ElLaABqECnUDC853I3grSJFrYD0sAh0jfzv2Ipvwrz-Tkx3MF-xs&usqp=CAU" alt="Imagen de Comida">
                </label>
    </main>

    <div class="borderline">
        <img src="assets/img/Pngtreeblack_line_border_8053699.png" alt="borderLine">
    </div>

    <div class="map" id="Lage">
        <div class="mapouter">
            <h1>Lage</h1>
            <div class="gmap_canvas">
                <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Pesetas%20Unter%20den%20Eichen%20112A,%2012203%20Berlin,%20Alemania&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <br>
            </div>
        </div>
    </div>
    <br>

    <div class="borderline">
        <img src="assets/img/Pngtreeblack_line_border_8053699.png" alt="borderLine">
    </div>

    <div class="Planos">
        <div class="frenteplano">
            <img src="assets/img/planofrentePesetas.png" alt="Plano Frontal De Pesetas">
        </div>
        <div class="traseroplano">
            <img src="assets/img/planoTraseroPesetas1.png" alt="Plano Trasero De Pesetas">
        </div>
    </div>

    <div class="formular" id="Reservierung">
        <div class="formtext">
            <h1>Reservierung</h1>
            <p>sichern sie ein platz</p>
            <br>
            <h2>Offnungszeiten</h2>
            <p>Mo - Sa von 17:00 bis "Open End"</p>
        </div>
        <div class="form">
            <form action="php/reservations.php" method="post">
                <h2>Bitte füllen Sie alle Felder vollständig aus</h2>
                <input class="namePhone" type="text" name="name" placeholder="Name" required>
                <input class="namePhone" type="tel" name="telefono" placeholder="Telefon" required>
                <br>
                <input type="date" name="date" min="17:00" max="21:00" required>
                <input type="email" name="email" placeholder="Email" required>
                <br><br>
                <select name="place">
                    <option value="Pesetas - Under Den Eichen">Pesetas - Under Den Eichen</option>
                </select>
                <select name="table-number">
                    <option value="">Wählen Sie ein Tisch</option>
                    <?php
                    $date = $_GET['date'];  // Get the current date
                    $query = "SELECT mesas.* FROM mesas LEFT JOIN reservations ON mesas.idmesa = reservations.idmesa AND reservations.date = '$date' WHERE reservations.idmesa IS NULL";
                    //$query = "SELECT * FROM mesas";
                    
                    $result = mysqli_query($conn, $query);

                    while ($values = mysqli_fetch_array($result)) {
                        echo '<option value="' . $values['idmesa'] . '">Tisch ' . $values['mesa'] . '</option>';
                        //echo $row['idmesa'] . " - " . $row['mesa'] . "<br>";
                    }
                    ?>
                </select>
                <br>
                <label for="time">UhrZeit:</label>
                <input type="time" id="time" name="time" min="17:00" max="21:00" required>
                <label for="party-size">Party size:</label>
                <input type="number" id="party-size" name="party-size" min="1" max="20" required placeholder="1-20">
                <br> <br>
                <textarea name="notes" id="" cols="47" rows="10" placeholder="Kommentar"></textarea>
                <br>
                <button type="submit" , class="button type4"> Reservieren</button>
            </form>
        </div>
    </div>
    <br>

    <footer class="footer" id="Kontakt">
        <div class="footer_content">
            <div class="footer__addr">
                <img src="assets\img\logodepesetas.png" alt="Logo de Pesetas" width="130" />

                <h2>Kontakt</h2>

                <address> Unter den Eichen 112a, Berlin 12203</address><br>
                <button class="buttonc"><a class="footer__btn" href="mailto:info@pesetas-restaurant.de">Email Us</a></button>
                <button class="buttonc"><a class="footer__btn" href="tel:030 84319161">Call Us</a></button>
            </div>
            <br>
            <div class="legal">
                <p>DATENSCHUTZ UND IMPRESSUM</p>
                    
                <div class="legal__links">
                    <span>Made by Daniel Adrian Ramos Camargo</span> <br>
                    <a class="legal__links" href="https://www.flaticon.es/" target="_blank" title="españa iconos">Iconos Creados por Freepik - Flaticon</a> <br>
                    <a class="legal__links" href="http://emanuelgsouza.dev" target="_blank">Boton Creado por EmanuelG</a>
                </div>
            </div>

        </div>
    </footer>

</body>

</html>