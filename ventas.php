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

<table width="100%" border="1";>

<tr>
    <td> 
    <img src="imagenes/Logo.jpg" width="20%" height="40%">
    </td>
    <td> 
    
    Bienvenido a Oscarnitas
    <br/><br/><br/><br/> 
    
    </td>
    
</tr>
    





<tr>
    

<td>

<a href="principal.php">
Regresar 
</a>

</td>


<td> 

<FORM id="frmVentas" name="frmVentas" method="post" action="ventas1.php">
Producto <input type="text" id="txtproducto" name="txtproducto" placeholder="Escriba el producto"/>
<br/><br/>
<input type="submit" id="btnImprimir" name="btnImprimir" value="Imprimir"/>
</FORM>

</td>

</tr>

</table>


</body>
</html>