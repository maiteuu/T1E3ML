<?php
session_start();
// XML kargatu DOM erabilita    
$xml = new DOMDocument();
$xml->load("xml/ligak.xml");

#XPath erabiltzcko aldagai berri bat sortuko dugu
$xpath = new DOMXPath($xml);
#php: namespace erregistratu behar dugu
$xpath->registerNamespace("php", "http://php.net/xpath");
#PHP funtzioak ere erregistratu behar ditugu (no restrictions)
$xpath->registerPHPFunctions();

//Sortu aldagaia bilatu behar den izenarekin
$user = $_POST["erabiltzailea"];
$pass = $_POST["pasahitza"];
$rol;
$ikonoa;
#XPath kontsulta
$consulta = "//erabiltzaileak/pertsona[erabiltzailea='$user' and pasahitza='$pass']";

#Xpath kontsulta betetzen duten nodoak bilatzen ditut
$erabiltzaileak = $xpath->query($consulta);
#Zenbat nodo bueltatu duen kontsultak aztertzen dugu
$numNodos = $erabiltzaileak->length;

if ($numNodos > 0) {
    $_SESSION["nombreUsuario"] = $user;
    // Obtenemos el rol del XML
    $rol = $erabiltzaileak->item(0)->getElementsByTagName("rol")->item(0)->nodeValue;
    $_SESSION["rol"] = $rol;
    // Convertimos a minúsculas para comparar sin errores
    $rolCheck = strtolower($rol);
    if ($rolCheck == "entrenatzailea") {
        $_SESSION["ikonoa"] = "argazkiak/pelota.jpg";
    } elseif ($rolCheck == "bazkidea") {
        $_SESSION["ikonoa"] = "argazkiak/bazkidea.jpg";
    } elseif ($rolCheck == "admin") {
        $_SESSION["ikonoa"] = "argazkiak/admin.jpg";
    } else {
        // Si no es ninguno de los anteriores, ponemos una por defecto
        $_SESSION["ikonoa"] = "argazkiak/pelota.jpg";
    }

    header("Location: index.php");
    exit();
}
?>