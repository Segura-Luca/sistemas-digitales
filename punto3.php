<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $username = $_POST["username"];
    $password1 = $_POST["contraseña1"];
    $password2 = $_POST["contraseña2"];

    if ($contraseña1 !== $contraseña2) {
        echo "las contraseñas son diferentes ";
    } else {
        echo "entraste bien loquito";
    }
}
?>