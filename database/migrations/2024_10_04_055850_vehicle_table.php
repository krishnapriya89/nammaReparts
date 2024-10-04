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
        if (!Schema::hasTable('vehicle_table')) {
            Schema::create('vehicle_table', function (Blueprint $table) {
                $table->id();
                $table->binary('image');
                $table->string('make');
                $table->string('model');
                $table->timestamp('year');
                $table->tinyInteger('vehicle_type');
                $table->tinyInteger('active_status');
                $table->tinyInteger('delete_status')->nullable();
                $table->datetime('created_on', $precision = 0);
                $table->timestamp('modified_on', $precision = 0)->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
