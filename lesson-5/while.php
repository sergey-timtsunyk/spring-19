<?php

$weekDays = [
    'ru' => [
        'Понедельник',
        'Вторник',
        'Среда',
        'Четверг',
        'Пятница',
        'Суббота',
        'Воскресенье',
    ],
    'en' => [
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday',
    ],
    'ua' => []
];

$lang = ['en', 'ru', 'ua'];

$i = 0;
while ($i <= count($lang)-1) {

    $key = 0;
    do {

        print_r($weekDays[$lang[$i]][$key]);
        echo "<br>";
        $key++;

    } while ($key < count($weekDays[$lang[$i]]) );

    $i++;
}