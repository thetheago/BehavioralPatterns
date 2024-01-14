<?php

namespace Thiago\BehavioralPattern\Taxes;

use Thiago\BehavioralPattern\Budget;
use Thiago\BehavioralPattern\Interfaces\TaxInterface;

class Icms implements TaxInterface
{
    public function calculate(Budget $budget): float
    {
        return $budget->value * 0.1;
    }
}