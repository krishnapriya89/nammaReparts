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
        Schema::table('categories', function (Blueprint $table) {
            $table->unsignedBigInteger('vehicle_model_id')->nullable()->after('id');
            $table->foreign('vehicle_model_id')->references('id')->on('vehicle_models');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign(['vehicle_model_id']);  // Drop the foreign key
            $table->dropColumn('vehicle_model_id');
        });
    }
};
