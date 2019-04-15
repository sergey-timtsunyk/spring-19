<?php

declare(strict_types=1);

class Manager extends Worker implements EmployeeInterface, ManagerInterface
{
    /**
     * @var array|EmployeeInterface[]
     */
    private $employees;

    public function getEmployees(): array
    {
        return $this->employees;
    }

    public function addEmployee(EmployeeInterface $employee): void
    {
        $this->employees[] = $employee;
    }

    public function getCountEmployees(): int
    {
        return count($this->employees);
    }

    public function deleteEmployee(EmployeeInterface $employee): void
    {
        $key = array_search($employee, $this->employees);

        if (is_int($key)) {
            unset($this->employees[$key]);
        }
    }

    public function deleteEmployeeByName(string $name): void
    {
        $this->employees = array_filter($this->employees, function (EmployeeInterface $employee) use ($name) {
            return $employee->getName() !== $name;
        });
    }

    public function getSalary(): float
    {
        return parent::getSalary() + ($this->salary * $this->getCountEmployees() * 0.02);
    }
}
