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
        Schema::create('appointmentService', function (Blueprint $table) {
            $table->unsignedBigInteger('appointmentId');
            $table->unsignedBigInteger('serviceId');
            $table->decimal('totalPrice', 10, 2);
            $table->primary(['appointmentId', 'serviceId']);
            $table->foreign('appointmentId')->references('id')->on('appointment')->onDelete('cascade');
            $table->foreign('serviceId')->references('id')->on('service')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointmentService');
    }
};
