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
        Schema::create('borrowing_details', function (Blueprint $table) {
            $table->id('id');
            $table->integer('Borrowing_ID');
            $table->integer('Device_ID');
            $table->integer('Room_ID');
            $table->integer('Old_Room_ID');
            $table->integer('Status');
            $table->integer('Old_Status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowing_details');
    }
};
