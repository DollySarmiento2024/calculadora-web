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
function calcular($num1, $operacion, $num2)
{
    $result = 0;
    switch ($operacion) {
        case "+":
            $result = suma($num1, $num2);
        case "-":
            $result = resta($num1, $num2);
    }
    return $result;
}
