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
        Schema::create('vehicle_parts', function (Blueprint $table) {
            $table->id();
            $table->string('part_name');
            $table->binary('part_image');
            $table->string('description');
            $table->decimal('price', 8, 2);
            $table->string('condition')->nullable();

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');

            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->foreign('vehicle_id')->references('id')->on('vehicle_models');

            $table->unsignedBigInteger('fuel_type')->nullable();
            $table->foreign('fuel_type')->references('id')->on('fuel_types');

            $table->date('year')->nullable();
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
        Schema::dropIfExists('vehicle_parts');
    }
};
