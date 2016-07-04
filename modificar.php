<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>GUARDAR</title>
</head>

<body>
		<center>
    <?php 
			$id=$_REQUEST['Id'];
			include("conexion.php");//primero incluimos el archivo de conexion
			$query="SELECT *FROM usuarios WHERE id='$id'";
			$resultado=$conexion->query($query);
			$row=$resultado->fetch_assoc();
		?>
    	<form action="modificar_proceso.php?Id=<?php  echo $row['id'];?>" method="post">
         
        
        <br/><br/><br/>
        
  <input type="text" required name="nombre" placeholder="Nombre..."  value="<?php echo $row["nombre"]; ?>"/><br/><br/>
  <input type="text" required name="apellido" placeholder="Apellido..."  value="<?php echo $row["apellido"]; ?>"/><br/><br/>
  <input type="text" required name="correo" placeholder="Correo..."  value="<?php echo $row["correo"]; ?>"/><br/><br/>
  <input type="submit" value="Aceptar"/>
        </form>
    </center>
</body>
</html>