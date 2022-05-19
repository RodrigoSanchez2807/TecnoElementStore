<?php

session_start();

if(!isset($_SESSION["Usuario"]))
{
	header("Location: index.html");
}

$recomendar=$_POST["txtrecomendar"];

$conexion = mysqli_connect("localhost","root","","bdTienda");
$sql="INSERT INTO tblRecomendaciones VALUES('','$recomendar')";
/*echo $sql;*/
mysqli_query($conexion,$sql);
mysqli_close($conexion);
header("Location: principal.php");

?>