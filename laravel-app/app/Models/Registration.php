<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    // TAMBAHKAN BARIS INI untuk memaksa Laravel membaca nama tabel tanpa 's' jika di database namanya tunggal
    protected $table = 'registrations'; 

    protected $fillable = [
        'nama_event',
        'nama_lengkap',
        'nim',
        'nomor_whatsapp'
    ];
}