<?php

declare(strict_types=1);

class _Worker implements EmployeeInterface
{
    protected const MAX_AGE = 100;
    private const MIN_AGE = 100;

    private $name;
    private $age;
    private $salary;
    private $date;

    /**
     * Worker constructor.
     * @param $name
     * @param $age
     * @param $salary
     */
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->setAge($age);
        $this->salary = $salary;
    }


    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    private function checkAge($age)
    {
        if ($age >= self::MIN_AGE && $age <= static::MAX_AGE){
            return true;
        }

        return false;
    }

    public function setDayOfB($date)
    {
        $this->date = $date;
    }

    public function dayOfB()
    {
        return $this->date;
    }
}
