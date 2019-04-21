<?php

class A {
    public function __toString()
    {
        return 'Объект класса A';
    }

    public function __invoke()
    {
        echo "Вызов как функцию";
    }

    public function getClassName()
    {
        return __CLASS__;
    }

    public function getMethodName()
    {
        return __METHOD__;
    }
}

$a = new A();

echo $a;
echo '<br>';

$a();
echo '<br>';

echo $a->getClassName();
echo '<br>';
echo $a->getMethodName();
echo '<br>';
echo get_class($a);

