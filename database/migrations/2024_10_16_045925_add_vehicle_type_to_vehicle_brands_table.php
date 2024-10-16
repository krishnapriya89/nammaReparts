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
        Schema::table('vehicle_brands', function (Blueprint $table) {
            $table->unsignedBigInteger('vehicle_type_id')->after('id');
            $table->foreign('vehicle_type_id')->references('id')->on('vehicletype');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicle_brands', function (Blueprint $table) {
              // Drop the foreign key constraint first
                $table->dropForeign(['vehicle_type_id']);

                // Then drop the column itself
                $table->dropColumn('vehicle_type_id');
        });
    }
};
