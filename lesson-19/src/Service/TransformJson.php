<?php

namespace App\Service;

class TransformJson implements TransformInterface
{
    public function convert(array $data): string
    {
        return json_encode($data);
    }
}