<?php

class A
{
    private $arr;

    public function __set($name, $value)
    {
        $this->arr[$name] = $value . ' !';
    }

    public function __call($name, $arguments)
    {
       $this->arr[$name] = $arguments;
    }

    public function __get($name)
    {
        return key_exists($name, $this->arr) ? $this->arr[$name] : null;
    }

    public function __isset($name)
    {
        return key_exists($name, $this->arr);
    }

    public function __toString()
    {
        return 'обьект A';
    }
}

$a = new A();

echo $a;

$a->count = 5;

var_dump(isset($a->count));
unset($a->count);


/*$a->count1 = 15;


echo $a->count;
echo $a->res;

$a->setParams('first', 'second', 12);
$a->params(1, 2, 12);

A::callStat();

var_dump($a);*/








