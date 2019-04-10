<?php

declare(strict_types=1);

class User implements UserInterface
{

    private $login;
    private $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    final public function setLogin($login)
    {
        // TODO: Implement setLogin() method.
    }

    public function getLogin()
    {
        return 'User_login';
    }

    public function setPassword($password)
    {
        // TODO: Implement setPassword() method.
    }

    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }
}
