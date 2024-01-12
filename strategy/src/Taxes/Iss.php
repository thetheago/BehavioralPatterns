<?php

namespace Thiago\BehavioralPattern\Taxes;

use Thiago\BehavioralPattern\Interfaces\TaxInterface;

class Iss implements TaxInterface
{
    public function calculate($budget): float
    {
        return $budget->value * 0.06;
    }
}