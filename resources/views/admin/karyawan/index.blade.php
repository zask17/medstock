<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedStock - Daftar Karyawan</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans antialiased text-gray-800">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-white border-r border-gray-100 p-5 flex flex-col justify-between shrink-0">
            <div>
                <div class="flex items-center gap-2 mb-8 px-2">
                    <i class="fa-solid fa-prescription-bottle-medical text-[#0ea5e9] text-2xl"></i>
                    <span class="text-xl font-bold tracking-tight text-gray-900">med<span class="text-[#0ea5e9]">stock</span></span>
                </div>
                <nav class="space-y-1">
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-500 hover:bg-gray-50 font-medium transition"><i class="fa-solid fa-chart-pie w-5"></i> Dashboard</a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-500 hover:bg-gray-50 font-medium transition"><i class="fa-regular fa-newspaper w-5"></i> Artikel</a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-500 hover:bg-gray-50 font-medium transition"><i class="fa-solid fa-chart-line w-5"></i> Laporan</a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-500 hover:bg-gray-50 font-medium transition"><i class="fa-solid fa-boxes-stacked w-5"></i> Laporan Stok</a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-500 hover:bg-gray-50 font-medium transition"><i class="fa-solid fa-industry w-5"></i> Produsen</a>
                    
                    <div class="pt-2">
                        <button class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl bg-[#e0f2fe] text-[#0369a1] font-semibold transition">
                            <span class="flex items-center gap-3"><i class="fa-solid fa-user-group w-5"></i> Karyawan</span>
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </button>
                        <div class="mt-1 pl-11 space-y-1">
                            <a href="#" class="block py-2 text-sm font-semibold text-[#0369a1]">Karyawan</a>
                            <a href="#" class="block py-2 text-sm text-gray-500 hover:text-gray-900">Absensi</a>
                            <a href="#" class="block py-2 text-sm text-gray-500 hover:text-gray-900">Penggajian</a>
                            <a href="#" class="block py-2 text-sm text-gray-500 hover:text-gray-900">Biaya</a>
                        </div>
                    </div>
                    
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-500 hover:bg-gray-50 font-medium transition"><i class="fa-solid fa-gear w-5"></i> Pengaturan</a>
                </nav>
            </div>
        </aside>

        <main class="flex-1 bg-gray-50">
            <header class="bg-white border-b border-gray-100 px-8 py-4 flex items-center justify-end gap-6">
                <button class="text-gray-400 hover:text-gray-600 bg-gray-50 p-2 rounded-xl transition"><i class="fa-solid fa-calculator"></i></button>
                <button class="text-gray-400 hover:text-gray-600 bg-gray-50 p-2 rounded-xl relative transition">
                    <i class="fa-regular fa-bell"></i>
                    <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
                <div class="flex items-center gap-3 pl-2 border-l border-gray-100">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=100&auto=format&fit=crop" alt="Admin" class="w-10 h-10 rounded-xl object-cover">
                    <div>
                        <p class="text-sm font-bold text-gray-900 leading-none">Thomas F</p>
                        <p class="text-xs font-medium text-gray-400 mt-1">Admin</p>
                    </div>
                </div>
            </header>

            <div class="p-8 max-w-7xl mx-auto">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
                    <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Daftar Karyawan</h1>
                    <div class="flex items-center gap-3">
                        <div class="bg-white px-4 py-2 rounded-xl border border-gray-100 flex gap-4 text-xs font-semibold text-gray-500">
                            <span>Cuti: <span class="text-indigo-600 font-bold">14</span></span>
                            <span>Libur: <span class="text-rose-500 font-bold">04</span></span>
                            <span>Di Kantor: <span class="text-emerald-500 font-bold">50</span></span>
                        </div>
                        <a href="#" class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white px-4 py-2.5 rounded-xl font-semibold text-sm inline-flex items-center gap-2 transition shadow-sm shadow-sky-100">
                            <i class="fa-solid fa-plus text-xs"></i> Tambah Karyawan Baru
                        </a>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-2xl border border-gray-100 flex flex-wrap items-center gap-4 mb-6 shadow-sm">
                    <div class="flex-1 min-w-[240px] relative">
                        <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="text" placeholder="Cari berdasarkan apapun..." class="w-full bg-gray-50 pl-11 pr-4 py-2.5 rounded-xl border border-transparent focus:bg-white focus:border-sky-500 focus:outline-none text-sm font-medium transition">
                    </div>
                    <div class="w-48 relative">
                        <select class="w-full bg-gray-50 px-4 py-2.5 rounded-xl border border-transparent focus:bg-white focus:border-sky-500 focus:outline-none text-sm font-medium text-gray-600 appearance-none transition">
                            <option>Jabatan / Posisi</option>
                            <option>Admin</option>
                            <option>Pegawai Gudang</option>
                            <option>Apoteker</option>
                            <option>Asisten Apoteker</option>
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                    </div>
                    <button class="bg-[#0f172a] hover:bg-slate-800 text-white p-2.5 rounded-xl transition shadow-sm"><i class="fa-solid fa-magnifying-glass px-1"></i></button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    @php
                        $karyawan = [
                            ['nama' => 'Darlene Robertson', 'posisi' => 'Apoteker', 'foto' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=120&auto=format&fit=crop'],
                            ['nama' => 'Jacob Jones', 'posisi' => 'Pegawai Gudang', 'foto' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=120&auto=format&fit=crop'],
                            ['nama' => 'Cody Fisher', 'posisi' => 'Asisten Apoteker', 'foto' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=120&auto=format&fit=crop'],
                            ['nama' => 'Jerome Bell', 'posisi' => 'Asisten Apoteker', 'foto' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=120&auto=format&fit=crop'],
                            ['nama' => 'Dianne Russell', 'posisi' => 'Pegawai Gudang', 'foto' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=120&auto=format&fit=crop'],
                            ['nama' => 'Devon Lane', 'posisi' => 'Apoteker', 'foto' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=120&auto=format&fit=crop'],
                            ['nama' => 'Esther Howard', 'posisi' => 'Admin', 'foto' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=120&auto=format&fit=crop'],
                            ['nama' => 'Floyd Miles', 'posisi' => 'Pegawai Gudang', 'foto' => 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?q=80&w=120&auto=format&fit=crop'],
                            ['nama' => 'Darlene Robertson', 'posisi' => 'Asisten Apoteker', 'foto' => 'https://images.unsplash.com/photo-1554151228-14d9def656e4?q=80&w=120&auto=format&fit=crop'],
                        ];
                    @endphp

                    @foreach($karyawan as $k)
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-xs relative hover:shadow-md transition duration-200">
                        <button class="absolute top-5 right-5 text-gray-400 hover:text-gray-600"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <div class="flex items-start gap-4">
                            <img src="{{ $k['foto'] }}" alt="{{ $k['nama'] }}" class="w-14 h-14 rounded-xl object-cover">
                            <div class="flex-1 min-w-0">
                                <h3 class="text-base font-bold text-gray-900 truncate">{{ $k['nama'] }}</h3>
                                <span class="inline-block bg-sky-50 text-sky-600 font-semibold text-[11px] px-2.5 py-1 rounded-lg mt-1.5">{{ $k['posisi'] }}</span>
                                
                                <div class="grid grid-cols-2 gap-x-2 gap-y-3 mt-4 pt-4 border-t border-gray-50">
                                    <div>
                                        <p class="text-[10px] uppercase tracking-wider font-semibold text-gray-400">Telepon</p>
                                        <p class="text-xs font-bold text-gray-700 mt-0.5 truncate">(021) 555-0120</p>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-wider font-semibold text-gray-400">Gol. Darah</p>
                                        <p class="text-xs font-bold text-gray-700 mt-0.5">A+ (Positif)</p>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-wider font-semibold text-gray-400">Email</p>
                                        <p class="text-xs font-bold text-gray-700 mt-0.5 truncate">jane@gmail.com</p>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-wider font-semibold text-gray-400">Gaji Per Jam</p>
                                        <p class="text-xs font-bold text-gray-700 mt-0.5 truncate">Rp 35.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="flex items-center justify-center gap-1.5 pt-4">
                    <button class="p-2 text-gray-400 hover:text-gray-600 transition"><i class="fa-solid fa-chevron-left text-xs"></i></button>
                    <button class="w-8 h-8 rounded-lg text-sm font-medium text-gray-500 hover:bg-gray-100 transition">1</button>
                    <button class="w-8 h-8 rounded-lg text-sm font-medium text-gray-500 hover:bg-gray-100 transition">2</button>
                    <button class="w-8 h-8 rounded-lg text-sm font-semibold bg-[#0ea5e9] text-white transition">3</button>
                    <button class="w-8 h-8 rounded-lg text-sm font-medium text-gray-500 hover:bg-gray-100 transition">4</button>
                    <button class="w-8 h-8 rounded-lg text-sm font-medium text-gray-500 hover:bg-gray-100 transition">5</button>
                    <button class="w-8 h-8 rounded-lg text-sm font-medium text-gray-500 hover:bg-gray-100 transition">6</button>
                    <span class="text-gray-400 px-1 text-sm">...</span>
                    <button class="w-8 h-8 rounded-lg text-sm font-medium text-gray-500 hover:bg-gray-100 transition">38</button>
                    <button class="w-8 h-8 rounded-lg text-sm font-medium text-gray-500 hover:bg-gray-100 transition">39</button>
                    <button class="w-8 h-8 rounded-lg text-sm font-medium text-gray-500 hover:bg-gray-100 transition">40</button>
                    <button class="p-2 text-gray-400 hover:text-gray-600 transition"><i class="fa-solid fa-chevron-right text-xs"></i></button>
                </div>
            </div>
        </main>
    </div>

</body>
</html>