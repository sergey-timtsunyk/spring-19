<?php

declare(strict_types=1);

interface ManagerInterface
{
    public function getEmployees(): array;

    public function addEmployee(EmployeeInterface $employee): void;

    public function getCountEmployees(): int;

    public function deleteEmployee(EmployeeInterface $employee):void;
}
