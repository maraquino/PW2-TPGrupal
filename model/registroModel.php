<?php
require_once 'DatabaseConnect.php';

class UsuarioModelo {
    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::obtenerConexion();
    }

    public function guardarUsuario($datosUsuario) {
        $query = "INSERT INTO usuarios (nombre, anio_nacimiento, sexo, pais, ciudad, correo, contrasenia, nombre_usuario, foto_perfil) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute([
            $datosUsuario['nombre'],
            $datosUsuario['anio_nacimiento'],
            $datosUsuario['sexo'],
            $datosUsuario['pais'],
            $datosUsuario['ciudad'],
            $datosUsuario['correo'],
            $datosUsuario['contrasenia'],
            $datosUsuario['nombre_usuario'],
            $datosUsuario['foto_perfil']
        ]);
    }

    public function enviarCorreoValidacion($correo) {
        $asunto = "Validación de cuenta";
        $mensaje = "Haga clic en el siguiente enlace para validar su cuenta: http://www.example.com/validar-cuenta";
        $headers = "From: info@example.com";
        mail($correo, $asunto, $mensaje, $headers);
    }
}
?>
