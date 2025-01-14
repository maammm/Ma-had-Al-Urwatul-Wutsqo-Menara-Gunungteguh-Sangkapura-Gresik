<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Santri;

class SantriSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data Santri
        Santri::create([
            'nama_santri' => 'Ali Ahmad',
            'tanggal_lahir' => '2005-08-15',
            'jenis_kelamin' => 'Laki-laki',
            'alamat_santri' => 'Jl. Raya No. 1, Jakarta',
            'nomor_telepon' => '08123456789',
            'email' => 'ali.ahmad@mail.com',
        ]);
    }
}
