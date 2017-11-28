




<?php

include "conexio.php";
// Revisar la conexión y envia un mensaje si no se puede conectar
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
} 

//Recibir los datos desde el formulario por medio del metodo POST
//Guarda estos datos en variables.
$id_usuario=$_POST['id_usuario'];
$id_libro=$_POST['id_libro'];
$fecha_prestamo=$_POST['fecha_prestamo'];
$fecha_entrega=$_POST['fecha_entrega'];


//Se realiza la consulta para insertar los datos.
$sql = "INSERT INTO prestamo VALUES('$id_usuario', '$id_libro', '$fecha_prestamo', '$fecha_entrega','1')";

//Si la consulta funciona correctamente enviará una alerta de confirmación
if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">alert('registro exitoso');location.href='prestamo.php';</script>";
//Si la consulta falla mandará un mensaje de error
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//Se cierra la conexión a la bd
$conn->close();
?>