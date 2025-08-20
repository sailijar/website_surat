<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penduduk;

class PendudukSeeder extends Seeder
{
    public function run(): void
    {
        Penduduk::updateOrCreate([
            'nik' => '1201010101010001'
        ], [
            'nama' => 'Budi Santoso',
            'alamat' => 'Jl. Melati No. 1',
            'rt' => '001',
            'rw' => '002',
            'dusun' => 'Sukamaju',
            'agama' => 'Islam',
            'pekerjaan' => 'Petani',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Desa Sukamaju',
            'tanggal_lahir' => '1990-01-01'
        ]);

        Penduduk::updateOrCreate([
            'nik' => '1201010101010002'
        ], [
            'nama' => 'Siti Aminah',
            'alamat' => 'Jl. Kenanga No. 5',
            'rt' => '003',
            'rw' => '004',
            'dusun' => 'Sukamaju',
            'agama' => 'Islam',
            'pekerjaan' => 'IRT',
            'jenis_kelamin' => 'P',
            'tempat_lahir' => 'Desa Sukamaju',
            'tanggal_lahir' => '1992-05-12'
        ]);
    }
}
