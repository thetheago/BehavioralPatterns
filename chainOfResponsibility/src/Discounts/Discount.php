<?php

namespace Thiago\BehavioralPattern\Discounts;

use Thiago\BehavioralPattern\Budget;

abstract class Discount
{
    protected Discount $nextDiscount;

    protected int $discountSequence = -1;

    protected array $map;

    abstract public function calculateDiscount(Budget $budget): float;

    public function setNextDiscount(Discount $discount): void
    {
        $this->nextDiscount = $discount;
    }

    public function setMap(array $map): void
    {
        $this->map = $map;
    }
}
