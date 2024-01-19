<?php

namespace Thiago\BehavioralPattern\BudgetStates;

use DomainException;
use Thiago\BehavioralPattern\Budget;

class BudgetFinished extends BudgetState
{
    /**
     * @throws DomainException;
     */
    public function calculateExtraValue(Budget $budget): float
    {
        throw new DomainException('Um orçamento finalizado não pode calcular valor extra');
    }
}