<?php
require_once "Conexion.php";

class EmpresaDAO {

    private $conexion;

    public function __construct() {
        $db = new Conexion();
        $this->conexion = $db->conectar();
    }

    // GUARDAR
    public function guardar($empresa) {
        try {
            $sql = "INSERT INTO empresa VALUES (?,?,?,?,?,?)";
            $stmt = $this->conexion->prepare($sql);

            $resultado = $stmt->execute([
                $empresa['id_empresa'],
                $empresa['nombre_empresa'],
                $empresa['propietario'],
                $empresa['direccion'],
                $empresa['egresos'],
                $empresa['fecha_egreso']
            ]);

            if ($resultado) {
                echo "TU EMPRESA SE HA GUARDADO";
                return true;
            } else {
                echo "TU EMPRESA NO SE HA GUARDADO";
                return false;
            }

        } catch (PDOException $e) {
            echo "ERROR AL GUARDAR: " . $e->getMessage();
            return false;
        }
    }

    // CONSULTAR
    public function consultar($id_empresa) {
        try {
            $sql = "SELECT * FROM empresa WHERE id_empresa = ?";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute([$id_empresa]);

            $empresa = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($empresa) {
                return $empresa;
            } else {
                echo "TU EMPRESA NO SE HA CONSULTADO";
                return false;
            }

        } catch (PDOException $e) {
            echo "ERROR AL CONSULTAR: " . $e->getMessage();
            return false;
        }
    }

    // ACTUALIZAR
    public function actualizar($empresa) {
        try {
            $sql = "UPDATE empresa 
                    SET nombre_empresa=?, propietario=?, direccion=?, egresos=?, fecha_egreso=? 
                    WHERE id_empresa=?";
            $stmt = $this->conexion->prepare($sql);

            $resultado = $stmt->execute([
                $empresa['nombre_empresa'],
                $empresa['propietario'],
                $empresa['direccion'],
                $empresa['egresos'],
                $empresa['fecha_egreso'],
                $empresa['id_empresa']
            ]);

            if ($resultado) {
                echo "TU EMPRESA SE HA ACTUALIZADO";
                return true;
            } else {
                echo "TU EMPRESA NO SE HA ACTUALIZADO";
                return false;
            }

        } catch (PDOException $e) {
            echo "ERROR AL ACTUALIZAR: " . $e->getMessage();
            return false;
        }
    }

    // ELIMINAR
    public function eliminar($id_empresa) {
        try {
            $sql = "DELETE FROM empresa WHERE id_empresa=?";
            $stmt = $this->conexion->prepare($sql);

            $resultado = $stmt->execute([$id_empresa]);

            if ($resultado) {
                echo "TU EMPRESA SE HA ELIMINADO";
                return true;
            } else {
                echo "TU EMPRESA NO SE HA ELIMINADO";
                return false;
            }

        } catch (PDOException $e) {
            echo "ERROR AL ELIMINAR: " . $e->getMessage();
            return false;
        }
    }
}
?>