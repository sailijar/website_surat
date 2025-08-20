<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('template_surats', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama template, contoh: Surat Keterangan
            $table->json('fields')->nullable(); // field tambahan (keperluan, tujuan, dll)
            $table->longText('isi'); // isi template dengan placeholder {{nama}}, {{nik}}, {{alamat}}, dll
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('template_surats');
    }
};
