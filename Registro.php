<?php

class Registro {

    public $id_usuario;
    public $usuario;
    public $correo;
    public $contrasena;
    public $nombre_empresa;
    public $direccion;
    public $foto;

    // CONSTRUCTOR
    public function __construct(
        $id_usuario = null,
        $usuario = null,
        $correo = null,
        $contrasena = null,
        $nombre_empresa = null,
        $direccion = null,
        $foto = null
    ) {
        $this->id_usuario = $id_usuario;
        $this->usuario = $usuario;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
        $this->nombre_empresa = $nombre_empresa;
        $this->direccion = $direccion;
        $this->foto = $foto;
    }

    // =========================
    // GETTERS Y SETTERS
    // =========================

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    public function getNombre_empresa() {
        return $this->nombre_empresa;
    }

    public function setNombre_empresa($nombre_empresa) {
        $this->nombre_empresa = $nombre_empresa;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }
}

?>