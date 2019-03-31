<?php


$var = 10;
$result = 100;

function square($var = 5) //по умолчанию параметр функции имеет значение 5
{
    global $result;

    $result = 20;
    if (!empty($result)) {
        return $result;
    }

    $result = $var * $var;

    return $result; //вернем значение переменной $result
}

echo 'square() = ' . square() . '<br>'; //мы не передали функции параметр и она выведет на экран 25 (5 в квадрате)
echo 'square(3) = ' . square(3) . '<br>'; //выводит 9
echo 'result = ' . $result .  '<br>';