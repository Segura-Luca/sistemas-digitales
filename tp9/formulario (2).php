<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>luca</title>
</head>
<body>
    <?php

        $nombre = htmlspecialchars($_POST['nombre']);
        $estudios = htmlspecialchars($_POST['estudios']);
        echo "Nombre: $nombre";  echo "Nivel de estudios: $estudios";
    ?>
</body>
</html>
