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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penduduk_id');
            $table->unsignedBigInteger('template_id');
            $table->string('nomor_surat', 50)->unique();
            $table->json('data_json');
            $table->timestamps();

            $table->foreign('penduduk_id')->references('id')->on('penduduks')->onDelete('cascade');
            $table->foreign('template_id')->references('id')->on('templatesurats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
