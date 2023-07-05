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
        Schema::create('device_borrowing_forms', function (Blueprint $table) {
            $table->id('id');
            $table->integer('Borrower_ID');
            $table->integer('Lender_ID');
            $table->dateTime('Borrowing_Date');
            $table->dateTime('Due_Date');
            $table->smallInteger('Status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_borrowing_forms');
    }
};
