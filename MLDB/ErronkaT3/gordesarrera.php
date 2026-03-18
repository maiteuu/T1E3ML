<?php
session_start();

if (isset($_SESSION["generoa"])){
    $generoa=$_SESSION["generoa"];
}else{
   $generoa="2024-2025";
}


// XML kargatu DOM erabilita    
        $xml = new DOMDocument();
        $xml->load("xml/sarrerak.xml");

        #XPath erabiltzcko aldagai berri bat sortuko dugu
        $xpath = new DOMXPath($xml);
        #php: namespace erregistratu behar dugu
        $xpath->registerNamespace("php", "http://php.net/xpath");
        #PHP funtzioak ere erregistratu behar ditugu (no restrictions)
        $xpath->registerPHPFunctions();

        //Sortu aldagaia bilatu behar den izenarekin
        $user = $_GET["izena"];
        $email = $_GET["email"];
        #XPath kontsulta
        $consulta = "//harpidetza[izena='$user' and email='$email']";
    
        #Xpath kontsulta betetzen duten nodoak bilatzen ditut
        $erabiltzaileak = $xpath->query($consulta);
        #Zenbat nodo bueltatu duen kontsultak aztertzen dugu
        $numNodos = $erabiltzaileak->length;

        if ($numNodos > 0) {
            # Si encuentro datos
            echo "User honek:" .$user." eta email honek: ".$email." existitzen dira";

        } else {
            # Si no encuentro datos
           $fitxategia = "xml/sarrerak.xml";
if (!file_exists($fitxategia)){
     file_put_contents($fitxategia, "<?xml version='1.0' encoding='UTF-8'?>
<sarrerak></sarrerak>");
}
$fitxategia=file_get_contents("xml/sarrerak.xml");
$fitxategia=str_replace("</sarrerak>"," ",$fitxategia);
//Alda
$izena= $_GET["izena"];
$telefonoa= $_GET["telefonoa"];
$email= $_GET["email"];
$mezua= $_GET["partidua"];

//Sortu
$fitxategia .=" <sarrera> ";
$fitxategia .=" <izena>$izena</izena> ";
$fitxategia .=" <telefonoa>$telefonoa</telefonoa> ";
$fitxategia .=" <email>$email</email> ";
$fitxategia .=" <partidua>$mezua</partidua> ";
$fitxategia .=" </sarrera> ";
$fitxategia .=" </sarrerak> ";



$bytes=file_put_contents("xml/sarrerak.xml", $fitxategia);

        }
?>
<?php

if (isset($_SESSION["generoa"])) {
    $generoa = $_SESSION["generoa"];
} else {
    $generoa = "2024-2025";
}
if (isset($_SESSION["nombreUsuario"])) {
    $u = $_SESSION["nombreUsuario"];
} else {

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sarrera Erosi</title>
    <link rel="stylesheet" href="estiloak/w3.css">
    <link rel="stylesheet" href="estiloak/estiloa.css" />
    <link rel="icon" type="icon" href="argazkiak/Federación Vizcaína de Baloncesto.png" />
    <script src="js/jquery3.7.1.js"></script>
    <script src="js/Erronka.js"></script>
</head>
<?php
if (isset($_SESSION['nombreUsuario'])) {
    ?>

    <body class="body-index">
        <header>
            <a href="index.php"><img class="logoa" src="argazkiak/Federación Vizcaína de Baloncesto.png" alt="Logo" /></a>
            <nav>
                <ul class="menua">
                    <li><a id="hasiera" href="index.php">Hasiera</a></li>
                    <li><a id="sailkapena" href="Klasifikazioa.php">Sailkapena</a></li>
                    <li><a id="kontaktua" href="Kontaktua.php">Kontaktua</a></li>
                    <?php
                    if ($u == "admin") {
                        ?>
                        <li><a id="erabiltzaileak" href="erabiltzaileak.php">Erabiltzaileak</a></li>
                    <?php } ?>
                    <?php
                    if ($u == "kmunoz") {
                        ?>
                        <li><a id="sarreraerosi" href="sarreraerosi.php">Sarrerak Erosi</a></li>
                    <?php } ?>
                </ul>
            </nav>
            <a class="login-botoia" href="logout.php">Saioa Itxi</a>
            <h3 class="denboraldia"><?php echo "Denboraldia: " . $generoa ?></h3>
        </header>
        <h1 class="orri-izenburua"> Erosi Zure Sarrera </h1>
        <br>
        <div class="kexen-kutxa">
            <h2>Sarrerak</h2>
            <form action="gordesarrera.php" method="get" class="kexas">
                <label for="">Izena</label><br><br>
                <input type="text" name="izena" required placeholder="Sartu Izena">
                <br><br>
                <label for="">Telefonoa</label><br><br>
                <input type="text" name="telefonoa" required placeholder="868588879" pattern="[0-9]{9}">
                <br><br>
                <label for="">Helbide Elektronikoa</label><br><br>
                <input type="email" name="email" required placeholder="adibide@gmail.com">
                <br><br>
                <label for="">Zein partidu ikusi nahi duzu?</label><br><br>
                <select name="partidua" id="">
                    <option value="LaSalle vs Unamuno">LaSalle vs Unamuno</option>
                    <option value="Tabirako vs Loiola">Tabirako vs Loiola</option>
                    <option value="Salesianos vs Ibaizabal">Salesianos vs Ibaizabal</option>
                </select>
                <br><br>
                <button type="submit" value="Harpidetza" class="Aurkitu"> Erosi Sarrera </button>
            </form>
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
    <?php
} else {
    ?>

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
            <h3 class="denboraldia"><?php echo "Denboraldia: " . $generoa ?></h3>
        </header>
        <h1 class="orri-izenburua"> Gure Kontaktua </h1>
        <br>
        <div class="kontaktua-container">
            <div class="mapa">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5812.329463486489!2d-2.9361776011352347!3d43.24796923583529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e4e31e3bd70e3%3A0x46ac2daa7c07ffec!2sMart%C3%ADn%20Bar%C3%BAa%20Picaza%20Kalea%2C%2027%2C%20Ibaiondo%2C%2048010%20Bilbao%2C%20Bizkaia!5e0!3m2!1seu!2ses!4v1768301925805!5m2!1seu!2ses"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="kexen-kutxa">
                <h2>Kexak</h2>
                <form action="gorde.php" method="get" class="kexas">
                    <label for="">Izena</label><br><br>
                    <input type="text" name="izena" required placeholder="Sartu Izena">
                    <br><br>
                    <label for="">Telefonoa</label><br><br>
                    <input type="text" name="telefonoa" required placeholder="868588879" pattern="[0-9]{9}">
                    <br><br>
                    <label for="">Helbide Elektronikoa</label><br><br>
                    <input type="email" name="email" required placeholder="adibide@gmail.com">
                    <br><br>
                    <label for="">Kexa</label><br><br>
                    <input type="text" name="mezua" required placeholder="Idatzi hemen zure kexa..." class="kexak">
                    <br><br>
                    <button type="submit" value="Harpidetza" class="Aurkitu">Bidali </button>
                </form>
            </div>
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
    <?php
}
?>