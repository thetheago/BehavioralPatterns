<?php

namespace Thiago\BehavioralPattern;

use Thiago\BehavioralPattern\Discounts\DiscountItemsMoreThanFive;
use Thiago\BehavioralPattern\Discounts\DiscountValueMoreThan1000;
use Thiago\BehavioralPattern\Discounts\DiscountValueMoreThan500;
use Thiago\BehavioralPattern\Discounts\NoDiscount;

class DiscountCalculator
{
    public function calculateDiscount(Budget $budget) : float
    {
        $discounts = [
            DiscountValueMoreThan500::class,
            DiscountValueMoreThan1000::class,
            NoDiscount::class,
        ];

        $discountItemsMoreThanFive = new DiscountItemsMoreThanFive();
        $discountItemsMoreThanFive->setMap($discounts);
        
        return $discountItemsMoreThanFive->calculateDiscount($budget);
    }
}
