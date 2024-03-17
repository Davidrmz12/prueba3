<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="icon" href="imagenes/logos/logo.ico">
    <title>Cargar Noticias</title>
</head>
<body>
            <! -- codigo para la barra de navegacion -- >
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <a class="navbar-brand" href="index.php">
                    <img src="imagenes/logos/logo2.png" alt="Noticias" style="max-height: 40px; width: 40px;">
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
            </div>
        </div>
    </nav>
            <?php         
                include 'conexion/cone.php';
                // verificacion de formulario enviado
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // verificacion de si los datos fueron enviados
                    if(isset($_POST['titulo']) && isset($_POST['contenido']) && isset($_FILES['imagen'])) {
                        $titulo = $_POST['titulo'];
                        $contenido = $_POST['contenido'];
                        $imagen = $_FILES['imagen']['name'];
                        $imagen_temporal = $_FILES['imagen']['tmp_name'];
                        $ruta_destino = "imagenes/" . $imagen;
                        move_uploaded_file($imagen_temporal, $ruta_destino);
                        $sql = "INSERT INTO noticias (titulo, contenido, imagen) VALUES ('$titulo', '$contenido', '$ruta_destino')";
                        if ($conn->query($sql) === TRUE) {
                            // despues del envio de la informacion llevara al usuario a la pagian principal para ver su publicacion
                            header("Location: index.php");
                            exit();
                        } else {
                            echo "Error al Agregar Noticia: " . $conn->error;
                        }
                    } else {
                        echo "Datos del formulario no recibidos";
                    }
                }
                $conn->close();
            ?>
                        <! -- codigo para el formulario -- >
        <form action="subir_noticia.php" method="post" enctype="multipart/form-data" style="width:35% ; margin:0 auto">
                <fieldset>
                    <legend class="text-center text success">CREAR NOTICIA</legend>
                    <div class="form-group">
                        <label for="titulo">Título:</label><br>
                        <input type="t ext" class="form-control" id="titulo" name="titulo" required><br><br>
                    </div>
                    <div class="form-group">
                        <label for="contenido">Contenido:</label><br>
                        <textarea id="contenido"  class="form-control" name="contenido" rows="4" required></textarea><br><br>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen:</label><br>
                        <input type="file" class="form-control" id="imagen" name="imagen"><br><br>
                    </div> 
                    <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="Agregar Noticia">
                    </div>            
                </fieldset>
        </form>
</body>
</html>

