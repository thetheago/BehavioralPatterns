<?php

namespace Thiago\BehavioralPattern\Taxes;

use Thiago\BehavioralPattern\Budget;

class Icpp extends TaxWithTwoRates
{
    protected function mustApplyMaxTax(Budget $budget): bool
    {
        return $budget->value > 500;
    }

    protected function calculateMaxTax(Budget $budget): float
    {
        return $budget->value * 0.03;
    }

    protected function calculateMinTax(Budget $budget): float
    {
        return $budget->value * 0.02;
    }
}
