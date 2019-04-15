<?php

declare(strict_types=1);
require_once 'EmployeeInterface.php';
require_once 'AbstractEmployee.php';
require_once 'TraitName.php';
require_once 'TraitStartDate.php';

class Worker extends AbstractEmployee implements EmployeeInterface//, NameInterface
{
    use TraitName, TraitStartDate;

    protected const MAX_AGE = 100;
    private const MIN_AGE = 100;
    private const COFF = 0.05;

    /**
     * @var int
     */
    private $age;

    /**
     * @var float
     */
    protected $salary;


    public function __construct(string $name, string $position, float $salary, DateTimeInterface $dateTime)
    {
        $this->setStartDate($dateTime);
        $this->setPosition($position);
        $this->name = $name;
        $this->salary = $salary;
    }

    /**
     * @param mixed $age
     */
    public function setAge(int $age): void
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    /**
     * @return mixed
     */
    public function getAge(): int
    {
        return $this->age;
    }
    /**
     * @param mixed $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }
    /**
     * @return float
     */
    public function getSalary(): float
    {
        $countYear =$this->countYearsFromStart();

        $count = $countYear > 2 ? $countYear - 1 : 0;

        return $this->salary + ($this->salary * $count * self::COFF);
    }

    private function checkAge($age): bool
    {
        if ($age >= self::MIN_AGE && $age <= static::MAX_AGE){
            return true;
        }

        return false;
    }
}
