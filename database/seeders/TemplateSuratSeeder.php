<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        TemplateSurat::create([
            'nama_template' => 'Surat Keterangan Domisili',
            'isi_template' => 'Yang bertanda tangan di bawah ini, Keuchik ... menerangkan bahwa {nama} benar berdomisili di {alamat}.'
        ]);

        TemplateSurat::create([
            'nama_template' => 'Surat Keterangan Usaha',
            'isi_template' => 'Dengan ini menerangkan bahwa {nama} benar memiliki usaha di bidang {pekerjaan}.'
        ]);
    }
}
