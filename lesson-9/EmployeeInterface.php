<?php

declare(strict_types=1);

interface EmployeeInterface
{
    public function setName($name);

    public function getName();

    public function setDayOfB($date);

    public function dayOfB();
}
