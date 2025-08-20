<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateSurat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'fields',
        'isi',
    ];

    protected $casts = [
        'fields' => 'array', // biar otomatis jadi array saat diambil
    ];

    public function surats()
    {
        return $this->hasMany(Surat::class);
    }
}
