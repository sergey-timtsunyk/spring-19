<?php

spl_autoload_register('autoload');



function autoload($nameClass) {
    $path = explode('\\', $nameClass);

    $path[0] = 'src';

    $strPath = implode($path, '/') . '.php';

    var_dump($strPath);

    require_once $strPath;
}
