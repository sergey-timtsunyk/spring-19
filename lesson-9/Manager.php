<?php
declare(strict_types=1);

class Manager extends User implements EmployeeInterface, UserInterface
{
    private $name;

    private $date;

    /**
     * @var Worker[]
     */
    private $workers;

    public static $count = 0;

    public function __construct($login, $password, $name)
    {
        parent::__construct($login, $password);

        $this->name = $name;

        self::getClassName();

        static::$count++;
    }

    public function setWorkers(array $workers)
    {
        $this->workers = $workers;
    }

    public function addWorker(Worker $worker)
    {
        $this->workers[] = $worker;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDayOfB($date)
    {
        $this->date = $date;
    }

    public function dayOfB()
    {
        return $this->date;
    }

 /*   public function setLogin($login)
    {
        // TODO: Implement setLogin() method.
    }*/

    public function getLogin()
    {
        return 'Manager_login';
    }

    public function setPassword($password)
    {
        // TODO: Implement setPassword() method.
    }

    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    public static function getClassName()
    {
        return 'Manager Class';
    }
}











