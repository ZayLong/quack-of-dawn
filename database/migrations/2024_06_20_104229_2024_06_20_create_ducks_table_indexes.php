<?php

use Illuminate\Database\Migrations\Migration;
use MongoDB\Laravel\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'mongodb';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('ducks', function (Blueprint $table) {
            $table->index(['rating'],'duck_rating');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ducks', function (Blueprint $table) {
            $x = $table->hasIndex('duck_rating');
            if($x === true) {
                $table->dropIndex('duck_rating');
            }
        });
    }
};
