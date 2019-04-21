<?php

class A
{
    static $count = 0;
    private $countSelf;

    public function __construct()
    {
        self::$count++;
        $this->countSelf = self::$count;
        printf( "construct (%s) <br>", $this->countSelf);
    }

    public function __clone()
    {
        self::$count++;
        $this->countSelf = self::$count;
        printf( "clone (%s) <br>", $this->countSelf);
    }

    public function __destruct()
    {
        printf( "destruct (%s) <br>", $this->countSelf);
    }
}

$a = new A();

$aNew = clone $a;

echo 'Какой-то код! <br>';

$a2 = new A();


//unset($a);
