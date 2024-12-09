<?php
class Cliente {
    public $id;
    public $nombre;
    public $correo_electronico;
    public $telefono;
    public $direccion;

    public function __construct($id, $nombre, $correo, $telefono, $direccion) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo_electronico = $correo;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }
}
?>
