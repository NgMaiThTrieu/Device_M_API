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
        Schema::create('detail_cons', function (Blueprint $table) {
            $table->integer('DC_ID_Detail_Configuration');
            $table->integer('CID_Detail_Configuration');
            $table->primary(['DC_ID_Detail_Configuration', 'CID_Detail_Configuration']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_cons');
    }
};
