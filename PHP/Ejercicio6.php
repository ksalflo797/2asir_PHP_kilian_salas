<?php
if(!isset($_POST['enviar'])){ ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular numero PAR o IMPAR</title>
</head>
<body img background = "./fotos/tortugas.jpg" text="#0000000" background-size=300000px>
    <h1>PAR O IMPAR</h1>
    <form method="post" name="form1" action=Ejercicio6.php>
        <label for="numero">Introduce un número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Compruebe</button>
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        
        if ($numero % 2 == 0) {
            echo "<b><p>El número $numero es par</p><b>";
        } else {
            echo "<b><p>El número $numero es impar</p><b>";
        }
    }
}
    ?>
</body>
</html>