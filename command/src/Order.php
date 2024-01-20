<?php

namespace Thiago\BehavioralPattern;

use Thiago\BehavioralPattern\Budget;

class Order
{
    public string $clientName;
    public \DateTimeInterface $finalDate;
    public Budget $budget;

}