<?php

$usuario=$_POST["txtUsuario"];
$nombre=$_POST["txtNombre"];
$contraseña=$_POST["txtContrasena"];
$confirmar=$_POST["txtConfContra"];
$fecha=$_POST["txtFechaNacimiento"];
$sexo=$_POST["sexo"];

If ($contraseña !=$confirmar)
{
    die ("La contraseña y la confirmación no coinciden");
} 
$conexion = mysqli_connect("localhost","root","","bdTienda");

If ($contraseña =="")
{
    die ("Escriba una contraseña válida");
}
else 
{
    $sql="INSERT INTO tblUsuario VALUES('$usuario','$nombre',md5('$contraseña'),'$fecha','$sexo')";
}    


mysqli_query($conexion,$sql);

mysqli_close($conexion);

header("Location: index.html");

?>


