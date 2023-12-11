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
        Schema::create('attempts', function (Blueprint $table) {
            $table->date('date');
            $table->string('username');
            $table->integer('attempt_number')->nullable();
            $table->time('attempt_time')->nullable();
            $table->tinyInteger('finished')->default('0');
            $table->timestamps();

            $table->primary(['date', 'username']);

            $table->foreign('date')->references('date')->on('questions');
            $table->foreign('username')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attempts');
    }
};
