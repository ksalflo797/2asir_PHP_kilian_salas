<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>
<body>
    <h2>Calcular Numeros Suma/Resta</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="numero 1" required><br><br>
        <input type="number" name="num2" placeholder="numero 2" required><br><br>

        <input type="radio" name="operacion" value="suma" required> Suma<br>
        <input type="radio" name="operacion" value="resta"> Resta<br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

     
        if ($operacion == 'suma') {
            $resultado = $num1 + $num2;
            echo "<h1>El resultado de la suma es: $resultado</h1>";
        } else {
            $resultado = $num1 - $num2;
            echo "<h1>El resultado de la resta es: $resultado</h1>";
        }
    }
    ?>
</body>
</html>
