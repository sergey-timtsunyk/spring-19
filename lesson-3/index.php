<?php

$bool = true;
var_dump($bool);

$str = (string) $bool;

var_dump($str);

//$number = (int) $bool;
$number = $bool;
settype($number, 'int');

var_dump($number);


$a = (array) $bool;

var_dump($a);

$var = null;

echo PHP_INT_MAX . "<br>";
echo PHP_FLOAT_MAX . "<br>";


var_dump(intval('67jkefj'));



$a = 1.23456789;
$b = 1.23455780;
$epsilon = 0.00001;
if (abs($a - $b) < $epsilon) {
    echo "true<br>";
} else {
    echo "false<br>";
}



$var1 = '1';

var_dump(isset($var1));
var_dump(empty($var1));
