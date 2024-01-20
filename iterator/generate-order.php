<?php

require_once "vendor/autoload.php";

$budgetValue = $argv[1];
$itemsQuantity = $argv[1];
$clientName  = $argv[1];

$generateOrder = new \Thiago\BehavioralPattern\Commands\GenerateOrder($budgetValue, $itemsQuantity, $clientName);
$generateOrderHandler = new \Thiago\BehavioralPattern\Commands\GenerateOrderHandler();
$generateOrderHandler->execute($generateOrder);
