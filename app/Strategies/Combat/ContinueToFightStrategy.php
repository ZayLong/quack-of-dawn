<?php

namespace App\Strategies\Combat;

use App\Jobs\InsertDuckRecordsJob;
use App\Models\Duck;
use App\Strategies\Combat\Interface\CombatStrategyInterface;


class ContinueToFightStrategy implements CombatStrategyInterface
{
    public function executePlan(){
        //agregate combat data

    }
}
