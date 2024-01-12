<?php

namespace Thiago\BehavioralPattern;

use Thiago\BehavioralPattern\Interfaces\TaxInterface;

class TaxCalculator
{
    public function calculate(Budget $budget, TaxInterface $tax): float
    {
        return $tax->calculate($budget);
    }
}
