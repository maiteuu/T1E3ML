<?php
session_start();

if (isset($_SESSION["generoa"])){
    $generoa=$_SESSION["generoa"];
}else{
   $generoa="2024-2025";
}


// XML kargatu DOM erabilita    
        $xml = new DOMDocument();
        $xml->load("xml/kexak.xml");

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
           $fitxategia = "xml/kexak.xml";
if (!file_exists($fitxategia)){
     file_put_contents($fitxategia, "<?xml version='1.0' encoding='UTF-8'?>
<kexak></kexak>");
}
$fitxategia=file_get_contents("xml/kexak.xml");
$fitxategia=str_replace("</kexak>"," ",$fitxategia);
//Alda
$izena= $_GET["izena"];
$telefonoa= $_GET["telefonoa"];
$email= $_GET["email"];
$mezua= $_GET["mezua"];

//Sortu
$fitxategia .=" <kexa> ";
$fitxategia .=" <izena>$izena</izena> ";
$fitxategia .=" <telefonoa>$telefonoa</telefonoa> ";
$fitxategia .=" <email>$email</email> ";
$fitxategia .=" <mezua>$mezua</mezua> ";
$fitxategia .=" </kexa> ";
$fitxategia .=" </kexak> ";



$bytes=file_put_contents("xml/kexak.xml", $fitxategia);
echo $bytes,"sortu dira";
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
    <main class="sure_kexak">
        <h1> Sure kexa bidali egin da </h1>
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
