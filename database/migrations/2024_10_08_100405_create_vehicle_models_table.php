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
        Schema::create('vehicle_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('vehicle_brands');
            $table->string('vehicle_name');
            $table->binary('vehicle_image');
            $table->string('model');
            $table->date('year');
            $table->unsignedBigInteger('fuel_type');
            $table->foreign('fuel_type')->references('id')->on('fuel_types');
            $table->string('engine', $precision = 0)->nullable();
            $table->string('power', $precision = 0)->nullable();
            $table->unsignedBigInteger('vehicle_type');
            $table->foreign('vehicle_type')->references('id')->on('vehicletype');   //2 wheeler,3 wheeler
            $table->tinyInteger('status')->default(1)->comment('1:active,0:inactive');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_models');
    }
};
