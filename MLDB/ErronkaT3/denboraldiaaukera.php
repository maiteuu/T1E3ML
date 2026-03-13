<?php
session_start();
$_SESSION["generoa"]=$_POST["generoak"];
header("Location:index.php");
header("Location:Klasifikazioa.php");
?>