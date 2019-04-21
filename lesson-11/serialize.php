<?php

class Test
{
    private $count;
    private $name;

    /**
     * A constructor.
     * @param $count
     * @param $name
     */
    public function __construct(int $count, string $name)
    {
        $this->count = $count;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }
}



$a = new Test(90, 'class-A');

$str = serialize($a);

unset($a);

echo ($str);

$d = unserialize($str);

var_dump($d);















