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
            $table->foreignId('penduduk_id')->constrained()->cascadeOnDelete();
            $table->foreignId('surat_template_id')->constrained()->cascadeOnDelete();
            $table->text('isi'); // surat yang digenerate
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
