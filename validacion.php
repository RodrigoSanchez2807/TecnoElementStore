<?php

$usuario=$_POST["txtUsuario"];
$contraseña=$_POST["txtContrasena"];

$conexion = mysqli_connect("localhost","root","","bdTienda");

$sql="SELECT UsuUsuario, UsuNombre From tblUsuario where UsuUsuario='$usuario' and UsuContrasena=md5('$contraseña')";

$resultado=mysqli_query($conexion,$sql);

If ($registro=mysqli_fetch_assoc($resultado))       /*guarda el resutado y lo separa en campos*/
{
    session_start();
   
    $_SESSION["Usuario"]=$registro["UsuUsuario"];
    $_SESSION["Nombre"]=$registro["UsuNombre"];

    mysqli_close($conexion);

header("Location: principal.php");
}
else
{
    die ("Usuario o contraseña incorrectos");
}
?>