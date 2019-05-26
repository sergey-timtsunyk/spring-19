<?php


namespace App\Validation;


interface ValidationRuleInterface
{
    public function isKey(string $key);

    public function validate($data);
}