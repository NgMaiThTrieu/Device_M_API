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
        Schema::create('configuration_specifications', function (Blueprint $table) {
            $table->integer('Device_ID');
            $table->integer('Configuration_Detail_ID');
            $table->string('Specification', 30);
            $table->integer('Brand_ID')->nullable();
            $table->smallInteger('Status');
            $table->string('Note')->nullable();
            $table->primary(['Device_ID','Configuration_Detail_ID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuration_specifications');
    }
};
