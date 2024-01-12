<?php

use Thiago\BehavioralPattern\Budget;
use Thiago\BehavioralPattern\TaxCalculator;
use Thiago\BehavioralPattern\Taxes\Iss;

require 'vendor/autoload.php';

$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

echo $calculator->calculate($budget, new Iss());
