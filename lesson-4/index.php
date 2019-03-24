<?php


/*$myArr[] = 'This is one';
$myArr[1] = 'This is the second element of the array';
$myArr['orange'] = 2;
$myArr[3] = false;

$key = 'key';

$a = [100 => 'This is one', 'second' => 'This is two', $key => false];

var_dump($myArr);
var_dump($a);

echo $a['second'] . "<br>";

$aR = range(60, 190, 5);

var_dump($aR);

$multiArray = [
    'fruit' => [
        'red' =>'apple',
        'yellow' => 'banana',
        'green' => 'pear',
    ],
    'flower' => [
        'red' => 'rose',
        'yellow' => 'sunflower',
        'purple' => 'iris',
    ]
];

var_dump($multiArray);

echo $multiArray['flower']['red'];

$key = '';

$a1 = [100 => 'This is one', $key => false, 'second' => 'This is two'];
$a2 = [100 => 'This is one', 'second' => 'This is two', $key => false];

var_dump($a1 === $a2);



$key = '';

$a1 = [100 => 'This is one!!!', $key => false, '2' => 'This is two'];
$a2 = [100 => 'This is one', 'second' => 'This is two', $key => false];

var_dump($a1);
var_dump($a2);
var_dump($a1 + $a2);


$aR = range(60, 190, 5);
rsort($aR);

var_dump($aR);
*/


list($drink, $color, $power) = ['кофе', 'коричневый', 'кофеин'];


echo $drink . '<br>';

$resArr = compact('drink', 'color');

var_dump($resArr);





