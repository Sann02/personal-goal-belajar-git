<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmikomEventHub - UTS Digital Bisnis</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 min-h-screen py-10 antialiased">

    <div class="max-w-4xl mx-auto px-4">
        
        <div class="text-center mb-10">
            <h1 class="text-3xl font-extrabold text-indigo-700 tracking-tight">AmikomEventHub</h1>
            <p class="text-slate-500 mt-2">Daftar Partner Strategis - Ujian Tengah Semester</p>
        </div>

        <div class="flex justify-center items-center gap-3 my-8">
            <a href="/" class="px-5 py-2 rounded-full text-sm font-semibold shadow-sm transition duration-300 {{ !request('category') ? 'bg-indigo-600 text-white' : 'bg-white text-slate-600 hover:bg-indigo-50 border border-slate-200' }}">
                🌟 Semua Partner
            </a>
            @foreach($categories as $category)
                <a href="?category={{ $category->slug }}" class="px-5 py-2 rounded-full text-sm font-semibold shadow-sm transition duration-300 {{ request('category') == $category->slug ? 'bg-indigo-600 text-white' : 'bg-white text-slate-600 hover:bg-indigo-50 border border-slate-200' }}">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>

        <form action="/" method="GET" class="mb-8 flex justify-center">
            <input type="text" name="search" placeholder="Cari partner..." 
                   value="{{ request('search') }}"
                   class="border border-slate-300 rounded-l-lg px-4 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-r-lg hover:bg-indigo-700 transition">
                Cari
            </button>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            @forelse($partners as $partner)
                <div class="bg-white p-6 rounded-xl shadow-md border border-slate-200 hover:shadow-lg transition duration-300">
                    <span class="inline-block bg-indigo-50 text-indigo-700 text-xs font-bold px-2.5 py-1 rounded-md mb-3">
                        📁 {{ $partner->category->name ?? 'Tanpa Kategori' }}
                    </span>
                    <h2 class="text-lg font-bold text-slate-800">{{ $partner->name }}</h2>
                    <p class="text-slate-500 text-sm mt-2">
                        Mitra strategis AmikomEventHub.
                    </p>
                </div>
            @empty
                <div class="col-span-full bg-white text-center py-12 rounded-xl border border-slate-200 shadow-sm">
                    <p class="text-slate-400 text-sm">Partner yang kamu cari tidak ditemukan.</p>
                </div>
            @endforelse
        </div>

    </div>

</body>
</html>