<?php

    $age = 20;
    $sent = "Мне много год.";
    echo str_replace("много", $age, $sent) . '<br>';


    $name = "Тымцуник Сергей Павлович";
    //$name = "Tymtsunyk Serhii Pavlovich";

    $len = mb_strlen($name);
    $number = mb_strrpos($name, ' ');
    $path = mb_strimwidth($name, $number, $len-$number);
    $name = mb_strimwidth($name, 0, $number);
    $initialLastName = mb_substr($path, 1, 1);

    $len = mb_strlen($name);
    $number = mb_strrpos($name, ' ');
    $path = mb_strimwidth($name, $number, $len-$number);
    $name = mb_strimwidth($name, 0, $number);
    $initialFirstName = mb_substr($path, 1, 1);

    printf('%s %s. %s.<br>', $name, $initialFirstName, $initialLastName);



    $name = "Тымцуник Сергей Павлович";

    $lastName = strrchr($name, ' ');
    $name = str_replace($lastName, '', $name);
    $firstName = strrchr($name, ' ');
    $name = str_replace($firstName, '', $name);

    $initialLastName = mb_substr($lastName, 1, 1);
    $initialFirstName = mb_substr($firstName, 1, 1);

    printf('%s %s. %s.<br>', $name, $initialFirstName, $initialLastName);
