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
        Schema::create('attempt', function (Blueprint $table) {
            $table->dateTime('date')->primary();
            $table->string('username');
            $table->integer('attempt_number')->nullable();
            $table->time('attempt_time')->nullable();
            $table->timestamps();

            $table->foreign('date')->references('date')->on('questions');
            $table->foreign('username')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attempt');
    }
};
