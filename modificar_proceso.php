<?php
$id=$_REQUEST['Id'];
include("conexion.php");
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];

$query="UPDATE usuarios SET nombre='$nombre',apellido='$apellido',correo='$correo' WHERE id='$id'";

$resultado=$conexion->query($query);//ponemos nuestra instruccion que tenemos en la variable query

if($resultado){
		header("location: tabla.php");//guarda los datos directamente a la tabla
	}
	else{
		echo "Insercion no exitosa";
		}

?>