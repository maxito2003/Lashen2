<?php
class Conexion {

    private $host = "localhost";
    private $db = "lashen";
    private $user = "root";
    private $pass = "";
    private $conexion;

    public function conectar() {
        try {
            $this->conexion = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=utf8",
                $this->user,
                $this->pass
            );

            // Configurar modo de errores
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }

        return $this->conexion;
    }
}
?>