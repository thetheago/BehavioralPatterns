<?php

namespace Thiago\BehavioralPattern;

use Thiago\BehavioralPattern\Discounts\DiscountItemsMoreThanFive;

class DiscountCalculator
{
    public function calculateDiscount(Budget $budget) : float
    {
        $discountItemsMoreThanFive = new DiscountItemsMoreThanFive();        
        return $discountItemsMoreThanFive->calculateDiscount($budget);
    }
}
