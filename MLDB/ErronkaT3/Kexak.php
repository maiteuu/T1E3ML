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
    <main>
        <h2>Kexak</h2>
    <form action="gorde.php"method="get" class="kexas">
        <label for="">Izena</label><br><br>
        <input type="text" name="izena"required placeholder="Sartu Izena">
        <br><br>
         <label for="">Telefonoa</label><br><br>
         <input type="text" name="telefonoa"required placeholder="868588879" pattern="[0-9]{9}">
         <br><br>
        <label for="">Helbide Elektronikoa</label><br><br>
        <input type="email"name="email" required placeholder="adibide@gmail.com">
        <br><br>
          <label for="">Mezua</label><br><br>
          <input type="text" name="mezua" required class="kexak">
          <br><br>
          <button type="submit" value="Harpidetza" class="Aurkitu">Bidali </>
    </form>
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