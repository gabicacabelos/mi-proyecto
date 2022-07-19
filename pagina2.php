<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operacion = $_GET["operacion"];
$resultado = 0;
if ($operacion == "suma") {
     $resultado = $num1 + $num2;
    
} elseif ($operacion == "resta") {
     $resultado = $num1 - $num2;
    
} elseif ($operacion == "multiplicacion") {
     $resultado = $num1 * $num2;
    
} elseif ($operacion == "division") {
     $resultado = $num1 / $num2;
}
echo "el resultado es: " . $resultado;



?>

