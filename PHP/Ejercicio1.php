<!DOCTYPE html>
<html>
<body>

<?php
/*
1.) Dado 2 numeros visualizar dentro de una funcion, 
    si su suma son iguales y el producto si es distinto
*/

//---------- Funciones ----------

function Proceso($num1, $num2) {
  if($num1 == $num2){
    $suma = $num1 + $num2;
    $re= "La suma es:".$suma;
  }
  else {
    $pro = $num1 * $num2;
    $re ="El producto es:".$pro;
  }
  return $re;
}

//--------- Visualiza la suma ----------
function Visualizar ($mensaje){
    echo $mensaje;
}

$num1=2;
$num2=5;

//--------- Programa Principal --------
$num1=2;
$num2=5;

$resul = Proceso ($num1, $num2);
Visualizar ($resul);
?>

</body>
</html>