<?php
$host = 'localhost:8888'; // Dirección del servidor MySQL
$dbname = 'paqueteria'; // Nombre de tu base de datos
$username = 'root'; // Usuario de la base de datos
$password = 'root'; // Contraseña del usuario

// Intentar la conexión
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configurar PDO para que lance excepciones en caso de error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
?>
