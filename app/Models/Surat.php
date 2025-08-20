<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $table = 'surats';
    protected $fillable = [
        'penduduk_id', 'template_id', 'nomor_surat', 'data_json'
    ];

    // Relasi ke Penduduk
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'penduduk_id');
    }

    // Relasi ke TemplateSurat
    public function template()
    {
        return $this->belongsTo(TemplateSurat::class, 'template_id');
    }
}
