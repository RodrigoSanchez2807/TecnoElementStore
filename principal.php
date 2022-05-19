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


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" href="estilos.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">	
	<meta charset="utf-8">
	<link rel="icon" href="imagenes/logo.ico">
</head>

<body>
	<div class="container">
		<nav class="main">
		<!-- Barra menu y logo-->
			<img src="imagenes/logo.jpg" alt="Logo de TecnoElement" class="logo">
			<ul class="menu">
				<li>
					<a class="active" href="comprar.php">Comprar ahora</a>
				</li>

				<li>
					<a href="revisar_compras.php">Compras Realizadas</a>
				</li>

				<li>
					<a href="fotoperfil.php">Cambiar foto de perfil</a>
				</li>

				<li>
					<a href="cambio_contrasena.php">Cambiar Contraseña</a>
				</li>

				<li>
					<a href="registroproducto.php">Registro Producto</a>
				</li>

			</ul>

			<ul class="menu-right">
				<li>
					<a href="index.html">
						<i class="fas fa-sign-out-alt">Salir</i>
					</a>
				</li>
			</ul>

			<!--Datos de usuario-->
			<div class="user">Bienvenido a TecnoElement: <strong> <?php echo $_SESSION["Usuario"] . "<br />"; ?> </strong>				
				<?php echo "<img src=perfil/" . $_SESSION["Usuario"] . ".jpg class = profile><br /><br />"; ?>
			</div>

		</nav>
	</div>

	<hr>

	<div class="shop">
		<H1>Nuestro catálogo</H1>
		<div class="seccion">
		<?php
			$conexion = mysqli_connect("localhost", "root", "", "bdTienda");
			$sql = "SELECT *, foto FROM tblRegistroProducto P INNER JOIN tblfotos F ON P.regClave=F.clave";
			$resultado = mysqli_query($conexion, $sql);
		/*Informacion del producto */
			while ($renglon = mysqli_fetch_assoc($resultado)) {
				/*echo "<br/>";*/
				echo "Clave del producto: ";
				echo $renglon["regClave"] . "<br />";
				echo $renglon["regDescripcion"] . "<br />", "Precio: $";
				echo $renglon["regPrecio"] .  "<br />";
				echo "<br/>";
				echo "<img class=fotos src='fotos/" . $renglon["foto"] . " ' >"; /*Fotos de productos*/
				
		?>
		

		<!--BTN Recomendar-->
		<form class="recomendar" id="frmrecomendar" name="frmrecomendar" method="POST" action="recomendar.php">
			<input type="submit" id="btnrecomendar" name="btnrecomendar" value="Recomendar" class="btn-recomendar" />
			<input type="hidden" id="txtrecomendar" name="txtrecomendar" readonly="" value=<?php echo $renglon["regClave"]; ?> />
			<br /><br />

			<?php
				$conexion = mysqli_connect("localhost", "root", "", "bdTienda");
				$sql = "SELECT COUNT(*) from tblRecomendaciones where recClaveProducto='" . $renglon["regClave"] . "'";
				$resultado1 = mysqli_query($conexion, $sql);
				$renglon1 = mysqli_fetch_row($resultado1);
				echo "Recomendaciones: ";
				echo $renglon1[0];
			?>
		</form>
		</div>
	</div>

	<?php
	}
	mysqli_close($conexion);
	?>

	<hr>

	<footer>
		<div id="copyright">Copyright&copy; 2021 - Página creada por <span>Rodrigo Sánchez López</span>  - Todos los derechos reservados.</div>
	</footer>
</body>

</html>