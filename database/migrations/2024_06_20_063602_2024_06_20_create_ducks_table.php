<?php

use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use MongoDB\Laravel\Schema\Blueprint;

return new class extends Migration
{

    protected $connection = 'mongodb';
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('ducks', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamps();
            $table->string('status');
            $table->float('hit_points');
            $table->longText('equipment');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('ducks');

    }
};
