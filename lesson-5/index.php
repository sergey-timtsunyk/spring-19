<?php

/*$res = include 'for.php';
var_dump($res);*/

require_once 'function.php';

$func = 'printWithBr';


$str = $func('Function!', 'test', true);

var_dump($str);