<?php

namespace Thiago\BehavioralPattern\Commands;

class GenerateOrder
{
    private float $budgetValue;
    private int $itemsQuantity;
    private string $clientName;

    public function __construct(
        float $budgetValue,
        int $itemsQuantity,
        string $clientName
    )
    {
        $this->budgetValue = $budgetValue;
        $this->itemsQuantity = $itemsQuantity;
        $this->clientName = $clientName;
    }

    public function getBudgetValue(): float
    {
        return $this->budgetValue;
    }

    public function getItemsQuantity(): int
    {
        return $this->itemsQuantity;
    }

    public function getClientName(): string
    {
        return $this->clientName;
    }
}