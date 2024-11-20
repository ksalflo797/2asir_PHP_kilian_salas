<?php
// Inicia la sesión
session_start();

// Verifica que los datos existen en la sesión
if (isset($_SESSION['nombre']) && isset($_SESSION['localidad'])) {
    $nombre = $_SESSION['nombre'];
    $localidad = $_SESSION['localidad'];
} else {
    // Redirige al formulario, si hay  o no hay datos en la sesión
    header('Location: 1-formulario.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Datos</title>
</head>
<body>
    <h1>Confirmación de Datos</h1>
    <p>Los datos han sido confirmados correctamente:</p>
    <ul>
        <li>Nombre: <b><?php echo $nombre; ?></b></li>
        <li>Localidad: <b><?php echo $localidad; ?></sb></li>
    </ul>
    <?php
    // Limpia la sesión una vez confirmado
    session_destroy();
    ?>
</body>
</html>
