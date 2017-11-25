 <!DOCTYPE html>
 <html lang="es">
    <head>
	 <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<title>Mostrar usuarios</title>
	</head>
	 <body>     
	<?php 
	include('conexion.php');
	      $sql="Select * from usuario";
		 $consulta=mysqli_query($conn,$sql);
		$nf=mysqli_num_rows($consulta);
		?>
		
	
<table border="1">
  <tr >
    <th>Id</th>
    <th>Matricula</th>
    <th>Nombre</th>
    <th>Modificar</th>
    <th>Eliminar</th>
	<th>Imprimir</th>
  </tr>
  <?php 	for ($i=0;$i<$nf;$i++)
        {
            $usuario=mysqli_fetch_array($consulta);
            ?>
  <tr> 
	<td><?php echo $usuario['id_usuario'];?></td>	
	<td><?php echo $usuario['matricula'];?></td>	
    <td><?php echo $usuario['nombre'];?>   <?php echo $usuario['apellidos'];?></td>
    
	
<td><a href="usuario_actualizar.php?id_usuario=<?php echo $usuario['id_usuario']?>&matricula=<?php echo $usuario['matricula']?>&nombre=<? echo $usuario['nombre']?>&apellidos=<?php echo $usuario['apellidos']?>">Modificar</a></td>
	
	
 <td><a href="eliminar_usuario.php?id_usuario=<?php echo $usuario['id_usuario']?>">Eliminar</a></td>
 
 <td><a href="reporte_usuarios.php?id_usuario=<?php echo $usuario['id_usuario']?>">Imprimir</a></td>
 
  </tr>
  <?php 		
         } // for de consulta general
        mysqli_close($conn)?>
		
</table>
<br>
<a href="index.html" target="_blank">Regresar</a>	
   </body>
</html>