<?php
session_start();

if (isset($_SESSION["denboraldia"])) {
    $denboraldia = $_SESSION["denboraldia"];
} else {
    $denboraldia = "2024-2025";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Orria</title>
    <link rel="stylesheet" href="estiloak/w3.css">
    <link rel="stylesheet" href="estiloak/estiloa.css" />
    <link rel="icon" type="icon" href="argazkiak/Federación Vizcaína de Baloncesto.png" />
    <script src="js/jquery3.7.1.js"></script>
    <script src="js/Erronka.js"></script>
</head>

<body class="body-index">
    <header>
        <a href="index.php"><img class="logoa" src="argazkiak/Federación Vizcaína de Baloncesto.png" alt="Logo" /></a>
        <nav>
            <ul class="menua">
                <li><a id="hasiera" href="index.php">Hasiera</a></li>
                <li><a id="sailkapena" href="Klasifikazioa.php">Sailkapena</a></li>
                <li><a id="kontaktua" href="Kontaktua.php">Kontaktua</a></li>
            </ul>
        </nav>
        <a href="Login.php" class="login-botoia">Login</a>
        <h3 class="denboraldia"><?php echo "Denboraldia: " . $denboraldia ?></h3>
    </header>
    <main>
        <section class="Loginform">
            <h2>Erabiltzaileen login-a</h2>
            <form action="loginbalidazioa.php" method="POST">
                <label for="">Erabiltzailea: </label>
                <input type="text" name="erabiltzailea" required><br><br>
                <label for="">Pasahitza: </label>
                <input type="password" name="pasahitza" required><br><br>
                <input class="Aurkitu" type="submit" value="Logeatu">
            </form>
        </section>
    </main>

    <footer>
        <p>C/ Martin Barua Picaza 27- 2º 48003 Bilbao, Bizkaia</p>
        <p>944 439 57 22</p>
        <p>secretaria@bizkaiabasket.com</p>

        <div class="footer-social">
            <a href="https://www.facebook.com/BizkaiaBasket" target="_blank">
                <img src="argazkiak/facebook.png" alt="Facebook" class="footer-icon" /></a>

            <a href="https://x.com/BizkaiaBasket" target="_blank">
                <img src="argazkiak/x.png" alt="X" class="footer-icon" /></a>

            <a href="https://www.youtube.com/user/Bizkaiabasket" target="_blank">
                <img src="argazkiak/youtube.png" alt="YouTube" class="footer-icon" /></a>

            <a href="https://www.instagram.com/bizkaiabasket/?hl=es" target="_blank">
                <img src="argazkiak/instagram.png" alt="Instagram" class="footer-icon" /></a>

            <a href="https://www.flickr.com/photos/bizkaia_basket/" target="_blank">
                <img src="argazkiak/flickr.png" alt="Flickr" class="footer-icon" /></a>
        </div>
    </footer>
</body>

</html>