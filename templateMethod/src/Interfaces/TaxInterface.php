<?php

namespace Thiago\BehavioralPattern\Interfaces;

use Thiago\BehavioralPattern\Budget;

interface TaxInterface
{
    public function calculate(Budget $budget): float;
}
