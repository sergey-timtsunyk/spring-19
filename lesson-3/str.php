<?php
echo 'этот текст \\\'записан в двух строках<br>';


$str1='text';
$str2='\'text\'';

$str = $str1 . '+' . $str2 . '<br>';

echo $str;


$good='мяч';
$color='белый';
$size=40;

echo "товар $good имеет $color s цвет и размер $size см. <br>";


$str = '!!!';

echo <<<EOD
Пример строки, охватывающей несколько строчек,  с использованием heredoc-синтаксиса.
Мы можем использовать 'одинарные' и "двойные" кавычки без экранирования,
а также обрабатывать переменные $str <br>
EOD;



echo <<<'EOD'
Пример строки, охватывающей несколько строчек,
с использованием nowdoc-синтаксиса.
Мы можем использовать 'одинарные' и "двойные" кавычки без экранирования, 
но не обрабатывать переменные $str <br>
EOD;


$element = explode(',', 'Пример строки|, охватывающей| несколько строчек');

var_dump($element);

echo implode(':', $element);



var_dump(htmlentities('<br/>'));
var_dump(htmlspecialchars_decode('&lt;br/&gt;'));


var_dump(htmlspecialchars('<br/>'));
var_dump(html_entity_decode('&lt;br/&gt;'));



printf ('товар %s имеет %s s цвет и размер %\'.09s см. <br>', $good, $color, (float)$size);




































