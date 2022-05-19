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

<a href="ventas.php">
Regresar 
</a>

</td>


<td>

<?php

$producto=$_POST["txtproducto"];

$conexion = mysqli_connect("localhost","root","","bdTienda");

$sql="Select regClave,regDescripcion,regPrecio, SUM(cantidad) as total from tblCompras inner join tblRegistroProducto on tblCompras.producto=tblRegistroProducto.regClave where regClave='$producto' ";

$resultado=mysqli_query($conexion,$sql);

if ($renglon=mysqli_fetch_assoc($resultado))
{
echo "Clave " .$renglon["regClave"]. "<br />";
echo "Descripción " .$renglon["regDescripcion"]. "<br />";
echo "Total Ventas " .$renglon["total"]. "<br />";
echo "Total importe " .$renglon["regPrecio"]*$renglon["total"]. "<br />";
}

mysqli_close($conexion);

?>

</td>



</tr>


</table>


</body>
</html>