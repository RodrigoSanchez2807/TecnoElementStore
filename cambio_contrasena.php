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
    <title>Cambiar contraseña</title>
    <link rel="stylesheet" href="estilos.css" />
	<meta charset="utf-8">
</head>


<body>

<header>

    <div class="container">

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





<table width="100%" border="1";></table>


<div style="text-align:center;">
<tr>
    <td> 
    
    </td>
    <td> 
    <br/><br/>
    <H2 align="center"> <u> Cambiar contraseña </u></H2>
    
    <br/>
    
    </td>
    
</tr>
    

<tr>
    <td>              

    <FORM id="frmCambio_Contrasena" name="frmCambio_Cotrasena" method="post" action="cambio_contrasena1.php">

        Contraseña Actual <input type="password" id="txtContActual" name="txtContActual" placeholder="Escribe tu contraseña actual"/>
        <br/><br/>

        Contraseña Nueva <input type="password" id="txtContNueva" name="txtContNueva" placeholder="Escribe la contraseña nueva"/>
        <br/><br/>

        Confirmar Contraseña <input type="password" id="txtConfContrasena" name="txtConfContrasena" placeholder="Confirma la nueva contraseña"/>
        <br/><br/><br/>

        <input type="submit" id="btnGuardar" name="btnGuardar" value="Guardar" />
        
        <br/><br/><br/> 
        <a href="principal.php">
        Regresar 
        </a>


    </FORM>

    </td>


    <td> 
        
    </td>

</tr>

</table>


</body>
</html>