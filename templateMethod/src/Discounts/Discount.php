<?php

namespace Thiago\BehavioralPattern\Discounts;

use Thiago\BehavioralPattern\Budget;

abstract class Discount
{
    protected Discount $nextDiscount;

    protected static int $discountSequence = -1;

    protected array $discounts = [
        DiscountValueMoreThan500::class,
        DiscountValueMoreThan1000::class,
        NoDiscount::class,
    ];

    abstract public function calculateDiscount(Budget $budget): float;

    public function setNextDiscount(Discount $discount): void
    {
        $this->nextDiscount = $discount;
    }

    protected function chainDiscount(Budget $budget): float
    {
        $nextDiscount = new $this->discounts[++self::$discountSequence]();
        return $nextDiscount->calculateDiscount($budget);
    }
}
