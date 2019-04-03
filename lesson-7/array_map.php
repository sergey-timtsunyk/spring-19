<?php
$arr = [
    10 => ['name' => 'Yan', 'salary' => '1200', 'work_hours' => 180],
    20 => ['name' => 'Barda', 'salary' => '2150', 'work_hours' => 160],
    80 => ['name' => 'Piter', 'salary' => '1500', 'work_hours' => 160],
    30 => ['name' => 'Alex', 'salary' => '3340', 'work_hours' => 167],
    40 => ['name' => 'Deiv', 'salary' => '1700', 'work_hours' => 176],
    50 => ['name' => 'Bob', 'salary' => '1150', 'work_hours' => 182],
    60 => ['name' => 'Claus', 'salary' => '2810', 'work_hours' => 155],
    70 => ['name' => 'Lina', 'salary' => '1600', 'work_hours' => 169],
    ['name' => 'Rod', 'salary' => '2780', 'work_hours' => 191],
    ['name' => 'Kristy', 'salary' => '2180', 'work_hours' => 144],
    ['name' => 'Ron', 'salary' => '1670', 'work_hours' => 157],
];


var_dump($arr);


$n  = '10';

$arrRes = array_map(
    function ($element, $element1) use ($n) {
        if ($element['salary'] < 2000) {
            $element['salary'] = bcadd($element['salary'], $n);
        }

        return $element;
    },
    $arr, $arr
);


var_dump($arrRes);