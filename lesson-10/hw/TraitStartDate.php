<?php

declare(strict_types=1);

trait TraitStartDate
{
    /**
     * @var DateTimeInterface
     */
    protected $startDate;

    /**
     * @return DateTimeInterface
     */
    public function getStartDate(): DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param DateTimeInterface $startDate
     */
    public function setStartDate(DateTimeInterface $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     *
     * @return int|string
     * @throws Exception
     */
    protected function countYearsFromStart(): int
    {
        $interval = $this->startDate->diff(new DateTime());
        $countYears = $interval->format('%y');

        return (int)$countYears;
    }
}
