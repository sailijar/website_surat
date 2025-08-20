<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = 'penduduks'; // nama tabel di DB
    protected $fillable = [
        'nik', 'nama', 'alamat', 'tanggal_lahir', 'pekerjaan'
    ];

    // Relasi: 1 penduduk bisa punya banyak surat
    public function surat()
    {
        return $this->hasMany(Surat::class, 'penduduk_id');
    }
}
