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
	  
	    <form id="libro" name="libro" method="post" action="guardar_libro.php" class="form-validation" >
		<h1>Libros</h1>
		<legend><span class="number">1</span>Información de Libros</legend>
		<fieldset>
	    
		 ISBN:<br>
         <input type="text" name="isbn" placeholder="isbn" required>
		
		 <br>
		 Título:<br>
         <input type="text" name="titulo" placeholder="Título" required>
		 <br>
		 
		 Autor:<br>
<select name="autor">
   
     <?php
           include "conexion.php";
		   $consulta="select * from autor";
                 $resultado=mysqli_query($conn,$consulta);
                    while($lista=mysqli_fetch_array($resultado)){
 	    ?> 
 <option value="<?php echo $lista['id_autor']?>">  <?php echo $lista['nombre_autor']?> <?php echo $lista['apellido_autor']?> </option> 
    <?php } ?>
</select> 
		 <br>
   Editorial:<br>
	<select name="editorial">
   
     <?php
           include "conexion.php";
		   $consulta="select * from editorial";
                 $resultado=mysqli_query($conn,$consulta);
                       
                        while($lista=mysqli_fetch_array($resultado)){
 
	    ?> 
                   <option value="<?php echo $lista['id_editorial']?>">  <?php echo $lista['nombre_editorial']?> </option> 
    <?php } ?>
</select> 
		 <br>
		 Cantidad:<br>
		 <input type="number" name="cantidad" required>
		 <br>		 <br><br>
		 <button type="submit">Guardar</button>
		 <a href="index.html">Regresar</a>
		 </fieldset>
		</form>
	 
	 </body>
<html>