<?php

$m = $_GET['m'];

switch (true) {
    case ($m == 12 || $m >= 1 && $m <= 2):
        $res = 'зима';break;

    case $m >= 3 && $m <= 5:
        $res = 'весна';break;

    case $m >= 6 && $m <= 8:
        $res = 'лето';break;

    case $m >= 9 && $m <= 11:
        $res = 'осень';break;

    default: $res = 'Значение не верное!';
}

echo $res;


/*switch ($m) {
    case 1:
    case 2:
    case 12 : $res = 'зима';break;
    case 3:
    case 4:
    case 5: $res = 'весна';break;
    case 6:
    case 7:
    case 8: $res = 'лето';break;
    case 9:
    case 10:
    case 11: $res = 'осень';break;

    default: $res = 'Значение не верное!';
}

echo $res;*/