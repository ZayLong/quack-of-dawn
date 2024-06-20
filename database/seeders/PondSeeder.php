<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Duck;

class PondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chunks = 100;
        $total = 100000;


       for ($i = 0; $i * $chunks < $total; $i++) {
            Duck::factory()->count($chunks)->create();
        }
/*        for ($i = 0; $i * $chunks < $total; $i++) {
            $duckBatch = [];
            for ($j = 0; $j < $chunks; $j++) {
                $duckBatch[] = [
                    Duck::factory()->make()
                ];
            }
            InsertDuckRecordsJob::dispatch($duckBatch);
            $duckBatch = null;
        }*/

    }
}
