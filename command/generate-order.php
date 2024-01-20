<?php

require_once "vendor/autoload.php";

use Thiago\BehavioralPattern\{Budget, Order};

$budgetValue = $argv[1];
$itemsQuantity = $argv[1];
$clientName  = $argv[1];

$budget = new Budget();
$budget->itemsQuantity = $itemsQuantity;
$budget->value = $budgetValue;

$order = new Order();
$order->finalDate = new DateTimeImmutable();
$order->clientName = $clientName;
$order->budget = $budget;

echo "Cria pedido no banco de dados ". PHP_EOL;
echo "Envia e-mail para o cliente ". PHP_EOL;
