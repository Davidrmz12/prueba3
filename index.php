<?php
include 'conexion/cone.php';

// consulta para traer las noticias y ordenarlas por fecha de publicacion
$sql = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="icon" href="imagenes/logos/logo.ico">
    <title>Noticias</title>
</head>

<body>    
    <! -- codigo para la barra de navegacion -- >
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <a class="navbar-brand" href="index.php">
                    <img src="imagenes/logos/logo2.png" alt="Noticias" style="max-height: 40px;">
                </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Noticias</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="subir_noticia.php">Agregar Noticias</a>
                    </li>
                </ul>
            <form id="form-busqueda" class="d-flex">
                <input id="campo-busqueda" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            </div>
        </div>
    </nav>
            <! -- codigo con el cual centramos el contenido que traemos en el codigo de la consulta
            de la base de datos-- >
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php
                //consulta de la base de datos donde nos imprime la informacion de base de datos
                //usamos un if para poder validar la informacion si no encontramos datos
                //traera un mensaje de que no tenemos noticias
                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='text-center'>";
                        echo "<h2>" . $row["titulo"] . "</h2>";
                        echo "<img src='" . $row["imagen"] . "' class='img-fluid' alt='Imagen de la noticia'>";
                        echo "<p>" . $row["contenido"] . "</p>";
                        echo "<p class='text-end'>Fecha de publicación: " . $row["fecha_publicacion"] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "No Cuentas con noticas actualmente";
                }
                ?>
            </div>
        </div>
    </div>

    <script src="estilos/js/bootstrap.min.js"></script>
</body>
</html>
