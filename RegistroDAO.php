<?php
require_once "Conexion.php";

class RegistroDAO {

    private $conexion;

    public function __construct() {
        $db = new Conexion();
        $this->conexion = $db->conectar();
    }

    // =========================
    // GUARDAR
    // =========================
    public function guardar($registro) {
        try {
            $sql = "INSERT INTO registros VALUES (?,?,?,?,?)";
            $stmt = $this->conexion->prepare($sql);

            $resultado = $stmt->execute([
                $registro['id_usuario'],
                $registro['usuario'],
                $registro['correo'],
                $registro['contrasena'],
                $registro['foto']
            ]);

            if ($resultado) {
                echo "TU REGISTRO SE HA GUARDADO";
                return true;
            } else {
                echo "TU REGISTRO NO SE HA GUARDADO";
                return false;
            }

        } catch (PDOException $e) {
            echo "ERROR AL GUARDAR: " . $e->getMessage();
            return false;
        }
    }

    // =========================
    // CONSULTAR
    // =========================
    public function consultar($id_usuario) {
        try {
            $sql = "SELECT * FROM registros WHERE id_usuario = ?";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute([$id_usuario]);

            $registro = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($registro) {
                return $registro;
            } else {
                echo "TU REGISTRO NO SE HA CONSULTADO";
                return false;
            }

        } catch (PDOException $e) {
            echo "ERROR AL CONSULTAR: " . $e->getMessage();
            return false;
        }
    }

    // =========================
    // ACTUALIZAR
    // =========================
    public function actualizar($registro) {
        try {
            $sql = "UPDATE registros 
                    SET usuario=?, correo=?, contrasena=?, foto=? 
                    WHERE id_usuario=?";
            $stmt = $this->conexion->prepare($sql);

            $resultado = $stmt->execute([
                $registro['usuario'],
                $registro['correo'],
                $registro['contrasena'],
                $registro['foto'],
                $registro['id_usuario']
            ]);

            if ($resultado) {
                echo "TU REGISTRO SE HA ACTUALIZADO";
                return true;
            } else {
                echo "TU REGISTRO NO SE HA ACTUALIZADO";
                return false;
            }

        } catch (PDOException $e) {
            echo "ERROR AL ACTUALIZAR: " . $e->getMessage();
            return false;
        }
    }

    // =========================
    // ELIMINAR
    // =========================
    public function eliminar($id_usuario) {
        try {
            $sql = "DELETE FROM registros WHERE id_usuario=?";
            $stmt = $this->conexion->prepare($sql);

            $resultado = $stmt->execute([$id_usuario]);

            if ($resultado) {
                echo "TU REGISTRO SE HA ELIMINADO";
                return true;
            } else {
                echo "TU REGISTRO NO SE HA ELIMINADO";
                return false;
            }

        } catch (PDOException $e) {
            echo "ERROR AL ELIMINAR: " . $e->getMessage();
            return false;
        }
    }
}
?>