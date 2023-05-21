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
        Schema::create('bod_details', function (Blueprint $table) {
            $table->integer('Batch_Of_Goods_ID');
            $table->integer('Device_ID');
            $table->integer('Quantity');
            $table->decimal('Unit_Price', 10, 2);
            $table->primary(['Batch_Of_Goods_ID', 'Device_ID']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bod_details');
    }
};
