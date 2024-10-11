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
        Schema::create('exam', function (Blueprint $table) {
            $table->id('exam_id');
            $table->foreignId('subject_id')->unsigned();
            $table->string('Tittle', 50)->nullable();
            $table->foreignId('students_id')->unsigned();
            $table->integer('tuition')->unsigned()->nullable();
            $table->string('Note', 100)->nullable();
            $table->foreignId('period_id')->unsigned();
            $table->string('partial', 100)->nullable();
            $table->timestamps();

            $table -> foreign('students_id')->references('id')->on('students')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('subject_id')->references('id')->on('subject')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('period_id')->references('id')->on('period')
            ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam');
    }
};
