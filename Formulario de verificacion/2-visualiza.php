<?php
// Inicia la sesión
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guarda los datos en la sesión
    $_SESSION['nombre'] = htmlspecialchars($_POST['nombre']);
    $_SESSION['localidad'] = htmlspecialchars($_POST['localidad']);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Información</title>
</head>
<body>
    <h1>Visualizar Información</h1>
    <p>Tu nombre es: <b><?php echo $_SESSION['nombre']; ?></b></p>
    <p>Tu localidad es: <b><?php echo $_SESSION['localidad']; ?></b></p>
    <form action="3-confirma.php" method="post">
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>
