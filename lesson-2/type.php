<?php

 $int = 0;
 $int = (int)'12jshe9gkvejr';

 var_dump($int);

 $true = (bool) 'dthr';
 $false = false;

 var_dump($true);
 echo gettype($true) . '<br>';

 var_dump(is_bool($true));

 $a = 123;

 var_dump($a);

 settype($a, 'string');

 var_dump($a);

 unset($a);

 var_dump($a);