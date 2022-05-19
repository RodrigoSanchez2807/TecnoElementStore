<?php

session_start();

if(!isset($_SESSION["Usuario"]))
{
	header("Location: index.html");
}

$clave=$_POST["txtproducto"];
$nombre=$_FILES["btnseleccionar"]["name"];
$temporal=$_FILES["btnseleccionar"]["tmp_name"];
move_uploaded_file($temporal, "fotos/".$nombre);

$conexion = mysqli_connect("localhost","root","","bdTienda");

If ($clave =="")
{
    die ("Escriba la clave del producto");
}
else 
{
	$sql="INSERT INTO tblfotos VALUES('$clave','$nombre')";
	mysqli_query($conexion,$sql);

mysqli_close($conexion);

header("Location: principal.php");
}




?>