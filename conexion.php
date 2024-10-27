<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "de_solution";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Contacto guardado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
