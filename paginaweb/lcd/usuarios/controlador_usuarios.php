<?php
if (!empty($_POST["registrarse"])) {
    if (empty($_POST["nombre"]) || empty($_POST["correo"]) || empty($_POST["contraseña"]) || empty($_POST["confirmarcontraseña"])) {
        echo '<div class="alerta">Rellene los campos</div>';
    } else {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $contraseña = $_POST["contraseña"];
        $confirmarcontraseña = $_POST["confirmarcontraseña"];

        $conexion = mysqli_connect("localhost", "root", "", "basedatos");

        if (!$conexion) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO registro (nombre, correo, contraseña, confirmarcontraseña) VALUES ('$nombre', '$correo', '$contraseña', '$confirmarcontraseña')";

        if (mysqli_query($conexion, $sql)) {
            echo '<div class="success">Usuario registrado</div>';
        } else {
            echo '<div class="alerta">Error al registrar: ' . mysqli_error($conexion) . '</div>';
        }

        mysqli_close($conexion);
    }
}
?>