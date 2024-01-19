<?php

namespace Thiago\BehavioralPattern\Discounts;

use Thiago\BehavioralPattern\Budget;

class NoDiscount extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        return 0;
    }
}
