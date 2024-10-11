<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('Client_name',40)->nullable();
            $table->string('First_last_name', 40)->nullable();
            $table->string('second_last_name', 40)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('down', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
