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

/*for ($i = 0;$i < count($lang); $i++) {

    $item = $lang[$i];
    for ($key = 0; $key < count($weekDays[$item]); $key++) {

        $day = $weekDays[$item][$key];
        print_r($day);
        echo "<br>";

    }

}*/

/*foreach ($lang as $item) {

    foreach ($weekDays[$item] as $day) {

        print_r($day);
        echo "<br>";

    }

}*/

foreach ($weekDays as $key => $days) {
    if ($key == 'en') {
        foreach ($days as $i => $day) {
            printf('$weekDays[%s][%s] = %s', $key, $i, $day);
            echo "<br>";
        }
    }
}

return 'end';








