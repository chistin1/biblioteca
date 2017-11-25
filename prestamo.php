<?php
include "seguridad.php";
?>
<!DOCTYPE html>

 <html lang="es">
    <head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<title>Libro</title>
	</head>
	 <body>
	  
	    <form id="libro" name="libro" method="post" action="guardar_prestamo.php" class="form-validation" >
		<h1>Prestamos</h1>
		<legend>Captura los Datos del Prestamo</legend>
		<fieldset>
	    			 
		 <span class="number">1</span>Selecciona el nombre del usuario:<br>
<select name="id_usuario">
   
     <?php
           include "conexion.php";
		   $consulta="select * from usuario";
                 $resultado=mysqli_query($conn,$consulta);
                    while($lista=mysqli_fetch_array($resultado)){
 	    ?> 
 <option value="<?php echo $lista['id_usuario']?>">  <?php echo $lista['nombre']?> <?php echo $lista['apellidos']?> </option> 
    <?php } ?>
</select> 
		 <br>
   <span class="number">2</span>Selecciona el Tìtulo del Libro:<br>
	<select name="id_libro">
   
     <?php
           include "conexion.php";
		   $consulta="select * from libro";
                 $resultado=mysqli_query($conn,$consulta);
                       
                        while($lista=mysqli_fetch_array($resultado)){
 
	    ?> 
                   <option value="<?php echo $lista['id_libro']?>">  <?php echo $lista['titulo']?> </option> 
    <?php } ?>
</select> 
		 <br>
		 Fecha de Prestamo:<br>
		 <input type="date" name="fecha_prestamo" required>
		 <br>
         Fecha de Entrega:<br>
		 <input type="date" name="fecha_entrega" required>
		 <br><br>
		 <button type="submit">Guardar</button>
		 <a href="index.html">Regresar</a>
		 </fieldset>
		</form>
	 
	 </body>
<html>