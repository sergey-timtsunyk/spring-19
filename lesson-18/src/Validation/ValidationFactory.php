<?php


namespace App\Validation;


class ValidationFactory
{
    /**
     * @var ValidationRuleInterface[]
     */
    private $rules;

    public function __construct(array $rules)
    {
        $this->rules = $rules;
    }

    public function data(array $data)
    {
        foreach ($data as $key => $value) {
            /** @var ValidationRuleInterface $rule */
            foreach ($this->rules as $rule) {
                if ($rule->isKey($key)) {
                    $rule->validate($value);
                }
            }
        }
    }
}