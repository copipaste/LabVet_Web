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
        Schema::create('medicalRecord', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('petId');
            $table->date('date');
            $table->text('description');
            $table->foreign('petId')->references('id')->on('pet')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicalRecord');
    }
};
