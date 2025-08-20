<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templatesurat extends Model
{
    use HasFactory;

    protected $table = 'templatesurats';
    protected $fillable = [
        'nama_template', 'isi_template'
    ];

    // Relasi: 1 template bisa dipakai di banyak surat
    public function surat()
    {
        return $this->hasMany(Surat::class, 'template_id');
    }
}
