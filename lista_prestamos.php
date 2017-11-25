<?php
include "seguridad.php";
?>
 <!DOCTYPE html>
 <html lang="es">
    <head>
	 <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<meta charset="iso-8859-1">
	<title>Usuarios</title>
	</head>
	 <body>
       <form method="get" name="form2" id="form2">
       
          Introduzca nombre de usuario o titulo de libro.
     
            <input name="nombres" type="text" id="nombres" size="" autocomplete="off" />
			
            <button type="submit" name="consultar" id="consultar">Consultar</button><br><br>
            <a href="lista_prestamos.php">Nueva Busqueda /</a> <a href="mostrar_prestamos.php"> Mostrar todos /</a> <a href="prestamo.php">Agregar Prestamo</a>
          
       
    </form>
	<a href="index.html">Regresar</a>
	<br>
<?php 
	if(isset($_GET['consultar']))
	{
		if($_GET['nombres'] == ""){
		//echo "Debe Introducir el N&uacute;mero de Control para Realizar la B&uacute;squeda";
		?>
<script type="text/javascript">
			alert("Debe introducir  nombre o titulo para realizar la búsqueda");	
		</script>
<?php
		} else
		{
		
		include('conexion.php');
	
       
		$nom = $_GET['nombres'];
		
		$sql="Select * from usuario inner join prestamo inner join libro on usuario.id_usuario=prestamo.id_usuario and prestamo.id_libro=libro.id_libro where prestamo.id_usuario like '%$nom%' or prestamo.id_libro like '%$nom%'";
		 
		$consulta=mysqli_query($conn,$sql);
		$nf=mysqli_num_rows($consulta);
		if($nf!=0)		
		{?>
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

	<td><a href="reporte_libro.php?id_usuario=<?php echo $prestamo['id_usuario']?>">Imprimir</a></td>
  </tr>
  <?php 		
         } // for de consulta general
        mysqli_close($conn)?>
</table>
<p>
  <?php }// if de nf	
		else{
			//echo "No Existe en la Base de Datos";?>
  <script type="text/javascript">
			alert("No existe en la base de datos");
  </script>
  
  <?php 
			}
      	 }// else
	}// si existe consultar 
	?>
  </tr>
  </table>
   </body>
<html>