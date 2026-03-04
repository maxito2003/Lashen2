<?php

class Login {

    public $id_usuario;
    public $usuario;
    public $contrasena;

    // Constructor con parámetros
    public function __construct($id_usuario = null, $usuario = null, $contrasena = null) {
        $this->id_usuario = $id_usuario;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
    }

}

?>