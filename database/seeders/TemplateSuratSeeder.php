<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuratTemplate;

class SuratTemplateSeeder extends Seeder
{
    public function run()
    {
        $templates = [
            [
                'nama' => 'Surat Keterangan Domisili',
                'template' => '<p>Yang bertanda tangan di bawah ini, Kepala Desa, menerangkan bahwa:</p>
                               <p>Nama: {{nama}}</p>
                               <p>NIK: {{nik}}</p>
                               <p>Alamat: {{alamat}}</p>
                               <p>Adalah benar warga Desa kami.</p>'
            ],
            [
                'nama' => 'Surat Keterangan Tidak Mampu',
                'template' => '<p>Yang bertanda tangan di bawah ini, Kepala Desa, menerangkan bahwa:</p>
                               <p>Nama: {{nama}}</p>
                               <p>NIK: {{nik}}</p>
                               <p>Alamat: {{alamat}}</p>
                               <p>Adalah benar warga Desa kami dan tergolong tidak mampu.</p>'
            ],
            // Tambahkan surat lain jika perlu
        ];

        foreach ($templates as $temp) {
            SuratTemplate::create($temp);
        }
    }
}
