<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'penduduk_id',
        'template_surat_id',
        'nomor',
        'tanggal_surat',
        'fields',
    ];

    protected $casts = [
        'fields' => 'array',
        'tanggal_surat' => 'date',
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class);
    }

    public function template()
    {
        return $this->belongsTo(TemplateSurat::class, 'template_surat_id');
    }
}
