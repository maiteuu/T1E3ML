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
#XPath kontsulta
$consulta = "//erabiltzaileak/pertsona[erabiltzailea='$user' and pasahitza='$pass']";

#Xpath kontsulta betetzen duten nodoak bilatzen ditut
$erabiltzaileak = $xpath->query($consulta);
#Zenbat nodo bueltatu duen kontsultak aztertzen dugu
$numNodos = $erabiltzaileak->length;

if ($numNodos > 0) {
    # Si encuentro datos con ese nombre
    $_SESSION["nombreUsuario"] = $user;
    header(header: "Location:index.php");
} else {
    # Si no encuentro datos con ese nombre
    header(header: "Location:Login.php");
}
?>