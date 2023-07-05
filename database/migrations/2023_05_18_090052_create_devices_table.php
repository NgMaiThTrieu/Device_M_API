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
        Schema::create('devices', function (Blueprint $table) {
            $table->id('Device_ID');
            $table->integer('Type_Of_Device_ID');
            $table->integer('Supplier_ID');
            $table->integer('Batch_Of_Goods_ID');
            $table->integer('Room_ID');
            $table->integer('Faculty_ID');
            $table->integer('Brand_ID');
            $table->string('Device_Name', 50);
            $table->string('Image',255);
            $table->string('QRCode', 20);
            $table->integer('Location');
            $table->decimal('Price', 19, 4);
            $table->dateTime('Warranty_Period');
            $table->smallInteger('Status');
            $table->text('Note')->nullable();
            $table->text('Description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
