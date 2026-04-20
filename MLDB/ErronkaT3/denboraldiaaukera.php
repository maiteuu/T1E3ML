<?php
session_start();
$_SESSION["denboraldia"]=$_POST["denboraldia"];

if (isset($_SESSION["nombreUsuario"])) {
    header("Location:Klasifikazioa.php");
} else {
    header("Location:Klasifikazioa.php");
}
?>