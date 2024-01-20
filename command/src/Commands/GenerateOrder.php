<?php

namespace Thiago\BehavioralPattern\Commands;

use DateTimeImmutable;
use Thiago\BehavioralPattern\Budget;
use Thiago\BehavioralPattern\Order;

class GenerateOrder implements Command
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

    public function execute()
    {
        $budget = new Budget();
        $budget->itemsQuantity = $this->itemsQuantity;
        $budget->value = $this->budgetValue;

        $order = new Order();
        $order->finalDate = new DateTimeImmutable();
        $order->clientName = $this->clientName;
        $order->budget = $budget;

        echo "Cria pedido no banco de dados ". PHP_EOL;
        echo "Envia e-mail para o client ". PHP_EOL;
    }
}