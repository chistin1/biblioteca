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
       
          Introduzca el nombre del alumno a buscar
     
            <input name="nombres" type="text" id="nombres" size="" autocomplete="off" />
			
            <button type="submit" name="consultar" id="consultar">Consultar</button><br><br>
            <a href="lista_usuarios.php">Nueva Busqueda /</a> <a href="mostrar_usuarios.php"> Mostrar todos /</a> <a href="usuario.html">Agregar Usuario</a>
          
       
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
			alert("Debe introducir  nombre o matricula para realizar la búsqueda");	
		</script>
<?php
		} else
		{
		
		include('conexion.php');
	
       
		$nom = $_GET['nombres'];
		
		$sql="Select * from usuario where nombre like '%$nom%' OR apellidos like '%$nom%' OR matricula like '%$nom%'";
		 
		$consulta=mysqli_query($conn,$sql);
		$nf=mysqli_num_rows($consulta);
		if($nf!=0)		
		{?>
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