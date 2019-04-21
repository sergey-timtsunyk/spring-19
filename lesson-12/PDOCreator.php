<?php

declare(strict_types=1);

class PDOCreator
{
    public static function getPDO(): PDO
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=test_db';
        $user = 'root';
        $pass = '123';

        return new PDO($dsn, $user, $pass);
    }
}
