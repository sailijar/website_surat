<?php

namespace Database\Seeders;

// database/seeders/TemplateSuratSeeder.php
use Illuminate\Database\Seeder;
use App\Models\TemplateSurat;

class TemplateSuratSeeder extends Seeder {
    public function run(): void {
        TemplateSurat::create([
            'nama' => 'Surat Keterangan Domisili',
            'fields' => json_encode(['keperluan']),
            'isi' => "
                Yang bertanda tangan di bawah ini Kepala Desa .... menerangkan bahwa:
                Nama : {{ nama }}
                NIK : {{ nik }}
                Alamat : {{ alamat }}

                Benar adalah penduduk yang berdomisili di desa kami.
                Surat ini dibuat untuk keperluan: {{ keperluan }}.

                Demikian surat ini dibuat agar dapat digunakan sebagaimana mestinya.
            "
        ]);

        TemplateSurat::create([
            'nama' => 'Surat Keterangan Usaha',
            'fields' => json_encode(['nama_usaha','alamat_usaha']),
            'isi' => "
                Yang bertanda tangan di bawah ini Kepala Desa .... menerangkan bahwa:
                Nama : {{ nama }}
                NIK : {{ nik }}

                Benar memiliki usaha dengan keterangan berikut:
                Nama Usaha : {{ nama_usaha }}
                Alamat Usaha : {{ alamat_usaha }}

                Demikian surat ini dibuat untuk dipergunakan sebagaimana mestinya.
            "
        ]);
    }
}
