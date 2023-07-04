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
        Schema::create('teacher_information', function (Blueprint $table) {
            $table->id('ID_Teacher');
            $table->integer('Faculty_ID');
            $table->string('Image', 255);
            $table->string('Username', 20);
            $table->string('Password', 255);
            $table->string('Teacher_Name', 20);
            $table->string('Phone_Number',20);
            $table->string('Address', 70);
            $table->string('Gender',4);
            $table->date('Date_Of_Birth');
            $table->smallInteger('IsDeleted');
            $table->smallInteger('Status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_information');
    }
};
