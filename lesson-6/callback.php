<?php


$message = '!!!!!';

$greet = function($name) use ($message)
{
    printf("Привет, %s %s<br>", $name, $message);
};

$greet('Мир');
$greet('PHP');



$arr = [4, 6, 89, 23, 56, 57];
$nameVal = 'value';

$callMap = function ($val) use ($nameVal) {
    return sprintf('%s = %s', $nameVal, $val);
};

$arrRes = array_map($callMap, $arr);

var_dump($arr);
var_dump($arrRes);


/*$callWalk = function ($val, $key, $nameVal){
    printf('key = %s; %s = %s<br>', $key, $nameVal, $val);
};*/

array_walk(
    $arr,
    function ($val, $key, $nameVal){
        printf('key = %s; %s = %s<br>', $key, $nameVal, $val);
    },
    'значение'
);













