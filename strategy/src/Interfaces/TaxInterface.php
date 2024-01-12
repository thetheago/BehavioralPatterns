<?php

namespace Thiago\BehavioralPattern\Interfaces;

interface TaxInterface
{
    public function calculate($budget): float;
}
