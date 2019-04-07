<?php

class User
{
    protected $name;

    private $nik;

    public function __construct($newName, $newNik)
    {
        $this->nik = $newNik;
        $this->name = $newName;
    }

    public function getNik()
    {
        return $this->nik;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }
}

class Admin extends User
{
    private $flag = 1;

    public function __construct($newName, $newNik, $flag)
    {
        parent::__construct($newName, $newNik);
        $this->flag = $flag;
        $this->name =  $newName . "(flag)";
        ///$this->nik = $newNik;
    }
}

/*$nameForUser = 'User_name';
$user = new User($nameForUser, 'Nik_name');
var_dump($user);*/

$admin = new Admin('Admin', 'AD', 0);

//$admin->setName('Admin_Test');

var_dump($admin);










