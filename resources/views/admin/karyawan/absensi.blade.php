<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedStock - Riwayat Absensi</title>
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
                            <a href="#" class="block py-2 text-sm text-gray-500 hover:text-gray-900">Karyawan</a>
                            <a href="#" class="block py-2 text-sm font-semibold text-[#0369a1]">Absensi</a>
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
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=100&auto=format&fit=crop" alt="Admin" class="w-10 h-10 rounded-xl object-cover">
                    <div>
                        <p class="text-sm font-bold text-gray-900 leading-none">Thomas F</p>
                        <p class="text-xs font-medium text-gray-400 mt-1">Admin</p>
                    </div>
                </div>
            </header>

            <div class="p-8 max-w-7xl mx-auto">
                <div class="flex items-center justify-between gap-4 mb-8">
                    <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Riwayat Absensi</h1>
                    <button onclick="document.getElementById('modalAbsensi').classList.remove('hidden')" class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white px-4 py-2.5 rounded-xl font-semibold text-sm inline-flex items-center gap-2 transition shadow-sm">
                        <i class="fa-solid fa-plus text-xs"></i> Tambah Absensi Manual
                    </button>
                </div>

                <div class="bg-white p-4 rounded-2xl border border-gray-100 flex flex-wrap items-center gap-4 mb-6 shadow-xs">
                    <div class="w-64 relative">
                        <select class="w-full bg-gray-50 px-4 py-2.5 rounded-xl border border-transparent focus:bg-white focus:border-sky-500 focus:outline-none text-sm font-medium text-gray-600 appearance-none transition">
                            <option>Pilih Nama Karyawan</option>
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                    </div>
                    <div class="w-56 relative">
                        <input type="text" placeholder="Dari: 28 Jun, 2022" class="w-full bg-gray-50 px-4 py-2.5 rounded-xl border border-transparent focus:bg-white focus:border-sky-500 focus:outline-none text-sm font-medium transition">
                        <i class="fa-regular fa-calendar absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                    <div class="w-56 relative">
                        <input type="text" placeholder="Sampai: 30 Jun, 2022" class="w-full bg-gray-50 px-4 py-2.5 rounded-xl border border-transparent focus:bg-white focus:border-sky-500 focus:outline-none text-sm font-medium transition">
                        <i class="fa-regular fa-calendar absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                    <button class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white p-2.5 rounded-xl transition shadow-sm"><i class="fa-solid fa-magnifying-glass px-1"></i></button>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-xs overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-100">
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-400">Nama Karyawan</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-400">Tanggal</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-400">Jam Masuk</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-400">Jam Keluar</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-400">Total Jam Kerja</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-400 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                @php
                                    $absensi = [
                                        ['nama' => 'Jane Cooper', 'tgl' => '10 Feb 2022', 'masuk' => '08:59 AM', 'keluar' => '07:04 PM', 'durasi' => '10j 5m', 'foto' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=80&auto=format&fit=crop'],
                                        ['nama' => 'Guy Hawkins', 'tgl' => '10 Feb 2022', 'masuk' => '08:59 AM', 'keluar' => '07:04 PM', 'durasi' => '10j 5m', 'foto' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=80&auto=format&fit=crop'],
                                        ['nama' => 'Robert Fox', 'tgl' => '10 Feb 2022', 'masuk' => '08:59 AM', 'keluar' => '07:04 PM', 'durasi' => '10j 5m', 'foto' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=80&auto=format&fit=crop'],
                                        ['nama' => 'Cody Fisher', 'tgl' => '10 Feb 2022', 'masuk' => '08:59 AM', 'keluar' => '07:04 PM', 'durasi' => '10j 5m', 'foto' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=80&auto=format&fit=crop'],
                                    ];
                                @endphp

                                @foreach($absensi as $a)
                                <tr class="hover:bg-gray-50/50 transition">
                                    <td class="px-6 py-4 flex items-center gap-3">
                                        <img src="{{ $a['foto'] }}" alt="" class="w-8 h-8 rounded-lg object-cover">
                                        <span class="text-sm font-bold text-gray-900">{{ $a['nama'] }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-600">{{ $a['tgl'] }}</td>
                                    <td class="px-6 py-4 text-sm font-semibold text-emerald-600">{{ $a['masuk'] }}</td>
                                    <td class="px-6 py-4 text-sm font-semibold text-rose-600">{{ $a['keluar'] }}</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-700">{{ $a['durasi'] }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <button class="border border-gray-100 hover:bg-gray-50 px-3 py-1.5 rounded-lg text-xs font-bold text-[#0ea5e9] transition">Lihat</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div id="modalAbsensi" class="hidden fixed inset-0 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center z-50">
        <div class="bg-white rounded-2xl w-full max-w-md p-6 shadow-xl animate-in fade-in zoom-in-95 duration-150">
            <h2 class="text-lg font-bold text-gray-900 border-b border-gray-50 pb-3 mb-4">Tambah Absensi Manual</h2>
            
            <form class="space-y-4">
                <div class="relative">
                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Pilih Karyawan</label>
                    <select class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium appearance-none text-gray-700 focus:outline-none focus:border-sky-500 focus:bg-white transition">
                        <option>Thomas Flecture</option>
                        <option>Jane Cooper</option>
                    </select>
                    <i class="fa-solid fa-chevron-down absolute right-4 top-[38px] text-gray-400 text-xs pointer-events-none"></i>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Tanggal & Waktu</label>
                    <div class="relative">
                        <input type="text" placeholder="Pilih Tanggal" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:outline-none focus:border-sky-500 focus:bg-white transition">
                        <i class="fa-regular fa-calendar absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Jam Masuk Kerja</label>
                    <div class="relative">
                        <input type="text" placeholder="08:00 AM" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:outline-none focus:border-sky-500 focus:bg-white transition">
                        <i class="fa-regular fa-clock absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>

                <div class="pt-4 flex gap-3 border-t border-gray-50">
                    <button type="button" onclick="document.getElementById('modalAbsensi').classList.add('hidden')" class="flex-1 border border-gray-100 hover:bg-gray-50 py-2.5 rounded-xl text-sm font-bold text-gray-500 transition">Batal</button>
                    <button type="submit" class="flex-1 bg-[#0ea5e9] hover:bg-[#0284c7] text-white py-2.5 rounded-xl text-sm font-bold transition shadow-sm">Tambah</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>