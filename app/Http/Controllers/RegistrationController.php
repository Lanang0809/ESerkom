<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function storeRegistration(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'alamat_ktp' => 'required|string|max:255',
            'alamat_lengkap' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'nomor_hp' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'kewarganegaraan' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'status_menikah' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
            'nilai_matematika' => 'required|numeric|min:0|max:100',
            'nilai_bahasa_inggris' => 'required|numeric|min:0|max:100',
            'nilai_bahasa_indonesia' => 'required|numeric|min:0|max:100',
        ]);

        Pendaftaran::create($validatedData);

        return redirect()->route('register')->with('success', 'Pendaftaran berhasil!');
    }
}
