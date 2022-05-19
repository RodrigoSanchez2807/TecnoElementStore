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

<br/><br/>
<H2 align="center"> <u> Revisar compras </u></H2>


<H3 align="center"> Estas son las compras que se han realizado: </H3>

<div style="text-align:center;">
<br/><br/>

<?php

$conexion = mysqli_connect("localhost","root","","bdTienda");

$sql="Select * from tblCompras inner join tblRegistroProducto on tblCompras.producto=tblRegistroProducto.regClave";

$resultado=mysqli_query($conexion,$sql);



While ($registro=mysqli_fetch_assoc($resultado))

  {

    echo "ID de la compra: ";	
	
    echo $registro["id"] . "<br />",'Producto: ';

    echo $registro["producto"], $registro["regDescripcion"] . "<br />", 'Cantidad: ';

    echo $registro["cantidad"] . "<br />", 'Precio: $';

    echo $registro["regPrecio"] . "<br />", 'Total: $';

    echo $registro["cantidad"]*$registro["regPrecio"] . "<br />", 'Fecha y hora: ';

    echo $registro["fechaHora"] . "<br />", 'Usuario: ';

    echo $registro["usuario"] . "<br />";

    echo "<br /><br />";

  }

 mysqli_close($conexion);

?>

<a href="principal.php">
Página principal
</a>
<br/><br/><br/><br/>


</body>
</html>