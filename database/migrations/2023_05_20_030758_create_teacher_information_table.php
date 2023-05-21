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
            $table->integer('ID_Teacher');
            $table->integer('Department_ID');
            $table->string('Username', 20);
            $table->string('Password', 12);
            $table->string('Teacher_Name', 20);
            $table->integer('Phone_Number');
            $table->string('Address', 70);
            $table->timestamps();
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
