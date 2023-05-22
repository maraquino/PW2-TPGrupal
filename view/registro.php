<!DOCTYPE html>
<html>
<head>
    <title>Registro de usuario</title>
</head>
<body>
<h2>Registro de usuario</h2>
<form action="../controller/registroController.php" method="post" enctype="multipart/form-data">
    <label>Nombre completo:</label>
    <input type="text" name="nombre" required><br>

    <label>Año de nacimiento:</label>
    <input type="text" name="anio_nacimiento" required><br>

    <label>Sexo:</label>
    <select name="sexo" required>
        <option value="">Seleccionar</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        <option value="Prefiero no cargarlo">Prefiero no cargarlo</option>
    </select><br>
    <label>País:</label>
    <input type="text" name="pais" required><br>

    <label>Ciudad:</label>
    <input type="text" name="ciudad" required><br>

    <label>Correo electrónico:</label>
    <input type="email" name="correo" required><br>

    <label>Contraseña:</label>
    <input type="password" name="contrasenia" required><br>

    <label>Repetir contraseña:</label>
    <input type="password" name="confirmar_contrasenia" required><br>

    <label>Nombre de usuario:</label>
    <input type="text" name="nombre_usuario" required><br>

    <label>Foto de perfil:</label>
    <input type="file" name="foto_perfil"><br>

    <input type="submit" value="Registrarse">
</form>
</body>
</html>
