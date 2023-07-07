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
        Schema::create('type_of_devices', function (Blueprint $table) {
            $table->id('Type_Of_Device_ID');
            $table->string('Type_Of_Device_Name', 20);
            $table->string('Image', 255);
            $table->string('Icon',255);
            $table->integer('Status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_of_devices');
    }
};
