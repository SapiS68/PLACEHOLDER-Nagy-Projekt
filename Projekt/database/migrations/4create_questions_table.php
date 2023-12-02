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
        Schema::create('questions', function (Blueprint $table) {
            $table->date('date')->primary();
            $table->string('solution_id');
            $table->integer('first_attempt');
            $table->integer('second_attempt');
            $table->integer('third_attempt');
            $table->integer('fourth_attempt');
            $table->integer('fifth_attempt');
            $table->integer('missed');
            $table->time('total_time');
            $table->timestamps();

            $table->foreign('solution_id')->references('solution_id')->on('solutions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
