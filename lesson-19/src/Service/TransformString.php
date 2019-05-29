<?php

namespace App\Service;

class TransformString implements TransformInterface
{
    public function convert(array $data): string
    {
        $str = '';
        foreach ($data as $k => $v) {
            $str .= sprintf('%s:[%s]%s', $k, $v->getId(), PHP_EOL);
        }
        return $str;
    }
}