<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    // Mengizinkan semua kolom untuk diisi secara otomatis
    protected $guarded = [];

    // Membuat relasi bahwa Partner dimiliki oleh satu Kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}