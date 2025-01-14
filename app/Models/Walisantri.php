<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliSantri extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai konvensi
    protected $table = 'walisantri';

    // Kolom yang bisa diisi secara mass assignment
    protected $fillable = [
        'id_santri', 
        'nama_ayah', 
        'tanggal_lahir_ayah', 
        'jenis_kelamin_ayah', 
        'pekerjaan_ayah', 
        'nomor_telepon_ayah', 
        'alamat_ayah', 
        'nama_ibu', 
        'tanggal_lahir_ibu', 
        'jenis_kelamin_ibu', 
        'pekerjaan_ibu', 
        'nomor_telepon_ibu', 
        'alamat_ibu',
    ];

    // Relasi dengan model Santri
    public function santri()
    {
        return $this->belongsTo(Santri::class, 'id_santri');
    }
}
