<?php
session_start();

if (isset($_SESSION["denboraldia"])) {
    $denboraldia = $_SESSION["denboraldia"];
} else {
    $denboraldia = "2024-2025";
}
if (isset($_SESSION["nombreUsuario"])) {
    $u = $_SESSION["nombreUsuario"];
    $rol = $_SESSION["rol"];
    $ikonoa = $_SESSION["ikonoa"];
} else {

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
    echo "User honek:" . $user . " eta email honek: " . $email . " existitzen dira";

} elseif($u == "kmunoz"){
     $fitxategia = "xml/sarrerak.xml";
    if (!file_exists($fitxategia)) {
        file_put_contents($fitxategia, "<?xml version='1.0' encoding='UTF-8'?>
<sarrerak></sarrerak>");
    }
    $fitxategia = file_get_contents("xml/sarrerak.xml");
    $fitxategia = str_replace("</sarrerak>", " ", $fitxategia);
    //Alda
    $izena = $_GET["izena"];
    $telefonoa = $_GET["telefonoa"];
    $email = $_GET["email"];
    $mezua = $_GET["partidua"];

    //Sortu
    $fitxategia .= " <sarrera> ";
    $fitxategia .= " <izena>$izena</izena> ";
    $fitxategia .= " <telefonoa>$telefonoa</telefonoa> ";
    $fitxategia .= " <email>$email</email> ";
    $fitxategia .= " <partidua>$mezua</partidua> ";
    $fitxategia .= " </sarrera> ";
    $fitxategia .= " </sarrerak> ";

    $bytes = file_put_contents("xml/sarrerak.xml", $fitxategia);
}
else {
    # Si no encuentro datos
    $fitxategia = "xml/kexak.xml";
    if (!file_exists($fitxategia)) {
        file_put_contents($fitxategia, "<?xml version='1.0' encoding='UTF-8'?>
<kexak></kexak>");
    } else 
    $fitxategia = file_get_contents("xml/kexak.xml");
    $fitxategia = str_replace("</kexak>", " ", $fitxategia);
    //Alda
    $izena = $_GET["izena"];
    $telefonoa = $_GET["telefonoa"];
    $email = $_GET["email"];
    $mezua = $_GET["mezua"];

    //Sortu
    $fitxategia .= " <kexa> ";
    $fitxategia .= " <izena>$izena</izena> ";
    $fitxategia .= " <telefonoa>$telefonoa</telefonoa> ";
    $fitxategia .= " <email>$email</email> ";
    $fitxategia .= " <mezua>$mezua</mezua> ";
    $fitxategia .= " </kexa> ";
    $fitxategia .= " </kexak> ";

    $bytes=file_put_contents("xml/kexak.xml", $fitxategia);
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
    <?php
if (isset($_SESSION['nombreUsuario'])) {
    ?>
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
                    <?php
                    if ($u == "abarcena") {
                        ?>
                        <li><a id="entrenatzailea" href="entrenatzailea.php">Gure Estrategiak</a></li>
                    <?php } ?>
                </ul>
            </nav>
            <h1 class="u-agurra"><img class="ikonoa-erabiltzailea" src="<?php echo $ikonoa; ?>" alt="icono"> Kaixo
                <?php echo $u ?> (<?php echo $rol ?>)!!</h1>
            <a class="login-botoia" href="logout.php">Saioa Itxi</a>
            <h3 class="denboraldia"><?php echo "Denboraldia: " . $denboraldia ?></h3>
        </header>
    <?php
} else {
    ?>
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
    <?php
}
?>
<?php
     if ($u == "kmunoz") {
    ?>
    <main class="sure_kexak">
        <h1> Zure sarrera erosi egin da </h1>
    </main>
<?php 
}else {
    ?>
    <main class="sure_kexak">
        <h1> Zure kexa bidali egin da </h1>
    </main>
<?php } ?>

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