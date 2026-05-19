<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg border border-slate-200 text-center max-w-md w-full mx-4">
        <h1 class="text-3xl font-bold text-indigo-700 mb-2">Hubungi Kami</h1>
        <p class="text-slate-500 mb-6">Informasi bantuan dan layanan pelanggan AmikomEventHub</p>
        
        <div class="bg-indigo-50 p-4 rounded-lg text-left mb-6 border border-indigo-100">
            <p class="text-sm text-slate-600 mb-1">📧 <span class="font-semibold text-slate-700">Email Resmi:</span></p>
            <p class="text-indigo-600 font-mono mb-3 text-sm">admin@amikomeventhub.com</p>
            
            <p class="text-sm text-slate-600 mb-1">📍 <span class="font-semibold text-slate-700">Lokasi:</span></p>
            <p class="text-slate-700 text-sm">Universitas AMIKOM Yogyakarta</p>
        </div>

        <div class="border-t border-slate-200 pt-4 mb-6 text-sm text-slate-500">
            <p class="mb-1">Dibuat oleh Mahasiswa AMIKOM:</p>
            <p class="font-bold text-slate-800 text-base">{{ $nama }}</p>
            <p class="font-semibold text-indigo-600 font-mono text-xs mt-0.5">{{ $nim }} — {{ $prodi }}</p>
        </div>
        
        <a href="/" class="inline-block w-full bg-indigo-600 text-white font-semibold py-2.5 px-6 rounded-lg hover:bg-indigo-700 hover:shadow-md transition duration-300">
            ← Kembali ke Home
        </a>
    </div>

</body>
</html>