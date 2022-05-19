<?php

session_start();

if(!isset($_SESSION["Usuario"]))
{
	header("Location: index.html");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<form id="frmsubirfotos" name="frmsubirfotos" method="post" action="subirfotos1.php" enctype="multipart/form-data">

Clave Producto <input type="text" id="txtproducto" name="txtproducto" placeholder="Clave Producto"/>
<br/><br/><br/>

<input type="file" id="btnseleccionar" name="btnseleccionar" value="Seleccionar" />
<br/><br/><br/><br/>

<input type="submit" id="btnenviar" name="btnEnviar" value="Enviar" />
<br/><br/><br/><br/>

<a href="principal.php">
Regresar 
</a>





</form>



</body>
</html>