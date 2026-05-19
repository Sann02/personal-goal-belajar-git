<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/daftar/{nama_event}', [HomeController::class, 'pendaftaran']);

// TAMBAHKAN BARIS INI: Rute untuk memproses data kiriman form
Route::post('/daftar/proses', [HomeController::class, 'prosesPendaftaran']);
Route::get('/admin/pendaftar', [HomeController::class, 'lihatPendaftar']);