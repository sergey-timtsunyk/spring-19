<?php


namespace App\Validation\User;


use App\Validation\Exception\ValidateException;
use App\Validation\ValidationRuleInterface;

class RuleLastNameNotEmpty implements ValidationRuleInterface
{
    private const KEY = 'lastName';

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
        if (strlen($data) < 3) {
            throw new ValidateException(self::KEY, 'Фамилия должно содержать больше 3 символов');
        }
    }
}