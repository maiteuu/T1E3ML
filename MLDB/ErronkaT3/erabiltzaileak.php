<?php
session_start();

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
    <title>Erabiltzaileak</title>
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
                <?php
                if ($u == "admin") {
                    ?>
                    <li><a id="erabiltzaileak" href="erabiltzaileak.php">Erabiltzaileak</a></li>
                <?php } ?>
            </ul>
        </nav>
          <a class="login-botoia" href="logout.php">Saioa Itxi</a>
        <h3 class="denboraldia"><?php echo "Denboraldia: " . $generoa ?></h3>
    </header>
    <main>
        

        <?php
        // XML kargatu DOM erabilita
        $xml = new DOMDocument();
        $xml->load("xml/ligak.xml");

        // XSL kargatu
        $xsl = new DOMDocument();
        $xsl->load("xml/erabiltzaileak.xsl");

        // Transformazioa egin
        $proc = new XSLTProcessor();
        $proc->importStylesheet(stylesheet: $xsl);

        //Parametro moduan pasatu xsl-ra
        
        $proc->setParameter("", name: "generoa", value: $generoa);
        // Erakutsi HTML orria
        echo $proc->transformToXML($xml);
        ?>
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