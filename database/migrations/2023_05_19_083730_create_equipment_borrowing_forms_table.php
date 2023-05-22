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
        Schema::create('equipment_borrowing_forms', function (Blueprint $table) {
            $table->id('Equipment_Borrowing_Form_ID');
            $table->integer('Device_ID');
            $table->integer('Borrower_ID');
            $table->integer('Lender_ID');
            $table->dateTime('Borrow_Date');
            $table->dateTime('Due_Date');
            $table->smallInteger('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_borrowing_forms');
    }
};
