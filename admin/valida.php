<?php
include 'conexion.php';
session_start();
$user=$_POST['usuario'];
$pass=$_POST['contraseña'];
$conectar=Conectarse();
$consulta="SELECT id_user, user FROM admins WHERE user='$user' and pass='$pass'";
$resultado=mysql_query($consulta,$conectar);

if(mysql_num_rows($resultado))
{
	$array=mysql_fetch_array($resultado);
	$_SESSION['id']=$array['id_user'];
	$_SESSION['user']=$array['user'];
	header("Location:inicio.php");
}
else
{
	
	header("Location:index.php");
}


?>