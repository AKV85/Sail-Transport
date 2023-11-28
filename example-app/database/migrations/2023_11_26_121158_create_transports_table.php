<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('model_id');
            $table->string('car_number')->unique();
            $table->float('fuel_tank_capacity(l)');
            $table->float('average_fuel_consumption(l/100km)');
            $table->float('projected_distance(km)');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('model_id')->references('id')->on('car_models');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};
