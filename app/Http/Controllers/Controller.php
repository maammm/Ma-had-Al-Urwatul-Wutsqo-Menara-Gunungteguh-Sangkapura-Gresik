<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\WaliSantri;
use Illuminate\Http\Request;

class pendaftaran extends Controller
{
    public function showForm()
    {
        return view('pendaftaran');
    }
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string',
            'birthdate' => 'required|date',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|email',
            'father_name' => 'required|string',
            'father_birthdate' => 'nullable|date',
            'father_gender' => 'nullable|in:L,P',
            'father_job' => 'nullable|string',
            'father_phone' => 'nullable|string',
            'father_address' => 'nullable|string',
            'mother_name' => 'nullable|string',
            'mother_birthdate' => 'nullable|date',
            'mother_gender' => 'nullable|in:L,P',
            'mother_job' => 'nullable|string',
            'mother_phone' => 'nullable|string',
            'mother_address' => 'nullable|string',
        ]);

        // Simpan data santri
        $santri = Santri::create([
            'nama_santri' => $validated['name'],
            'tanggal_lahir' => $validated['birthdate'],
            'jenis_kelamin' => $validated['gender'],
            'alamat_santri' => $validated['address'],
            'nomor_telepon' => $validated['phone'],
            'email' => $validated['email'],
        ]);

        // Simpan data wali santri
        WaliSantri::create([
            'id_santri' => $santri->id,
            'nama_ayah' => $validated['father_name'],
            'tanggal_lahir_ayah' => $validated['father_birthdate'],
            'jenis_kelamin_ayah' => $validated['father_gender'],
            'pekerjaan_ayah' => $validated['father_job'],
            'nomor_telepon_ayah' => $validated['father_phone'],
            'alamat_ayah' => $validated['father_address'],
            'nama_ibu' => $validated['mother_name'],
            'tanggal_lahir_ibu' => $validated['mother_birthdate'],
            'jenis_kelamin_ibu' => $validated['mother_gender'],
            'pekerjaan_ibu' => $validated['mother_job'],
            'nomor_telepon_ibu' => $validated['mother_phone'],
            'alamat_ibu' => $validated['mother_address'],
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
