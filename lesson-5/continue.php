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

foreach ($weekDays as $key => $days) {

    foreach ($days as $i => $day) {

        if ($i == 0) {
            continue;
        }

        printf('$weekDays[%s][%s] = %s', $key, $i, $day);
        echo "<br>";

    }
}