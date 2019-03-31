<?php



function add($first, $second): float
{
    return $first + $second;
}

function sub($first, $second): float
{
    return $first - $second;
}

function operation(float $numOne, float $numTwo, string $oper)
{
    if (function_exists($oper)) {
        $res = $oper($numOne, $numTwo);
    } else {
        echo 'Функции "'. $oper . '" не существует!';
    }

}

$numOne = 123;
$numTwo = 98;

operation($numOne, $numTwo, 'sub');