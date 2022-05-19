<?php

session_start();

if(!isset($_SESSION["Usuario"]))
{
	/*header("Location:index.html");*/
}

$contAct=$_POST["txtContActual"];
$contNva=$_POST["txtContNueva"];
$confCont=$_POST["txtConfContrasena"];

$conexion = mysqli_connect("localhost","root","","bdTienda");

$sql="SELECT UsuContrasena From tblUsuario where UsuContrasena=md5('$contAct') and UsuUsuario='".$_SESSION["Usuario"]."' ";
$resultado=mysqli_query($conexion,$sql);
if ($registro=mysqli_fetch_assoc($resultado))      
{

if ($contNva!=$confCont)
{
    die ("La contraseña y la confirmación no coinciden");
} 

If ($contNva =="")
{
    die ("Escriba una contraseña válida");
}
else
{
$sql2="UPDATE tblUsuario SET UsuContrasena=md5('$contNva') WHERE UsuUsuario='".$_SESSION["Usuario"]."'";
mysqli_query($conexion,$sql2);
}
}

else 
{
    
    die("Contraseña actual incorrecta");
    
    /*$sql="SELECT COUNT(*) FROM tblUsuario WHERE UsuContraseña=$contNva and UsuUsuario=$_SESSION";*/
}





header("Location: principal.php");

mysqli_close($conexion);



?>