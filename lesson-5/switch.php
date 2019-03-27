<?php

$str = 'str';

switch ($str) {
    case 'a': echo 'a<br>';break;
    case 'b': echo 'b<br>';break;
    case 'str': echo 'str<br>';break;
    case 'i': echo 'i<br>'; break;
    default:
        echo 'Нет совпадений';
}


switch (true) {
    case 'a' == $str : echo 'a<br>';break;
    case 'b' == $str  : echo 'b<br>';break;
    case 'str' == $str  : echo 'str<br>';break;
    case 'i' == $str  : echo 'i<br>'; break;
    default:
        echo 'Нет совпадений';
}