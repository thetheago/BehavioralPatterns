<?php

namespace Thiago\BehavioralPattern\BudgetStates;

use Thiago\BehavioralPattern\Budget;

class BudgetAproved extends BudgetState
{
    public function calculateExtraValue(Budget $budget): float
    {
        return $budget->value * 0.02;
    }

    public function finish(Budget $budget): void
    {
        $budget->atualState = new BudgetFinished();
    }
}
