<?php
include 'conexion/cone.php';

if(isset($_POST['consulta'])) {
    $consulta = $_POST['consulta'];
    
    // consulta en la base de datos
    $sql = "SELECT * FROM noticias WHERE titulo LIKE '%$consulta%' OR contenido LIKE '%$consulta%'";
    $result = $conn->query($sql);
    
    // Trae los resultados de la búsqueda
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<h2>" . $row["titulo"] . "</h2>";
            echo "<p>" . $row["contenido"] . "</p>";
            echo "<img src='" . $row["imagen"] . "' alt='Imagen de la noticia'>";
            echo "<p>Fecha de publicación: " . $row["fecha_publicacion"] . "</p>";
        }
    } else {
        echo "No se encontraron resultados";
    }
    
    // 
    $conn->close();
}
?>
