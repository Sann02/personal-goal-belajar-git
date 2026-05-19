<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            // --- KODE GABUNGAN TAMBAHAN (KOLOM UNTUK FORM) ---
            $table->string('nama_event');
            $table->string('nama_lengkap');
            $table->string('nim');
            $table->string('nomor_whatsapp');
            // -------------------------------------------------
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};