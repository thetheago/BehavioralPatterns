<?php

namespace Thiago\BehavioralPattern;

use DomainException;

class Budget
{
    public int $itemsQuantity;

    public float $value;

    public string $atualState;

    public function applyExtraDiscount()
    {
        $this->value -= $this->calculateExtraValue();
    }

    public function calculateExtraValue(): float
    {
        if ($this->atualState == 'EM_APROVACAO') {
            return $this->value * 0.05;
        }

        if($this->atualState == 'APROVADO') {
            return $this->value * 0.02;
        }

        return new DomainException('Orçamentos repoados e finializados não podem receber desconto');
    }
}