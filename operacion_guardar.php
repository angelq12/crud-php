<?php
include("conexion.php");
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];

$query="INSERT INTO usuarios(nombre,apellido,correo) VALUES ('$nombre','$apellido','$correo')";

$resultado=$conexion->query($query);//ponemos nuestra instruccion que tenemos en la variable query

if($resultado){
		header("location: tabla.php");//guarda los datos directamente a la tabla
	}
	else{
		echo "Insercion no exitosa";
		}

?>