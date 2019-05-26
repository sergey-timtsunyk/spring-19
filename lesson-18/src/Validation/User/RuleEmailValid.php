<?php


namespace App\Validation\User;


use App\Validation\Exception\ValidateException;
use App\Validation\ValidationRuleInterface;

class RuleEmailValid implements ValidationRuleInterface
{
    private const KEY = 'email';

    public function isKey(string $key): bool
    {
        return $key === self::KEY;
    }

    /**
     * @param $data
     * @throws ValidateException
     */
    public function validate($data): void
    {
        if (filter_var($data, FILTER_VALIDATE_EMAIL) === false) {
            throw new ValidateException(self::KEY, 'Вы ввели не валидный email');
        }
    }
}