<?php
require '../controllers/ClienteController.php';

// Ejemplo de una ruta básica para insertar un cliente
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo_electronico'];
    $telefono = $_POST['telefono'] ?? null;
    $direccion = $_POST['direccion'] ?? null;

    $resultado = ClienteController::insertarCliente($nombre, $correo, $telefono, $direccion);
    echo $resultado;
}
?>
