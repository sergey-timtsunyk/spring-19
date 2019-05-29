<?php

namespace App\Service;

interface TransformInterface
{
    public function convert(array $data): string;
}