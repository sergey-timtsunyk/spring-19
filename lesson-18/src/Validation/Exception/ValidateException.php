<?php


namespace App\Validation\Exception;


use Throwable;

class ValidateException extends \Exception
{
    /**
     * @var string
     */
    private $key;

    /**
     * ValidateException constructor.
     * @param string $key
     */
    public function __construct(string $key, $message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
}