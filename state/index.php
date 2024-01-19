<?php

use Thiago\BehavioralPattern\Budget;
use Thiago\BehavioralPattern\DiscountCalculator;

require 'vendor/autoload.php';

$calculator = new DiscountCalculator();

$budget = new Budget();
$budget->itemsQuantity = 3;
$budget->value = 100;

echo "Calculadora de descontos calculou desconto para o orçamento : " . $calculator->calculateDiscount($budget) .  PHP_EOL;

try {
    echo "Valor do orçamento : " . $budget->value . PHP_EOL;
    
    echo "Cliente pediu desconto" . PHP_EOL;
    $budget->applyExtraDiscount();
    
    echo "Valor atual do orçamento :" . $budget->value . PHP_EOL;
    
    $budget->aprove();
    echo "Orçamento foi aprovado.". PHP_EOL;
    
    echo "Cliente pediu mais desconto.". PHP_EOL;
    $budget->applyExtraDiscount();

    echo "Valor atual do orçamento :" . $budget->value . PHP_EOL;
    
    echo "Pedido sendo finalizado..." . PHP_EOL;
    $budget->finish();
    echo "Pedido finalizado com sucesso!" . PHP_EOL;

    echo "Cliente pediu mais desconto.". PHP_EOL;
    $budget->applyExtraDiscount();

} catch (\Throwable $th) {
    echo $th->getMessage();
}