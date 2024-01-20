<?php

require_once "vendor/autoload.php";

use Thiago\BehavioralPattern\Budget;
use Thiago\BehavioralPattern\BudgetsList;

$budget = new Budget();
$budget->itemsQuantity = 7;
$budget->aprove();
$budget->value = 1500.75;

$budget2 = new Budget();
$budget2->itemsQuantity = 3;
$budget2->reprove();
$budget2->value = 150;

$budget3 = new Budget();
$budget3->itemsQuantity = 5;
$budget3->aprove();
$budget3->finish();
$budget3->value = 1350;

$budgetsList = new BudgetsList();
$budgetsList->addBudget($budget);
$budgetsList->addBudget($budget2);
$budgetsList->addBudget($budget3);

foreach ($budgetsList as $budget) {
    echo "Valor: " . $budget->value . PHP_EOL;
    echo "Estado: " . get_class($budget->atualState) . PHP_EOL;
    echo "Qtd. Itens: " . $budget->itemsQuantity . PHP_EOL;

    echo PHP_EOL;
}