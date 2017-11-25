<!DOCTYPE html>
 <html lang="es">
    <head>
	 <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<title>Mostrar Prestamo</title>
	</head>
	 <body>     
	<?php 
	include('conexion.php');
	      $sql="Select * from usuario inner join prestamo inner join libro on usuario.id_usuario=prestamo.id_usuario and prestamo.id_libro=libro.id_libro";
		 $consulta=mysqli_query($conn,$sql);
		$nf=mysqli_num_rows($consulta);
		?>
		
	<h1>Regisros de Prestamos</h1>
<table border="1">
  <tr >
    <th>Nombre</th>
    <th>Titulo</th>
    <th>Fecha Prestamo</th>
    <th>Fecha Entrega</th>
    <th>Accion</th>
  </tr>
  <?php 	for ($i=0;$i<$nf;$i++)
        {
            $prestamo=mysqli_fetch_array($consulta);
            ?>
  <tr> 
	<td><?php echo $prestamo['nombre'];?> <?php echo $prestamo['apellidos'];?></td>	
	<td><?php echo $prestamo['titulo'];?></td>	
    <td><?php echo $prestamo['fecha_presatamo'];?></td>
    <td><?php echo $prestamo['fecha_entrega'];?></td>

	<td><a href="reporte_prestamo.php?id_usuario=<?php echo $prestamo['id_usuario']?>&id_libro=<?php echo $prestamo['id_libro']?>">Imprimir</a></td>
  </tr>
  <?php 		
         } // for de consulta general
        mysqli_close($conn)?>
		
</table>
<br>
<a href="index.html" target="_self">Regresar</a>	
   </body>
</html>