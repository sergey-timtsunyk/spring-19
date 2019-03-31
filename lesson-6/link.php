<?php

$res = [3, 5, -9, 89, 24];

function addToArr(array &$arr, $number) {
    global $value;
    $value = 'value';

    foreach ($arr as $key => $val) {
        $arr[$key] = $val + $number;
    }
}

function  subToArr(array &$arr, $number) {
    global $value;
    var_dump($value);

    foreach ($arr as $key => $val) {
        $arr[$key] = $val - $number;
    }
}

var_dump($res);

addToArr($res, 10);
subToArr($res, 2);

var_dump($res);