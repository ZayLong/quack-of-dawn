<?php

namespace App\Jobs;

use App\Models\Duck;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class InsertDuckRecordsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $duck;


    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public int $tries = 3;
    /**
     * Create a new job instance.
     *
     * @param  Duck  $duck
     * @return void
     */
    public function __construct(Duck $duck)
    {
        $this->duck = $duck;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //Duck::chunk(500,100000);

        $this->duck->where('equipment.weapon', '>=', 3.0)
            ->update((['status' => 'LEGEND']));
        $this->duck->upgradeArmor();
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
