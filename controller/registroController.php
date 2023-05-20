<?php
require_once 'registroModel.php';
class RegistroController {
    public function registrarUsuario() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario de registro
            $nombre = $_POST['nombre'];
            $anio_nacimiento = $_POST['anio_nacimiento'];
            $sexo = $_POST['sexo'];
            $pais = $_POST['pais'];
            $ciudad = $_POST['ciudad'];
            $correo = $_POST['correo'];
            $contrasenia = $_POST['contrasenia'];
            $confirmar_contrasenia = $_POST['confirmar_contrasenia'];
            $nombre_usuario = $_POST['nombre_usuario'];

            // Validar que las contraseñas coincidan
            if ($contrasenia !== $confirmar_contrasenia) {
                $this->mostrarError('Las contraseñas no coinciden');
                return;
            }

            // Verificar si se ha cargado una foto de perfil
            if ($_FILES['foto_perfil']['error'] === UPLOAD_ERR_OK) {
                $foto_perfil = $_FILES['foto_perfil']['name'];
                $foto_perfil_tmp = $_FILES['foto_perfil']['tmp_name'];

                // Mover la foto de perfil a una carpeta destino
                move_uploaded_file($foto_perfil_tmp, '../public/imagenes/perfiles/' . $foto_perfil);
            } else {
                $foto_perfil = ''; // Si no se cargó una foto, establecer un valor predeterminado
            }

            // Crear una instancia del modelo y guardar los datos en la base de datos
            $modelo = new UsuarioModelo();
            $modelo->guardarUsuario([
                'nombre' => $nombre,
                'anio_nacimiento' => $anio_nacimiento,
                'sexo' => $sexo,
                'pais' => $pais,
                'ciudad' => $ciudad,
                'correo' => $correo,
                'contrasenia' => $contrasenia,
                'nombre_usuario' => $nombre_usuario,
                'foto_perfil' => $foto_perfil
            ]);

            // Enviar correo de validación
            $modelo->enviarCorreoValidacion($correo);

            // Redirigir a una página de éxito
            header('Location: exito.php');
            exit;
        } else {
            $this->mostrarError('Método no permitido');
        }
    }
    private function mostrarError($mensaje) {
        // Mostrar página de error con el mensaje correspondiente
        echo "Error: $mensaje";
    }
}
// Crear una instancia del controlador y registrar el usuario
$controller = new RegistroController();
$controller->registrarUsuario();
?>
