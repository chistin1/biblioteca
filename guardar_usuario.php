




<?php

include "conexion.php";
// Revisar la conexión y envia un mensaje si no se puede conectar
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
} 

//Recibir los datos desde el formulario por medio del metodo POST
//Guarda estos datos en variables.
$matricula=$_POST['matricula'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$fech_nac=$_POST['fech_nac'];
$sexo=$_POST['sexo'];

//Se realiza la consulta para insertar los datos.
$sql = "INSERT INTO usuario VALUES('0', '$matricula', '$nombre', '$apellidos', '$correo', '$fech_nac', '$sexo')";

//Si la consulta funciona correctamente enviará una alerta de confirmación
if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">alert('registro exitoso');location.href='usuario.html';</script>";
//Si la consulta falla mandará un mensaje de error
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//Se cierra la conexión a la bd
$conn->close();
?>