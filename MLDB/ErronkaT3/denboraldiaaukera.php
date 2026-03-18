<?php
session_start();
$_SESSION["generoa"]=$_POST["generoak"];

if (isset($_SESSION["nombreUsuario"])) {
    header("Location:Klasifikazioa.php");
} else {
    header("Location:index.php");
    header("Location:Klasifikazioa.php");
}
?>