<?php
interface Say
{
    public function say(): string;
}

interface Action
{
    public function action(): string;
}


abstract class Animal implements Say, Action
{
    public abstract function say(): string;

    public function action(): string
    {
        return 'бежит';
    }
}


class Dog extends Animal
{
    public function say(): string
    {
        return 'гав';
    }
}

class Cat extends Dog
{
    public function say(): string
    {
        return 'няу';
    }
}

class Bird extends Animal
{
    public function say(): string
    {
        return 'чик-чирик';
    }

    public function action(): string
    {
        return 'летит';
    }
}

class Car implements Action
{
    public function action(): string
    {
        return 'едет';
    }
}

$objects = [
    new Dog(),
    new Cat(),
    new Bird(),
    new Car(),
];

foreach ($objects as $object) {
    if ($object instanceof Say) {
        echo $object->say() . '<br>';
    }

    if ($object instanceof Action) {
        echo $object->action() . '<br>';
    }
}









