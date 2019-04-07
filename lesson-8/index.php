<?php

class User {

    public $name = 'User';

    private $nik = 'Nik';

    public function getNik()
    {
        return $this->nik;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function getName()
    {
        return $this->name;
    }

    private function showClassName()
    {
        echo "имя в обьекте - {$this->name} ({$this->nik})!";
    }

    public function display()
    {

        $this->showClassName();
    }
}

$user1 = new User();
$user2 = new User();

var_dump($user1);

$user1->setName('Test');
$user1->name = 'Test!';

var_dump($user1->getNik());

var_dump($user1);

//$user1->showClassName();
$user1->display();

var_dump($user1->name);
var_dump($user1->getName());


//$user2->showClassName();
$user2->display();









