<?php


namespace App\Config;


use Doctrine\ActiveRecord\Dao\Factory as DaoFactory;

class FactoryModel
{
    private static $daoFactory;

    public static function ini($dbname, $user, $password, $host = '127.0.0.1', $port = 3306)
    {
        $connectionParams = [
            'dbname' => $dbname,
            'user' => $user,
            'password' => $password,
            'host' => $host,
            'port' => $port,
            'driver' => 'pdo_mysql',
        ];

        $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

        self::$daoFactory = new DaoFactory($conn);
        self::$daoFactory->setFactoryNamespace('');
        self::$daoFactory->setFactoryPostfix('');
    }

    public static function createModel($className)
    {
        return self::$daoFactory->create($className);
    }
}