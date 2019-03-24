<?php

$a = null;
//$b = null;

if (array_key_exists('a', $_GET)) {
    $a = $_GET['a'];
}

if (array_key_exists('b', $_GET)) {
    $b = $_GET['b'];
} else {
    $b = null;
}

$b = array_key_exists('b', $_GET) ? $_GET['b'] : null;

$b = array_key_exists('b', $_GET) ?: $_GET['b'];



if ($a > $b) {
    echo 'a больше, чем b<br>';
} elseif ($a === $b) {
    echo 'a тождественно равен b<br>';
} elseif ($a == $b) {
    echo 'a равен b<br>';
} else {
    echo 'a меньше, чем b<br>';
}


/*
if ($a) {
    echo 'значение a, приведенное к булевому типу - TRUE<br>';
    echo 'Тип и значение a:';
    var_dump ($a);
}*/
