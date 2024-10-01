<!DOCTYPE html>
<html>
<body>

<?php
/*
2.) Dado 2 numeros, si el primero es mayor que el segundo visualizar 
    los numeros comprendidos entre ambos e inclusive 
*/

//---------- Funciones ----------

function Proceso($num1, $num2) {
  for($i=$num1; $i <= $num2; $i++){
    Visualizar ($i);
  }
}


//--------- Visualiza el nombre ----------
// llama a la función varias veces

function Visualizar ($dato){
    echo $dato. "<br>";
}

$num1=2;
$num2=5;

//--------- Programa Principal --------
$num1=5;
$num2=9;
Proceso ($num1, $num2);
?>

</body>
</html>