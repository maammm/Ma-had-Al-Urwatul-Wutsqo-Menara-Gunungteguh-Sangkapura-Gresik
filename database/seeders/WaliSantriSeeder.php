<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WaliSantri;

class WaliSantriSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data WaliSantri
        WaliSantri::create([
            'id_santri' => 1,  // Pastikan ID Santri yang dimasukkan sesuai dengan data Santri
            'nama_ayah' => 'Budi Ahmad',
            'tanggal_lahir_ayah' => '1975-05-20',
            'jenis_kelamin_ayah' => 'L',
            'pekerjaan_ayah' => 'PNS',
            'nomor_telepon_ayah' => '08123456780',
            'alamat_ayah' => 'Jl. Raya No. 1, Jakarta',
            'nama_ibu' => 'Siti Aisyah',
            'tanggal_lahir_ibu' => '1978-02-10',
            'jenis_kelamin_ibu' => 'P',
            'pekerjaan_ibu' => 'Guru',
            'nomor_telepon_ibu' => '08123456781',
            'alamat_ibu' => 'Jl. Raya No. 1, Jakarta',
        ]);
    }
}
