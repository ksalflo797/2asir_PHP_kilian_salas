<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular numero PAR o IMPAR</title>
</head>
<body>
    <h1>PAR O IMPAR</h1>
    <form method="post">
        <label for="numero">Introduce un número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Comprobar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        
        if ($numero % 2 == 0) {
            echo "<p>El número $numero es <strong>par</strong>.</p>";
        } else {
            echo "<p>El número $numero es <strong>impar</strong>.</p>";
        }
    }
    ?>
</body>
</html>