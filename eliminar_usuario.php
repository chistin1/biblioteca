<?php

$id_usuario=$_GET['id_usuario'];

include "conexion.php";	
mysqli_query($conn,"delete from usuario where id_usuario='$id_usuario'");

echo "<script type=\"text/javascript\">alert('registro borrado exitosamente');
		location.href='mostrar_usuarios.php';</script>";

	
	?>
