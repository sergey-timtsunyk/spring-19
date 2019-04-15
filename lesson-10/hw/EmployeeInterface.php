<?php

declare(strict_types=1);

interface EmployeeInterface
{
    public function getName(): string;

    public function getSalary(): float;

    public function getPosition(): string;

    public function getStartDate(): DateTimeInterface;
}
