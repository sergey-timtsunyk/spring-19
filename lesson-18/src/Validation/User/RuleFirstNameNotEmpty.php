<?php


namespace App\Validation\User;


use App\Validation\Exception\ValidateException;
use App\Validation\ValidationRuleInterface;

class RuleFirstNameNotEmpty implements ValidationRuleInterface
{
    private const KEY = 'firstName';

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
            throw new ValidateException(self::KEY, 'Имя должно содержать больше 3 символов');
        }
    }
}