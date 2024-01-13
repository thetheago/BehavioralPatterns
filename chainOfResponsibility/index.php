<?php

use Thiago\BehavioralPattern\Budget;
use Thiago\BehavioralPattern\DiscountCalculator;

require 'vendor/autoload.php';

$calculator = new DiscountCalculator();

$budget = new Budget();
$budget->itemsQuantity = 3;
$budget->value = 20;

echo $calculator->calculateDiscount($budget);
