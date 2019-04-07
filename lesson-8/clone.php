<?php

class User
{
    private $name = 'User';

    private $nik = 'Nik';

    public function getNik()
    {
        return $this->nik;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }
}


$user1 = new User();
$user1->setName('User1');

//var_dump($user1);

$user2 = clone $user1;

//$user2->setName('User2');

$user3 = $user2;
$user3->setName('User3');

//var_dump($user1);

if ($user1 == $user3) {
    echo '(==)$user1 равен $user3 <br>';
} else {
    echo '(==)$user1 не равен $user3 <br>';
}

if ($user2 === $user3) {
    echo '(===)$user2 равен $user3 <br>';
} else {
    echo '(===)$user2 не равен $user3 <br>';
}











