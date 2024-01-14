<?php

namespace Thiago\BehavioralPattern\Taxes;

use Thiago\BehavioralPattern\Budget;

abstract class TaxWithTwoRates
{
    public function calculate(Budget $budget): float
    {
        if($this->mustApplyMaxTax($budget)) {
            return $this->calculateMaxTax($budget);
        }

        return $this->calculateMinTax($budget);
    }

    abstract protected function mustApplyMaxTax(Budget $budget): bool;
    abstract protected function calculateMaxTax(Budget $budget): float;
    abstract protected function calculateMinTax(Budget $budget): float;
}