<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>luca</title>
</head>
<body>
    <?php
        $nombre = htmlspecialchars($_POST['nombre']);
        $deportes = $_POST['deportes'];
        $numero_deportes = count($deportes);
echo "Nombre: $nombre";
        echo "Cantidad de deportes: $numero_deportes";
    ?>
</body>
</html>
