<?php

declare(strict_types=1);

abstract class AbstractEmployee
{
    /**
     * @var string
     */
    private $position;

    abstract public function getSalary(): float;

    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }
}
