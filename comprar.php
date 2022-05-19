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
	<title>Comprar</title>
	<link rel="stylesheet" href="style.css" />
	<meta charset="utf-8">
</head>
<body>


<header>

    <div style="text-align:right;">

     Bienvenido a TecnoElement: <strong> <?php echo $_SESSION["Usuario"] . "<br />";?> </strong>
     <?php echo "<img src=perfil/".$_SESSION["Usuario"].".jpg width=7% height=20% ><br /><br />"; ?>

	 
	</div>
     

	 
		

		<div id="main_title">
				<br/><br/><br/>
	<a title="TecnoElement" href="principal.php"><img src="imagenes/logo.jpg" alt="Logo de TecnoElement" id="logo" width="350" height="230"/></a>
			
		</div>
		
		<nav>
			<ul>
				
				<li><a href="comprar.php">Comprar ahora</a></li> 
				<li><a href="revisar_compras.php">Compras Realizadas</a></li>
				<li><a href="fotoperfil.php">Cambiar foto de perfil</a></li>
                <li><a href="cambio_contrasena.php">Cambiar Contraseña</a></li>
				<li><a href="soporte.php">Soporte</a></li>
	            <li><a href="index.html">Cerrar Sesión</a></li>

			</ul>
		</nav>
		
	</header>

	<style>
body 
{

  height:100%;
  width:99%;
  background-color: #ffdd90;
  background-image: url("imagenes/fondo.png");

}
</style>

<table width="100%" border="0";>

<tr>


<td> 
<H1 align="center"><u>Comprar</u> </H1>

<H4 align="center">Por favor, escribe la clave del producto que deseas comprar. </H4>
<br/><br/>
</td>


</tr>






<td>              
<div style="text-align:center;">

<FORM id="frmcompra" name="frmcompra" method="post" action="comprar1.php">

Producto <input type="text" id="txtproducto" name="txtproducto" placeholder="Escriba el producto"/>
<br/><br/>

Cantidad <input type="number" min="1" id="txtcantidad" name="txtcantidad" placeholder="Cantidad deseada"/>
<br/><br/>

<input type="submit" id="btnenviar" name="btnenviar" value="Enviar"/>

<br/><br/>

<a href="principal.php">
Regresar 
</a>

</FORM>

</td>

</body>
</html>