<?php
require_once "Conexion.php";

class LoginDAO {

    private $conexion;

    public function __construct() {
        $db = new Conexion();
        $this->conexion = $db->conectar();
    }

    public function validar($usuario, $contrasena) {

        $sql = "SELECT * FROM registros WHERE usuario = ? AND contrasena = ?";

        try {
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute([$usuario, $contrasena]);

            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($resultado) {
                return $resultado; // Usuario encontrado
            } else {
                return false; // Usuario no encontrado
            }

        } catch (PDOException $e) {
            die("Error en login: " . $e->getMessage());
        }
    }
}


// =======================
// EJEMPLO DE USO DIRECTO
// =======================

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $loginDAO = new LoginDAO();
    $usuarioValido = $loginDAO->validar($usuario, $contrasena);

    if ($usuarioValido) {
        echo "BIENVENIDO " . $usuarioValido["usuario"];
    } else {
        echo "USUARIO O CONTRASEÑA INCORRECTOS";
    }
}
?>