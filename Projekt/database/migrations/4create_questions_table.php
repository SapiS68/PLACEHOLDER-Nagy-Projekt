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
            $table->integer('first_attempt')->default(0);
            $table->integer('second_attempt')->default(0);
            $table->integer('third_attempt')->default(0);
            $table->integer('fourth_attempt')->default(0);
            $table->integer('fifth_attempt')->default(0);
            $table->integer('missed')->default(0);
            $table->integer('total_time_in_secs')->default(0);
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
