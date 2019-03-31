<?php


function call ()
{
    static $count;
    $count ++;

    return $count;
}


echo call() . '<br>';
echo call() . '<br>';
echo call() . '<br>';
echo call() . '<br>';
echo call() . '<br>';
echo call() . '<br>';
echo call() . '<br>';