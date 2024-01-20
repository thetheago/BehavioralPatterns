<?php

namespace Thiago\BehavioralPattern;

use ArrayIterator;
use IteratorAggregate;

class BudgetsList implements IteratorAggregate
{

    /* @var Budget[] */
    private array $budgets;

    public function __construct()
    {
        $this->budgets = [];
    }

    public function addBudget(Budget $budget)
    {
        $this->budgets[] = $budget;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->budgets);
    }
}
