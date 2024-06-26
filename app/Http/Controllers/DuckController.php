<?php

namespace App\Http\Controllers;

use App\Jobs\InsertDuckRecordsJob;
use App\Models\Duck;
use App\Strategies\Combat\Context\CombatStrategyContext;
use App\Strategies\Combat\UpgradeEquipmentStrategy;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;

class DuckController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $duck = new Duck();
            $duck->fill($data);
            $duck->save();
            InsertDuckRecordsJob::dispatch($duck);
            return $duck->toJson();
        }catch (QueryException $e){
            return $e->getMessage();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Duck $duck)
    {
        return 'quack';
/*        return view('browse_ducks', [
            'ducks' => Duck::where('runtime', '<', 60)
                ->where('votes', '>', 8.5)
                ->orderBy('votes', 'desc')
                ->take(10)
                ->get()
        ]);*/
/*        try {

            $result = Duck::where('rating', '<', 60)
                ->orderBy('rating', 'desc')
                ->take(50000)
                ->pluck('rating');
            return $result->toJson();
        } catch (QueryException $e){
            return "Returned with error: " . $e->getMessage();
        }*/

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Duck $duck)
    {
        //InsertDuckRecordsJob::dispatch();
        //return Duck::countTheWounded();
        //return Duck::upgradeWeapon();
        try {
            $strategy = new CombatStrategyContext(new UpgradeEquipmentStrategy());
        } catch (QueryException $e) {
            return $e->getMessage();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Duck $duck)
    {
        //
    }
}
