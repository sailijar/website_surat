<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penduduk_id')->constrained()->onDelete('cascade');
            $table->foreignId('template_surat_id')->constrained()->onDelete('cascade');
            $table->string('nomor');
            $table->date('tanggal_surat');
            $table->json('fields')->nullable(); // simpan data dinamis dari form
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
