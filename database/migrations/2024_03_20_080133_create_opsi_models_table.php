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
        Schema::create('opsi_models', function (Blueprint $table) {
            $table->id('opsi_id');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('soal_id')->unsigned()->index()->nullable();
            $table->foreign('soal_id')->references('soal_id')->on('soal_models')->onDelete('cascade');
            $table->string('nama');
            $table->string('type');
            $table->enum('active', ['N', 'Y'])->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opt_models');
    }
};
