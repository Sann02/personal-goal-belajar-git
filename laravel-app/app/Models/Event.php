<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Membuka semua kolom agar bisa diisi secara otomatis (Mengatasi Mass Assignment)
    protected $guarded = [];

    // Menghubungkan relasi Many-to-One balik ke model Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}