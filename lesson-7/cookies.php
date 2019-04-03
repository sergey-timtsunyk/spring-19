<?php

//var_dump($_COOKIE['key']);


echo 'gjhgjhgj';

setcookie('key',  md5('hgdghxh'));
setcookie('date',  date('Y-m-d'));
setcookie('test',  date('Y-m-d'));

unset($_COOKIE['test']);

var_dump($_COOKIE);