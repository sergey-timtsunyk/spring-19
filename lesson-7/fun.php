<?php


$funAdd = function ($n, $k) {
    return $n + $k;
};

$funMul = function ($n, $k) {
    return $n * $k;
};


$fun = $funAdd;

if (array_key_exists('mul', $_GET)) {
    $fun = $funMul;
}


//$res = call_user_func($fun, 5 , 6);
$res = call_user_func_array($fun, [5 , 6]);

var_dump($res);

register_shutdown_function(
    function () {
        echo 'Вызов в конце обработки!';
    }
);

function foo($n)
{
    $numArgs = func_num_args();
    echo "Количество аргументов: $numArgs<br>";

    if ($numArgs >= 2) {
        echo "Второй аргумент: " . func_get_arg(1) . "<br>";
    }
}

foo(111, 21, 13);

$nameFun = 'foo';
if (function_exists($nameFun)) {
    echo 'Фенкция существует - ' . $nameFun . '<br>';
    exit();
}


