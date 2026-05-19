<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Category;
use App\Models\Partner;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ambil data kategori untuk tombol filter
        $categories = Category::all();

        // 2. Ambil data Partner dengan relasi kategorinya
        $query = Partner::with('category');

        // 3. Logika Filter Kategori
        if ($request->has('category') && $request->category != '') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // 4. Logika Pencarian
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }

        // 5. Eksekusi ambil data
        $partners = $query->get();

        // 6. Kirim data ke view
        return view('welcome', compact('partners', 'categories'));
    }

    public function kontak()
    {
        return view('contact', [
            'nama'  => 'Muhammad Ikhsan Febrian', 
            'nim'   => '23.12.2963',
            'prodi' => 'Sistem Informasi'
        ]);
    }

    public function pendaftaran($nama_event)
    {
        return view('daftar', [
            'nama_event' => $nama_event
        ]);
    }

    public function prosesPendaftaran(Request $request)
    {
        $request->validate([
            'nama_event'     => 'required|string',
            'nama_lengkap'   => 'required|string|max:255',
            'nim'            => 'required|string',
            'nomor_whatsapp' => 'required|numeric',
        ]);

        Registration::create([
            'nama_event'     => $request->nama_event,
            'nama_lengkap'   => $request->nama_lengkap,
            'nim'            => $request->nim,
            'nomor_whatsapp' => $request->nomor_whatsapp,
        ]);

        return redirect()->back()->with('success', 'Pendaftaran berhasil!');
    }
}