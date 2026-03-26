<?php
session_start();

if (isset($_SESSION["generoa"])) {
    $generoa = $_SESSION["generoa"];
} else {
    $generoa = "2024-2025";
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
    <title>BSF - Hasiera</title>
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
            <h3 class="denboraldia"><?php echo "Denboraldia: " . $generoa ?></h3>
        </header>
        <main>
            <section>
                <h2 class="berriak"> Berriak </h2>
                <div class="karrusel">
                    <a href="https://bizkaiabasket.com/es/resultados-del-pin-actualizados-despues-de-todos-los-encuentros-de-2025/"
                        class="slide active">
                        <img src="argazkiak/PIN-JUGANDO.webp" alt="berria1">
                    </a>
                    <a href="https://bizkaiabasket.com/es/nuevo-horario-de-atencion-al-publico/" class="slide">
                        <img src="argazkiak/SECRETARIA.webp" alt="berria2">
                    </a>
                    <a href="https://bizkaiabasket.com/es/eusknaf25-doblete-para-las-selecciones-minis-de-bizkaia/"
                        class="slide">
                        <img src="argazkiak/BIZKAIA-MINI-FEM-CAMPEONAS.webp" alt="berria3">
                    </a>
                    <a href="https://bizkaiabasket.com/es/eusknaf25-el-tercer-cuarto-deja-a-bizkaia-sin-titulo-en-junior-masculino-y-la-junior-femenina-se-tiene-que-conformar-con-el-cuarto-puesto/"
                        class="slide">
                        <img src="argazkiak/EUSKNAF25-JF-BIZKAIA-ARABA.webp" alt="berria4">
                    </a>
                </div>
                <div class="articleindex">
                    <article class="articlehasiera">
                        <img src="argazkiak/Lasalle_taldea.jpg" class="imgindex">
                        <br>
                        <h3>Garaitu gabeko talde</h3>
                        <p>LaSalle da orain arte garaitu gabe dagoen talde bakarra, guztira 120 puntuko aldearekin. Asteburu
                            honetan ligako bigarren postuan dagoen Unamuno taldearen aurka jokatuko dute. Lortuko al dute
                            bolada mantentzea?</p>
                    </article>
                    <article class="articlehasiera">
                        <video src="bideoak/Iker Aguirre.mp4" controls class="bidindex"></video>
                        <br>
                        <h3>Iker Aguirre</h3>
                        <p>Iker Aguirre, denek hizpide duten jokalaria. Bere jokatzeko denborari erreparatuta, hiruko
                            jaurtiketa portzentajerik altuena du. Gaur egun, Ibaizabal taldean jokatzen ari da, ligako
                            hirugarren postuan dagoena. Bere hiruko magikoek bere taldea aintzara eramango al dute?</p>
                    </article>
                    <article class="articlehasiera">
                        <img src="argazkiak/LaSalle-Unamuno.png" class="imgindex2">
                        <br>
                        <h3>Txinpartak hegan</h3>
                        <p>LaSalle eta Unamuno aurrez aurre arituko dira eguneko partidan, zirrara, intentsitatea eta joko
                            bikaina agintzen dituen duelu batean. Bi taldeak inor axolagabe utziko ez duen partida batean
                            ikuskizuna emateko irrikitan egongo dira. Nork eramango du etxera liga titulua?</p>
                    </article>
                </div>
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
        <main>
            <section>
                <h2 class="berriak"> Berriak </h2>
                <div class="karrusel">
                    <a href="https://bizkaiabasket.com/es/resultados-del-pin-actualizados-despues-de-todos-los-encuentros-de-2025/"
                        class="slide active">
                        <img src="argazkiak/PIN-JUGANDO.webp" alt="berria1">
                    </a>
                    <a href="https://bizkaiabasket.com/es/nuevo-horario-de-atencion-al-publico/" class="slide">
                        <img src="argazkiak/SECRETARIA.webp" alt="berria2">
                    </a>
                    <a href="https://bizkaiabasket.com/es/eusknaf25-doblete-para-las-selecciones-minis-de-bizkaia/"
                        class="slide">
                        <img src="argazkiak/BIZKAIA-MINI-FEM-CAMPEONAS.webp" alt="berria3">
                    </a>
                    <a href="https://bizkaiabasket.com/es/eusknaf25-el-tercer-cuarto-deja-a-bizkaia-sin-titulo-en-junior-masculino-y-la-junior-femenina-se-tiene-que-conformar-con-el-cuarto-puesto/"
                        class="slide">
                        <img src="argazkiak/EUSKNAF25-JF-BIZKAIA-ARABA.webp" alt="berria4">
                    </a>
                </div>
                <div class="articleindex">
                    <article class="articlehasiera">
                        <img src="argazkiak/Lasalle_taldea.jpg" class="imgindex">
                        <br>
                        <h3>Garaitu gabeko talde</h3>
                        <p>LaSalle da orain arte garaitu gabe dagoen talde bakarra, guztira 120 puntuko aldearekin. Asteburu
                            honetan ligako bigarren postuan dagoen Unamuno taldearen aurka jokatuko dute. Lortuko al dute
                            bolada mantentzea?</p>
                    </article>
                    <article class="articlehasiera">
                        <video src="bideoak/Iker Aguirre.mp4" controls class="bidindex"></video>
                        <br>
                        <h3>Iker Aguirre</h3>
                        <p>Iker Aguirre, denek hizpide duten jokalaria. Bere jokatzeko denborari erreparatuta, hiruko
                            jaurtiketa portzentajerik altuena du. Gaur egun, Ibaizabal taldean jokatzen ari da, ligako
                            hirugarren postuan dagoena. Bere hiruko magikoek bere taldea aintzara eramango al dute?</p>
                    </article>
                    <article class="articlehasiera">
                        <img src="argazkiak/LaSalle-Unamuno.png" class="imgindex2">
                        <br>
                        <h3>Txinpartak hegan</h3>
                        <p>LaSalle eta Unamuno aurrez aurre arituko dira eguneko partidan, zirrara, intentsitatea eta joko
                            bikaina agintzen dituen duelu batean. Bi taldeak inor axolagabe utziko ez duen partida batean
                            ikuskizuna emateko irrikitan egongo dira. Nork eramango du etxera liga titulua?</p>
                    </article>
                </div>
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


    <?php
}
?>