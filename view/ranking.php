<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ranking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<header>
    <?php
    include_once("header.php");
    ?>
</header>
<main class="py-5">
    <div class="container px-lg-5 p-4 bg-light rounded-3 " >
        <h2 class="text-center display-3 fw-bold">Ranking actual</h2>
        <br>
        <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Jugador</th>
                <th>Puntaje</th>
                <th>#</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Mar</td>
                <td>150</td>
                <td>1°</td>
            </tr>
            <tr>
                <td>Fitti</td>
                <td>132</td>
                <td>2°</td>
            </tr>
            </tbody>
        </table>
        </div>
        <a href="lobby.php" class="btn btn-outline-primary btn-lg">Volver al lobby</a>
    </div>
</main>
<footer class="py-5 bg-dark footer fixed-bottom">
    <?php
    include_once("footer.php");
    ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

