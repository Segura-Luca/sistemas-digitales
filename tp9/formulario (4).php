<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>luca</title>
</head>
<body>
    <?php
        $nombre = htmlspecialchars($_POST['nombre']);
        $monto = $_POST['monto'];

        if ($monto === 'mas de 10000') {
            echo "$nombre, debe pagar recargo.";
        } else {echo "$nombre, no debe pagar recargo.";
        }
    ?>
</body>
</html>
