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
        Schema::create('soal_models', function (Blueprint $table) {
            $table->id('soal_id');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('survei_id')->unsigned()->index()->nullable();
            $table->foreign('survei_id')->references('survei_id')->on('survei_models')->onDelete('cascade');
            $table->string('nama');
            $table->enum('opsi', ['N', 'Y'])->default('N');
            $table->enum('active', ['N', 'Y'])->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal_models');
    }
};
