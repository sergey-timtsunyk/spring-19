<?php

require_once 'User.php';

class DbUser
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(User $user)
    {
        $sql = 'INSERT INTO users (`first_name`, `last_name`, `email`, `phone`, `password`, `role_id`)
        value (:first_name, :last_name, :email, :phone, :password, :role_id)';

        $sth = $this->pdo->prepare($sql);

        $sth->execute([
            ':first_name' => $user->getFirstName(),
            ':last_name' => $user->getLastName(),
            ':email' => $user->getEmail(),
            ':phone' => $user->getPhone(),
            ':password' => $user->getPassword(),
            ':role_id' => 1,
        ]);
    }
}