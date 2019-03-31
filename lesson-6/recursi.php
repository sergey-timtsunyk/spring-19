<?php

$arr = [1, 2, 3, 4, 5, 89, 65];

last($arr);

function last($arr)
{
    static $countStatic;
    $countStatic ++;
    $count = $countStatic;
   // echo  'статический вызов = ' . $countStatic.'<br>'; //выводим последний элемент массива
    echo  'номер вызова = ' . $count.'<br>'; //выводим последний элемент массива


    echo  array_pop($arr).'<br>'; //выводим последний элемент массива

    if(!empty($arr)) {
        last($arr); //это рекурсия
    }

    echo  'номер вызова = ' . $count.'<br>';
}