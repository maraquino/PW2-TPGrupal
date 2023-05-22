<!DOCTYPE html>
<html>
<head>
    <title>Registro de usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center display-2">¡Creá tu cuenta y divertite jugando!</h2>
    <br>
    <form action="../controller/registroController.php" method="post" enctype="multipart/form-data" class="row g-3">

        <div class="col-md-6">
            <label class="form-label">Nombre completo:</label>
            <input type="text" name="nombre" class="form-control" required placeholder="Ingresar nombre">
        </div>

        <div class="col-md-6">
            <label class="form-label">Fecha de nacimiento:</label>
            <input type="date" name="anio_nacimiento" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Sexo:</label>
            <select name="sexo" class="form-select" required>
                <option value="">Seleccionar sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Prefiero no cargarlo">Prefiero no cargarlo</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">País:</label>
            <select class="form-select" name="pais" required>
                <option value="">Seleccionar país</option>
                <option value="Argentina">Argentina</option>
                <option value="Brasil">Brasil</option>
                <option value="Chile">Chile</option>
            </select>
        </div>


        <div class="col-md-6">
            <label class="form-label">Ciudad:</label>
            <input type="text" name="ciudad" class="form-control" required placeholder="Ingresar ciudad">
        </div>

        <div class="col-md-6">
            <label class="form-label">Correo electrónico:</label>
            <input type="email" name="correo" class="form-control" required placeholder="Ingresar correo">
        </div>

        <div class="col-md-6">
            <label class="form-label">Nombre de usuario:</label>
            <input type="text" name="nombre_usuario" class="form-control" required placeholder="¿Cómo quieres ser reconocido dentro del juego?">
        </div>

        <div class="col-md-6">
            <label class="form-label">Foto de perfil:</label>
            <input type="file" name="foto_perfil" class="form-control">
        </div>

        <div class="col-md-6">
            <label class="form-label">Contraseña:</label>
            <input type="password" name="contrasenia" class="form-control" required placeholder="Ingresar contraseña segura">
        </div>

        <div class="col-md-6">
            <label class="form-label">Repetir contraseña:</label>
            <input type="password" name="confirmar_contrasenia" class="form-control" required placeholder="Confirmar contraseña">
        </div>

        <div class="col-12">
            <div class="d-flex justify-content-between">
                <a href="lobby.php" class="btn btn-outline-primary btn-lg">Volver a inicio</a>
                <input type="submit" value="Registrarse" class="btn btn-primary btn-lg">
            </div>
        </div>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
