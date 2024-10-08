<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dado 7 valores</title>
</head>
<body>
    <!--Dado 7 valores en un formulario 7 cajas de tipo numero, visualizar aquellos valores que sean superiores a la media de todos. Habŕia que sumarlos y hacerle la media -->
    <h1>Dado 7 valores</h1>
    <form method="post" name="form1" action="">
       Numero 1:  <input type="number" name="numero1"><br>
       Numero 2:  <input type="number" name="numero2"><br>
       Numero 3:  <input type="number" name="numero3"><br>
       Numero 4:  <input type="number" name="numero4"><br>
       Numero 5:  <input type="number" name="numero5"><br>
       Numero 6:  <input type="number" name="numero6"><br>
       Numero 7:  <input type="number" name="numero7"><br>
    <input type="submit" value="Calcular">
    </form>
</body>
</html>
<?php


/*
    valores superiores a la media
*/

// ---------- PROGRAMA PRINCIPAL ------

$media = Media();
Visualizar ($media);

// ---------- FUNCIONES ---------


// ---------- OBTIENE LA MEDIA   ---------

function Media(){
    $acum = 0;
    for ($i = 1; $i <= 7; $i++){
        $acum += $_POST['numero'.$i];
        }
        return $acum / 7;
    }
function Visualizar ($media){
    for ($i = 1 ; $i <=7; $i++){
        if ($_POST['numero'.$i] > $media){
            echo $_POST['numero' .$i];
        }
    }
}
?>
