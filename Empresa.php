<?php

class Empresa {

    private $id_empresa;
    private $nombre_empresa;
    private $propietario;
    private $direccion;
    private $egresos;
    private $fecha_egreso;

    // =========================
    // GETTERS Y SETTERS
    // =========================

    public function getId_empresa() {
        return $this->id_empresa;
    }

    public function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    public function getNombre_empresa() {
        return $this->nombre_empresa;
    }

    public function setNombre_empresa($nombre_empresa) {
        $this->nombre_empresa = $nombre_empresa;
    }

    public function getPropietario() {
        return $this->propietario;
    }

    public function setPropietario($propietario) {
        $this->propietario = $propietario;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getEgresos() {
        return $this->egresos;
    }

    public function setEgresos($egresos) {
        $this->egresos = $egresos;
    }

    public function getFecha_egreso() {
        return $this->fecha_egreso;
    }

    public function setFecha_egreso($fecha_egreso) {
        $this->fecha_egreso = $fecha_egreso;
    }
}

?>