<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Surat::create([
            'penduduk_id' => 1, // Ahmad Fauzi
            'template_id' => 1, // Surat Domisili
            'nomor_surat' => '001/DS/2025',
            'data_json'   => json_encode([
                'nama' => 'Ahmad Fauzi',
                'alamat' => 'Jl. Merdeka No.10'
            ])
        ]);

        Surat::create([
            'penduduk_id' => 2, // Siti Aminah
            'template_id' => 2, // Surat Usaha
            'nomor_surat' => '002/DS/2025',
            'data_json'   => json_encode([
                'nama' => 'Siti Aminah',
                'pekerjaan' => 'Guru'
            ])
        ]);
    }
}
