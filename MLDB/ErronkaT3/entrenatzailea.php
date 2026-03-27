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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gure Estrategiak</title>
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
        <h1 class="orri-izenburua"> <img class="Entr-Irdui" src="argazkiak/salesianos.jpg"> Salesianos <img
                class="Entr-Irdui" src="argazkiak/salesianos.jpg"></h1>
        <h2>Lerrokadura</h2>
        <div class="container">
            <div class="ezkerreko-zutabea">
                <img src="argazkiak/Cancha.png" alt="Sazkibaloiko Zelaia" class="zelaia">
                <div class="jokalariak" style="top: 440px; left: 400px;">Aritz Beloki</div>
                <div class="jokalariak" style="top: 350px; left: 210px;">Maialen Etxaniz</div>
                <div class="jokalariak" style="top: 320px; left: 500px;">Jon Lertxundi</div>
                <div class="jokalariak" style="top: 120px; left: 280px;">Unax Arregi</div>
                <div class="jokalariak" style="top: 250px; left: 570px;">Maddi Zubiri</div>
                <div class="jokalariak" style="top: 480px; left: 0px;">Iosu Urkiza</div>
                <div class="jokalariak" style="top: 510px; left: 0px;">Ekhi Garate</div>
                <div class="jokalariak" style="top: 540px; left: 0px;">June Altube</div>
                <div class="jokalariak" style="top: 570px; left: 0px;">Iñigo Lazcano</div>
                <div class="entrenatzailea" style="top: 450px; left: 0px;">Aratz Barcena</div>
            </div>
            <div class="ezkuineko-zutabea">
                <h2>Taldearen Estrategiak</h2>
                <div class="estrategia">
                    <h3>Erasoa</h3>
                    <p>Landu pase azkarretan eta saskirako jaurtiketetan, bilatu jaurtiketa irekiak.</p>
                </div>
                <div class="estrategia">
                    <h3>Defentsa</h3>
                    <p>Zonako eta gizon-gizonezko defentsa bizia, espazioak itxiz eta erreboteak lortuz.</p>
                </div>
                <div class="estrategia">
                    <h3>Kontraerasoa</h3>
                    <p>Defentsako errebote bakoitzaren ondoren azkar irten eta trantsizio azkar bat bilatu.</p>
                </div>
                <br><br>
                <img class="salesianos-taldea" alt="Salesianos-en Taldea" src="argazkiak/salesianos-taldea.jpg">
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