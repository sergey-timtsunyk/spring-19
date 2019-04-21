<?php

class Parents
{
    public static function who() {
        echo 'Parents <br>';
    }

    public static function call()
    {
        self::who(); //текукий
        static::who(); //вызываемый
    }
}

class Child extends Parents
{
    public static function who() {
        echo 'Child <br>';
    }
}

class Child2 extends Child
{
    public static function who() {
        echo 'Child2 <br>';
    }
}


Child::call();

Child2::call();