<?php
namespace App\Strategies\Combat;

use App\Jobs\InsertDuckRecordsJob;
use App\Models\Duck;
use App\Strategies\Combat\Interface\CombatStrategyInterface;

class UpgradeEquipmentStrategy implements CombatStrategyInterface
{
public function executePlan(){
Duck::upgradeWeapon();
//InsertDuckRecordsJob::dispatch();
}
}
