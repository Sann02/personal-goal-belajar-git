<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Event - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen py-10">

    <div class="bg-white p-8 rounded-xl shadow-lg border border-slate-200 max-w-md w-full mx-4">
        
        @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 p-4 rounded-lg text-sm text-center mb-6 font-semibold">
                🎉 {{ session('success') }}
            </div>
        @endif

        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-indigo-700 mb-1">Formulir Pendaftaran</h1>
            <p class="text-sm text-slate-500">Anda akan mendaftar pada kegiatan:</p>
            <span class="inline-block mt-2 bg-indigo-50 text-indigo-700 text-xs font-bold px-3 py-1.5 rounded-full border border-indigo-100 font-mono">
                {{ $nama_event }}
            </span>
        </div>

        <form action="/daftar/proses" method="POST" class="space-y-4">
            @csrf 

            <input type="hidden" name="nama_event" value="{{ $nama_event }}">

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" required placeholder="Masukkan nama Anda" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">NIM Mahasiswa</label>
                <input type="text" name="nim" required placeholder="Contoh: 23.12.XXXX" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Nomor WhatsApp</label>
                <input type="tel" name="nomor_whatsapp" required placeholder="08XXXXXXXXXX" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
            </div>
            
            <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2.5 px-4 rounded-lg hover:bg-indigo-700 transition duration-300 text-sm shadow-sm mt-2">
                Submit Pendaftaran
            </button>
        </form>

        <div class="text-center mt-5">
            <a href="/kontak" class="text-xs text-indigo-600 hover:underline">← Butuh bantuan? Hubungi Kontak Kami</a>
        </div>
    </div>

</body>
</html>