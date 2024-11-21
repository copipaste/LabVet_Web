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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('clientId');
            $table->unsignedBigInteger('doctorId');
            $table->foreign('clientId')->references('userId')->on('client')->onDelete('cascade');
            $table->foreign('doctorId')->references('userId')->on('doctor')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
