


<?php
//Gaurdar los datos del servidor y la bd en variable
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Revisar la conexión y envia un mensaje si no se puede conectar
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
} 

//Recibir los datos desde el formulario por medio del metodo POST
//Guarda estos datos en variables.
$isbn=$_POST['isbn'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$editorial=$_POST['editorial'];
$cantidad=$_POST['cantidad'];

//Se realiza la consulta para insertar los datos.
$sql = "INSERT INTO libro VALUES('0', '$isbn', '$titulo', '$autor', '$editorial', '$cantidad')";

//Si la consulta funciona correctamente enviará una alerta de confirmación
if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">alert('registro exitoso');location.href='libro.php';</script>";
//Si la consulta falla mandará un mensaje de error
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//Se cierra la conexión a la bd
$conn->close();
?>