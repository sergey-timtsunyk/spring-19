<?php


namespace App\Controller;


class UsersController
{
    public function __construct()
    {
        var_dump(self::class . '::__construct()');
    }

    public function showAction($name)
    {
        var_dump(self::class);
    }
}