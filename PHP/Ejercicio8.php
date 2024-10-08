<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dado 7 valores</title>
</head>
<body>
    <!--Dado 5 numeros utilizar 2 checkbox, que indica suma y resta de forma que el usuario puede elegir suma o resta las dos o ninguno-->
    <h1>Dado 5 numeros utilizar 2 checkbox</h1>
    <form method="POST" action="">
    <input type="numero" name="valor1">
    <input type="numero" name="valor2">
    <input type="numero" name="valor3">
    <input type="numero" name="valor4">
    <input type="numero" name="valor5"> <br>
    <input type="checkbox" name="check1"> Sumar
    <input type="checkbox" name="check2"> Restar
    <input type="checkbox" name="check3"> Multipicar
    <input type="checkbox" name="check4"> Dividir<br>
    <input type="submit" value="Calcular">
</form>

</body>
</html>
<?php
// ---------- FUNCIONES ---------
if (isset($_POST['check1'])) {
    $suma = $_POST['valor1'] + $_POST['valor2'] + $_POST['valor3'] + $_POST['valor4'] + $_POST['valor5'];
    echo "La suma es: " . $suma . "<br>";
}
if (isset($_POST['check2'])) {
    $resta = $_POST['valor1'] - $_POST['valor2'] - $_POST['valor3'] - $_POST['valor4'] - $_POST['valor5'];
    echo "La resta es: " . $resta . "<br>";
}
if (isset($_POST['check3'])) {
    $multipicar = $_POST['valor1'] * $_POST['valor2'] * $_POST['valor3'] * $_POST['valor4'] * $_POST['valor5'];
    echo "La multipicacion es: " . $multipicar . "<br>";
}
if (isset($_POST['check4'])) {
    $dividir = $_POST['valor1'] / $_POST['valor2'] / $_POST['valor3'] / $_POST['valor4'] / $_POST['valor5'];
    echo "La division es: " . $dividir . "<br>";
}
?>
