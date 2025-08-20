<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Penduduk::create([
            'nik' => '1234567890123456',
            'nama' => 'Ahmad Fauzi',
            'alamat' => 'Jl. Merdeka No.10',
            'tanggal_lahir' => '1990-05-12',
            'pekerjaan' => 'Petani'
        ]);

        Penduduk::create([
            'nik' => '6543210987654321',
            'nama' => 'Siti Aminah',
            'alamat' => 'Jl. Sudirman No.22',
            'tanggal_lahir' => '1995-08-21',
            'pekerjaan' => 'Guru'
        ]);
    }
}
