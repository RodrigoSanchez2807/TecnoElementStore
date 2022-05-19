<?php

session_start();

if(!isset($_SESSION["Usuario"]))
{
	header("Location:index.html");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">


	<script type="text/javascript">

	function validar()
	{

		var campo_regClave=document.getElementById("txtclave");
		var campo_regDescripcion=document.getElementById("txtdescripcion");
		var campo_regPrecio=document.getElementById("txtprecio");

		if (campo_regClave.value=="")
		{
			alert("Escriba la clave del producto");
			return;	
		}
	

		if (campo_regDescripcion.value=="")
		{
			alert("Escriba la Descripción del producto");
			return;	
		}

		
		if (campo_regPrecio.value=="")
		{
			alert("Escriba el precio del producto");
			return;	
		}

		document.getElementById("frmregistrousu").submit();	
		
	}	



	</script>


</head>
<body>

<H1> Registre el producto </H1>

<FORM id="frmregistrousu" name="frmregistrousu" method="post" action="registroproducto1.php">

Clave <input type="text" id="txtclave" name="txtclave" placeholder="Clave"/>
<br/><br/>

Descripcion <textarea id="txtdescripcion" name="txtdescripcion"></textarea>
<br/><br/>

Precio <input type="number" min="1" id="txtprecio" name="txtprecio" placeholder="Precio"/>
<br/><br/>

<input type="button" id="btnguardar" name="btnguardar" value="Guardar" onclick="validar()" />
<br/><br/>

<a href="principal.php">
Regresar 
<br/><br/><br/>
</a>

<form id="frmsubirfotos" name="frmsubirfotos" method="post" action="registroproducto1.php" enctype="multipart/form-data">

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

</FORM>


</body>
</html>