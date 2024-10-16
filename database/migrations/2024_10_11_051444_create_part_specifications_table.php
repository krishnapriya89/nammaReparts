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
        Schema::create('part_specifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('vehicle_brands');
            $table->unsignedBigInteger('vehicle_model_id');
            $table->foreign('vehicle_model_id')->references('id')->on('vehicle_models');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->unsignedBigInteger('part_id');
            $table->foreign('part_id')->references('id')->on('vehicle_parts');
            $table->integer('accessory')->nullable();
            $table->integer('outer_diameter')->nullable();
            $table->integer('net_quantity')->nullable();
            $table->integer('quantity_per_axle')->nullable();
            $table->integer('required_quantity')->nullable();
            $table->integer('weight(kg)')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->string('fitting_position')->nullable();
            $table->integer('inner_diameter')->nullable();
            $table->string('material')->nullable();
            $table->string('fitting_place')->nullable();
            $table->string('manufacturer')->nullable();
            $table->text('address_manufacturer')->nullable();
            $table->string('mounting_type')->nullable();
            $table->string('pcd')->nullable();
            $table->integer('number_of_holes')->nullable();
            $table->string('diameter')->nullable();
            $table->string('dimensions')->nullable();
            $table->text('other_specifications')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_specifications');
    }
};
