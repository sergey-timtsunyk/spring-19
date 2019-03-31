<?php
//declare(ticks=1);
declare(strict_types=1);


function add (float $a, float $b) {
    return $a + $b;
}


echo add(2.2, 5.3) . '<br/>';
echo add(12, 5) . '<br/>';
echo add('2.2', 5.3) . '<br/>';





$a = 3;
$b = 5;
$c = 0;

$a = $a + $b;
if ($a > 0) {
    $c = 9;
}

echo $c . '<br/>';



// Функция, исполняемая при каждом тике
function tick_handler()
{
    echo "Вызывается tick_handler()<br/>";
}

// Функция, исполняемая при каждом тике
function tick_handler_1()
{
    echo "Вызывается tick_handler_1()<br/>";
}

register_tick_function('tick_handler');
//register_tick_function('tick_handler_1');


