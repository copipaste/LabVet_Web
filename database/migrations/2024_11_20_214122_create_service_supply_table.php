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
        Schema::create('serviceSupply', function (Blueprint $table) {
            $table->unsignedBigInteger('supplyId');
            $table->unsignedBigInteger('serviceId');
            $table->integer('quantity');
            $table->string('unit', 20);
            $table->primary(['supplyId', 'serviceId']);
            $table->foreign('supplyId')->references('id')->on('supply')->onDelete('cascade');
            $table->foreign('serviceId')->references('id')->on('service')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serviceSupply');
    }
};
