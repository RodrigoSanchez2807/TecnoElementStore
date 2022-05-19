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
	<title>TecnoElement</title>
	<link rel="stylesheet" href="style.css" />
	<meta charset="utf-8">
</head>
<body>
	


<header>
<div style="text-align:right;">
<div class="fixed-top">Bienvenido a TecnoElement: <strong> <?php echo $_SESSION["Usuario"] . "<br />";?> </strong></div>
    

    
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

<td style="border: hidden"> 
<div style="text-align:center;">
<br/><br/>
<H2 align="center"> <u> Soporte </u></H2>
<br/>

</td>

</tr>

<tr>


<td style="border: hidden"> 
<div style="text-align:center;">
<br/>
<font size=3, face="Monaco,arial,verdana">Si necesita ayuda con alguno de nuestros productos, le pedimos llenar el siguiente formulario y le responderemos a la brevedad.</font>
<br/><br/><br/>


<FORM id="frmContacto" name="frmContacto" method="post" action="soporte1.php">

<div style="text-align:center;">

<strong>Nombre:</strong> <input type="text" id="txtNombre" name="txtNombre" placeholder="Escriba su Nombre"/>
<br/><br/>

<strong>Correo:</strong> <input type="text" id="txtCorreo" name="txtCorreo" placeholder="Escriba su Correo"/>
<br/><br/>

<strong>Problema</strong> <textarea id="txtdescripcion" name="txtdescripcion"></textarea>
<br/><br/>

<input type="submit" id="btnEnviar" name="btnEnviar" value="Enviar"  />

<br/><br/>

</FORM>







</body>
</td>
</tr>

</table>

</body>
</html>