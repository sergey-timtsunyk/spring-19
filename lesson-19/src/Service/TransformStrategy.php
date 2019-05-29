<?php

namespace App\Service;

class TransformStrategy
{
    /**
     * @var array
     */
    private $collection = [];

    public function setTransform(string $key, TransformInterface $transform): void
    {
        $this->collection[$key] = $transform;
    }

    /**
     * @param string $key
     * @return TransformInterface
     */
    public function getTransform(string $key): TransformInterface
    {
        if (!array_key_exists($key, $this->collection)) {
            throw new \RuntimeException(sprintf('Not found TransformInterface object by key:[%s]', $key));
        }

        return $this->collection[$key];
    }
}