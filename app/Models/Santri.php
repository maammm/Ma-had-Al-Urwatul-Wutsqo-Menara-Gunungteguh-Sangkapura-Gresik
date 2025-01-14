<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai konvensi
    protected $table = 'santri';

    // Tentukan kolom yang bisa diisi (fillable)
    protected $fillable = [
        'nama_santri',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat_santri',
        'nomor_telepon',
        'email',
    ];

    public function walisantri()
{
    return $this->hasMany(WaliSantri::class, 'id_santri');
}

}
