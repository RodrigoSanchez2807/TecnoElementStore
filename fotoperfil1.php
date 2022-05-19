<?php

session_start();

if(!isset($_SESSION["Usuario"]))
{
	header("Location: index.html");
}


$temporal=$_FILES["btnexaminar"]["tmp_name"];
move_uploaded_file($temporal, "perfil/".$_SESSION["Usuario"].".jpg");
header("Location: principal.php");
?>

