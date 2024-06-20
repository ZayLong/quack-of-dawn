<?php

namespace App\Strategies\Combat\Context;

use App\Strategies\Combat\Interface\CombatStrategyInterface;

class CombatStrategyContext
{
    private $strategy;

    public function __construct(CombatStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy(){
        return $this->strategy->executePlan();
    }
}
