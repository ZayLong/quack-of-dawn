<?php

namespace App\Strategies\Combat;

use App\Models\Duck;
use App\Strategies\Combat\Interface\CombatStrategyInterface;

class UpgradeEquipment implements CombatStrategyInterface
{
    public function executePlan(){
        //Implement the function here
        Duck::upgradeWeapon();
    }
}

class ContinueToFight implements CombatStrategyInterface
{
    public function executePlan(){
        //Implement the function here

    }
}
