<?php

// 1. Conexión a la base de datos (reemplaza con tus credenciales)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "reservas_citas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// 2. Recibir los datos del formulario
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$motivo = $_POST['motivo'];

// 3. Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO citas (nombre, fecha, hora, motivo_consulta) VALUES (?, ?, ?, ?)";

// Crear una sentencia preparada para prevenir inyección SQL
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nombre, $fecha, $hora, $motivo);

// 4. Ejecutar la consulta
if ($stmt->execute()) {
  echo "Cita agendada correctamente.";
  // Puedes redirigir al usuario a una página de confirmación
  // header("Location: confirmacion.html");
  // exit();
} else {
  echo "Error al agendar la cita: " . $stmt->error;
}

// 5. Cerrar la conexión y la sentencia
$stmt->close();
$conn->close();

?>