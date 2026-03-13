
<?php
session_start();

if (isset($_SESSION["generoa"])){
    $generoa=$_SESSION["generoa"];
}else{
   $generoa="2024-2025";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BSF - Hasiera</title>
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
                <li>
                    <span class="menu-aita">Inprimakiak</span>
                    <ul class="submenua">
                        <li><a id="organigrama" href="Kexak.php">Kexak</a></li>
                    </ul>
                </li>
                <li>
                    <span class="menu-aita">Lehiaketak</span>
                    <ul class="submenua">
                        <li><a id="taldeak" href="#">Taldeak</a></li>
                        <li><a id="jaurdunaldiak" href="#">Jaurdunaldiak</a></li>
                        <li><a id="sailkapena" href="Klasifikazioa.php">Sailkapena</a></li>
                    </ul>
                </li>
                <li><a id="kontaktua" href="Kontaktua.php">Kontaktua</a></li>
            </ul>
        </nav>
        <h2 id="denboraldia"><?php echo "Denboraldia: " .$generoa?></h2>
    </header>
<h1 class="orri-izenburua"> Gure Kontaktua </h1>
<br>
<div class="mapa">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5812.329463486489!2d-2.9361776011352347!3d43.24796923583529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e4e31e3bd70e3%3A0x46ac2daa7c07ffec!2sMart%C3%ADn%20Bar%C3%BAa%20Picaza%20Kalea%2C%2027%2C%20Ibaiondo%2C%2048010%20Bilbao%2C%20Bizkaia!5e0!3m2!1seu!2ses!4v1768301925805!5m2!1seu!2ses"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
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