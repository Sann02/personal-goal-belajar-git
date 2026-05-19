<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Membuka semua kolom agar bisa diisi secara otomatis (Mengatasi Mass Assignment)
    protected $guarded = [];

    // Menghubungkan relasi One-to-Many ke model Event
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}