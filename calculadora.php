<?php
function suma($num1, $num2)
{
    $result = $num1 + $num2;
    return $result;
}

function resta($num1, $num2)
{
    $result = $num1 - $num2;
    return $result;
}

function multiplicacion($num1, $num2)
{
    $result = $num1 * $num2;
    return $result;
}
function division($num1, $num2)
{
    $result = $num1 / $num2;
    return $result;
}

function calcular($num1, $operacion, $num2)
{
    $result = 0;
    switch ($operacion) {
        case "+":
            $result = suma($num1, $num2);
            break;
        case "-":
            $result = resta($num1, $num2);
            break;
        case "*":
            $result = multiplicacion($num1, $num2);
            break;
        case "/":
            $result = division($num1, $num2);
            break;
    }
    return $result;
}



$numero1 = $_POST["num1"];
$operacion = $_POST["operacion"];
$numero2 = $_POST["num2"];
$resultado = calcular($numero1, $operacion, $numero2);
echo "El resultado de " . $numero1 . $operacion . $numero2 . " es " . $resultado . "<br>";
