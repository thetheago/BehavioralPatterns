<?php

namespace Thiago\BehavioralPattern\Discounts;

use Thiago\BehavioralPattern\Budget;

class DiscountValueMoreThan1000 extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->value > 1000) {
            return $budget->value * 0.05;
        }

        $nextDiscount = new $this->map[++$this->discountSequence]();
        $nextDiscount->setMap($this->map);
        $nextDiscount->setDiscountSequence($this->discountSequence);
        return $nextDiscount->calculateDiscount($budget);
    }
}
