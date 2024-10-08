<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="ejercicio6.php" method="post">
        <input type="number" name="numero1">
        <br>
        <input  type="number" name="numero2">
        <br>
        <input  type="number" name="numero3">
        <br>
        <input  type="number" name="numero4">
        <br>
        <input  type="number" name="numero5">
        <br>
        <input  type="checkbox" name="sumar">Sumar
        <br>
        <input  type="checkbox" name="restar">Restar
        <br>
        <input type="submit" name="Calcular">
    </form>
</body>
</html>
<?php

function Operaciones(){
    if($_POST['sumar']){Visualizar(Suma());}
    if($_POST['restar']){Visualizar(Restar());}
}

function Suma(){
$suma = 0;
for ($i = 1 ; $i <= 5 ; $i++) {
    $suma += $_POST['numero'.$i];
    }
    return $suma;
}

function Restar(){
$resta = $_POST['numero1'];
for ($i = 2 ; $i <= 5 ; $i++) {
    $resta -= $_POST['numero'.$i];
    }
    return $resta;
}


function Visualizar($result){echo $result;}

Operaciones();

?>
