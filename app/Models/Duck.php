<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use MongoDB\Laravel\Eloquent\Model;
use Psy\Util\Json;

class Duck extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = ['weapon','armor','status','hit_points'];
    use HasFactory;

    public function chunkTheTroops(int $chunkSize, int $totalSize): void
    {
        $chunks = 100;
        $total = 100000;

        for ($i = 0; $i * $chunks < $total; $i++) {
            Duck::factory()->count($chunks)->create();
        }
    }

    public static function quack(): string
    {
        try {
        $result = Duck::where('hit_points', '<', 60)
            ->orderBy('hit_points', 'desc')
            ->take(50000)
            ->pluck('hit_points');
            return $result->toJson();
        } catch (QueryException $e){
            return "Returned with error: " . $e->getMessage();
        }
    }

    public static function countTheWounded()
    {
        $result =  Duck::where('hit_points', '<', 60)
            ->update(['status' => 'DEAD']);
        return $result;
    }

    public static function upgradeWeapon()
    {
        $result = Duck::where('equipment.weapon', '<', 5.0)
            ->orderBy('equipment.weapon', 'desc')
            ->take(10)
            ->update(['equipment.weapon' => '5.0']);
            //->pluck('equipment');
        //return $result->toJson();
        return $result;
    }

    public static function  upgradeArmor()
    {
        $result = Duck::where('equipment.armor', '<', 2.0)
            ->orderBy('equipment.armor', 'desc')
            ->take(50000)
            ->update(['equipment.armor' => '5.0']);
    }


}
