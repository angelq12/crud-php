<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tabla</title>
</head>

<body>
	<center>
    	<table bgcolor="red" border="3">
        	<thead><!--Cabezera de la tabla-->
            <tr>
            	<th colspan="1"><a href="formulario.php">Nuevo<a/></th>
                <th colspan="5">Lista de Usuarios</th>
            </tr>
            	
            </thead>
            <tbody><!--Cuerpo de la tabla-->
            	<tr>
                	<td>Id</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Correo</td>
                    <td colspan="2">Operaciones</td>
                    
                </tr>
                <?php 
					include("conexion.php");//primero incluimos el archivo de conexion
					$query="SELECT *FROM usuarios";
					$resultado=$conexion->query($query);
					while($row=$resultado->fetch_assoc()){
						?>
                        <tr>
                        	<td><?php echo $row['id'];?></td>
                            <td><?php echo $row['nombre'];?></td>
                            <td><?php echo $row['apellido'];?></td>
                            <td><?php echo $row['correo'];?></td>
                            <td><a href="modificar.php?Id=<?php  echo $row['id'];?>">Modificar</a></td>
                            <td><a href="eliminar.php?Id=<?php echo $row['id'];?>">Eliminar</a></td> 
                        </tr>
                        
                        <?php
						}
				?>
            </tbody>
        </table>
    </center>
</body>
</html>