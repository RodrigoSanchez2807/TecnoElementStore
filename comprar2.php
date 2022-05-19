<?php

session_start();

if(!isset($_SESSION["Usuario"]))
{
	header("Location: index.html");
}


$producto=$_POST["txtproducto"];
$usuario=$_SESSION["Usuario"];
$cantidad=$_POST["txtcantidad"];

$conexion = mysqli_connect("localhost","root","","bdTienda");
$sql="INSERT INTO tblCompras VALUES('','$producto','$usuario','$cantidad', now())";
mysqli_query($conexion,$sql);
mysqli_close($conexion);

header("Location: principal.php");

?>


