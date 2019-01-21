<?php

namespace App\Helper;

use InvalidArgumentException;

class CalcHelper
{
    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    public function divide(int $a, int $b): float
    {
        if ($b === 0) {
            throw new InvalidArgumentException('Division by zero is forbidden'.PHP_EOL);
        }
        return $a / $b;
    }
}