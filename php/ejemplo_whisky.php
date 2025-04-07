<?php
// habilia la depuracion de los errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Configuración de la base de datos
$host = 'localhost'; // servidor de base de datos
$user = 'root';     // usuario de la base de datos
$pass = '';         // ingreso de contraseña
$dbname = 'coso';    // nombre de la base de datos " en este caso a crear"

try {
    // Conectar sin especificar la base de datos
    $pdo = new PDO("mysql:host=$host", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    // crea la base de datos si no existiera   ( PDO : PHP Data Object)
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // se crean las tablas si esque no existen  // agregar
    $pdo->exec("CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        email VARCHAR(100) UNIQUE NOT NULL,
        fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    echo "Conexión establecida y base de datos configurada correctamente.";

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
