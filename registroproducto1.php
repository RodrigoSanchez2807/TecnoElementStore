<?php

$clave=$_POST["txtclave"];
$descripcion=$_POST["txtdescripcion"];
$precio=$_POST["txtprecio"];

$conexion = mysqli_connect("localhost","root","","bdTienda");

$sql="INSERT INTO tblRegistroProducto VALUES('$clave','$descripcion','$precio')";

mysqli_query($conexion,$sql);

mysqli_close($conexion);

header("Location: principal.php");

/*Fotos*/
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