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



<?php

$producto=$_POST["txtproducto"];
$cantidad=$_POST["txtcantidad"];

$conexion = mysqli_connect("localhost","root","","bdTienda");

$sql="Select * from tblRegistroProducto where regClave='$producto'";

$resultado=mysqli_query($conexion,$sql);

$registro=mysqli_fetch_assoc($resultado);

?>

<div style="text-align:center;">

<FORM id="frmcomprar" name="frmcomprar" method="POST" action="comprar2.php">

<br/><br/>
<H2 align="center"> <u> Confirmar la compra </u></H2>

<br/><br/>

Producto <input type="text" id="txtproducto" name="txtproducto" readonly="" value=<?php echo $registro["regClave"];?> />
<br/><br/>

Descripción <input type="text" id="txtdescripcion" name="txtdescripcion" readonly="" value=<?php echo $registro["regDescripcion"];?> />
<br/><br/>

Precio <input type="text" id="txtprecio" name="txtprecio" readonly="" value=<?php echo $registro["regPrecio"];?> />
<br/><br/>

Cantidad <input type="number" min="1" id="txtcantidad" name="txtcantidad" readonly="" value=<?php echo $cantidad;?> />
<br/><br/>

Total <input type="text" id="txttotal" name="txttotal" readonly="" value=<?php echo $cantidad*$registro["regPrecio"];?> />
<br/><br/>

<input type="submit" id="btnconfirmar" name="btnconfirmar" value="Confirmar" />

<input type="button" id="btncancelar" name="btncancelar" value="Cancelar" onclick="location.href='comprar.php';" />

<br/><br/><br/><br/>

</FORM>


</body>
</html>





























