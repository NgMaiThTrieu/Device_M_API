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
        Schema::create('report_emails', function (Blueprint $table) {
            $table->id('Email_ID');
            $table->string('Student_Code', 10);
            $table->text('Device_Image');
            $table->string('QR_Code', 20);
            $table->string('Description', 255);
            $table->integer('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_emails');
    }
};
