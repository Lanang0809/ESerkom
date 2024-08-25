<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai dengan nama default (plural dari nama model), tentukan nama tabel secara eksplisit
    protected $table = 'pendaftaran';

    // Tentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'nama_lengkap',
        'alamat_ktp',
        'alamat_lengkap',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'nomor_telepon',
        'nomor_hp',
        'email',
        'kewarganegaraan',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'status_menikah',
        'agama',
        'nilai_matematika',
        'nilai_bahasa_inggris',
        'nilai_bahasa_indonesia',
    ];
}
