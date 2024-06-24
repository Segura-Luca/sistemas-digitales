<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>luca</title>
</head>
<body>
    <?php
        $nombre = htmlspecialchars($_POST['nombre']);
        $edad = intval($_POST['edad']);

        if ($edad < 18) {
            echo "$nombre,eres menor";
        } else {
            echo "$nombre,eres mayor";
        }
    ?>
</body>
</html>

