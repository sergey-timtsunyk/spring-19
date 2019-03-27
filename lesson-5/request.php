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
    ]
];

if (!array_key_exists('lang', $_GET)
    || !array_key_exists('day', $_GET)
) {
    exit("Неправельные данные!");
}

$lang = $_GET['lang'];
$day = $_GET['day'];
$day--;

if (!(array_key_exists($lang, $weekDays)
    && array_key_exists($day, $weekDays[$lang]))
) {
    exit("Неправельные данные!");
}

$dayName = $weekDays[$lang][$day];

echo $dayName;







