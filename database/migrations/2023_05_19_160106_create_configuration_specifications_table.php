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
            $table->integer('ID_Device');
            $table->integer('ID_Configuration_Detail');
            $table->string('Specifications', 20);
            $table->string('Brand', 20);
            $table->smallInteger('Status');
            $table->text('Note');
            $table->primary(['ID_Device', 'ID_Configuration_Detail']);
            $table->timestamps();
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
