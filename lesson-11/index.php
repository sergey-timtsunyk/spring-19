<?php

class Count
{
    private const START_STATE = 'старт';
    private const STOP_STATE = 'стоп';
    public $state;

    public function __construct()
    {
        $this->state = self::START_STATE;
    }

    public function isStart(): bool
    {
        return $this->state != self::START_STATE;
    }

    public function isStop(): bool
    {
        return $this->state != self::STOP_STATE;
    }

    public function stop()
    {
        $this->state = self::STOP_STATE;
    }

}


$count = new Count();

$count->state = 'count';
