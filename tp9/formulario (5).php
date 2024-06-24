<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>luca</title>
</head>
<body>
   
    <h2> detalles de la suscvripcion:</h2>
    <?php
    echo "<p>Nombre: " . htmlspecialchars($_POST['nombre']) . "</p>";
    echo "<p>Apellido: " . htmlspecialchars($_POST['apellido']) . "</p>";
    echo "<p>Edad: " . htmlspecialchars($_POST['edad']) . "</p>";
    echo "<p>Dirección: " . htmlspecialchars($_POST['direccion']) . "</p>";
    echo "<p>DNI: " . htmlspecialchars($_POST['dni']) . "</p>";
    echo "<p>Fecha de Nacimiento: " . htmlspecialchars($_POST['fecha_nacimiento']) . "</p>";
    echo "<p>Género: " . htmlspecialchars($_POST['genero']) . "</p>";
    echo "<p>Lugar de Nacimiento: " . htmlspecialchars($_POST['lugar_nacimiento']) . "</p>";
    echo "<p>Intereses y/o Hobbies: " . htmlspecialchars($_POST['intereses']) . "</p>";
  
echo "<p>Comentarios: " . htmlspecialchars($_POST['comentarios']) . "</p>";
    ?>
</body>
</html>
