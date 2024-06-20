<?php

namespace App\Jobs;

use App\Models\Duck;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Schema;
use MongoDB\Laravel\Schema\Blueprint;

class InsertDuckRecordsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected array $duckRecords;

    /**
     * Create a new job instance.
     */


    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //Duck::chunk(500,100000);
        print("HEALING OUR TROOPS!");


/*        Schema::create('ducks', function (Blueprint $table) {

            $table->id()->unique();
            $table->timestamps();
            $table->string('title');
            $table->string('year');
            $table->float('runtime');
            $table->longText('plot');
            $table->float('rating');
            $table->float('votes');
        });*/
    }
}
