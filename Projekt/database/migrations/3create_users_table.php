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
        Schema::create('users', function (Blueprint $table) {
            $table->string('username')->primary();
            $table->integer('role_id');
            $table->string('password');

            // copy-paste from https://laravel.com/docs/5.8/api-authentication
            $table->string('api_token', 80)
                        ->unique()
                        ->nullable()
                        ->default(null);
                        
            $table->string('email')->unique();
            $table->timestamps();

            $table->foreign('role_id')->references('role_id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
