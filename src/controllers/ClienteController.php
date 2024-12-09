<?php
require '../config/db_config.php';

class ClienteController {
    public static function insertarCliente($nombre, $correo, $telefono, $direccion) {
        global $conn;

        try {
            $sql = "INSERT INTO clientes (nombre, correo_electronico, telefono, direccion) VALUES (:nombre, :correo, :telefono, :direccion)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':direccion', $direccion);

            $stmt->execute();
            return "Cliente agregado correctamente.";
        } catch (PDOException $e) {
            return "Error al insertar cliente: " . $e->getMessage();
        }
    }
}
