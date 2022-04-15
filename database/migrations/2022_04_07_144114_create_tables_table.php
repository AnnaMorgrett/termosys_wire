<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->float('ph_1');
            $table->float('temp_1');
            $table->float('temp_2');
            $table->float('temp_3');
            $table->float('distance_feeder');
            $table->float('distance_water');
            $table->integer('water_discharge');
            // $table->timestamp('time_rtc', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
};
