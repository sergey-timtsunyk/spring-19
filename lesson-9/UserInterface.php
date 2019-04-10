<?php

declare(strict_types=1);

interface UserInterface
{
    public function setLogin($login);

    public function getLogin();

    public function setPassword($password);

    public function getPassword();
}
