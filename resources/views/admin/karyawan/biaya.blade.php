<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedStock - Pengeluaran Operasional</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 font-sans antialiased text-gray-800" x-data="{ openModal: false }">

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
                    
                    <div class="pt-2">
                        <button class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl bg-[#e0f2fe] text-[#0369a1] font-semibold transition">
                            <span class="flex items-center gap-3"><i class="fa-solid fa-user-group w-5"></i> Karyawan</span>
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </button>
                        <div class="mt-1 pl-11 space-y-1">
                            <a href="#" class="block py-2 text-sm text-gray-500 hover:text-gray-900">Karyawan</a>
                            <a href="#" class="block py-2 text-sm text-gray-500 hover:text-gray-900">Absensi</a>
                            <a href="#" class="block py-2 text-sm text-gray-500 hover:text-gray-900">Penggajian</a>
                            <a href="#" class="block py-2 text-sm font-semibold text-[#0369a1]">Biaya</a>
                        </div>
                    </div>
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
                    <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Daftar Item Pengeluaran Operasional</h1>
                </div>

                <div class="bg-white p-4 rounded-2xl border border-gray-100 flex items-center justify-between gap-4 mb-6 shadow-xs">
                    <div class="flex items-center gap-2">
                        <span class="text-xs font-semibold text-gray-400">Tampilkan</span>
                        <select class="bg-gray-50 border border-gray-200 rounded-lg px-2 py-1 text-xs font-bold text-gray-600"><option>100</option><option>50</option></select>
                        <span class="text-xs font-semibold text-gray-400">data</span>
                    </div>
                    <div class="w-64 relative">
                        <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
                        <input type="text" placeholder="Cari item pengeluaran..." class="w-full bg-gray-50 pl-10 pr-4 py-2 rounded-xl text-xs font-medium focus:bg-white border border-transparent focus:border-sky-500 focus:outline-none transition">
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-xs overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-100 text-xs font-bold text-gray-400 uppercase tracking-wider">
                                <th class="px-6 py-4 w-16">No</th>
                                <th class="px-6 py-4">Nama Item Pengeluaran (*Operasional)</th>
                                <th class="px-6 py-4 text-center w-28">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 text-sm font-semibold text-gray-700">
                            <tr><td class="px-6 py-4 text-gray-400">1</td><td class="px-6 py-4 text-gray-900 font-bold">Tagihan Konsumsi / Makan Lembur</td><td class="px-6 py-4 text-center space-x-2"><button class="text-gray-400 hover:text-sky-600"><i class="fa-solid fa-pen-to-square"></i></button><button class="text-gray-400 hover:text-red-600"><i class="fa-solid fa-trash-can"></i></button></td></tr>
                            <tr><td class="px-6 py-4 text-gray-400">2</td><td class="px-6 py-4 text-gray-900 font-bold">Tagihan Listrik PLN</td><td class="px-6 py-4 text-center space-x-2"><button class="text-gray-400 hover:text-sky-600"><i class="fa-solid fa-pen-to-square"></i></button><button class="text-gray-400 hover:text-red-600"><i class="fa-solid fa-trash-can"></i></button></td></tr>
                            <tr><td class="px-6 py-4 text-gray-400">3</td><td class="px-6 py-4 text-gray-900 font-bold">Tagihan Air PDAM</td><td class="px-6 py-4 text-center space-x-2"><button class="text-gray-400 hover:text-sky-600"><i class="fa-solid fa-pen-to-square"></i></button><button class="text-gray-400 hover:text-red-600"><i class="fa-solid fa-trash-can"></i></button></td></tr>
                            <tr><td class="px-6 py-4 text-gray-400">4</td><td class="px-6 py-4 text-gray-900 font-bold">Biaya Berlangganan Wifi IndiHome</td><td class="px-6 py-4 text-center space-x-2"><button class="text-gray-400 hover:text-sky-600"><i class="fa-solid fa-pen-to-square"></i></button><button class="text-gray-400 hover:text-red-600"><i class="fa-solid fa-trash-can"></i></button></td></tr>
                            <tr><td class="px-6 py-4 text-gray-400">5</td><td class="px-6 py-4 text-gray-900 font-bold">Sewa Gedung Bulanan Apotek</td><td class="px-6 py-4 text-center space-x-2"><button class="text-gray-400 hover:text-sky-600"><i class="fa-solid fa-pen-to-square"></i></button><button class="text-gray-400 hover:text-red-600"><i class="fa-solid fa-trash-can"></i></button></td></tr>
                        </tbody>
                    </table>
                    
                    <div class="p-4 bg-gray-50/50 border-t border-gray-100 flex justify-end">
                        <button @click="openModal = true" class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white px-4 py-2.5 rounded-xl font-bold text-xs inline-flex items-center gap-2 transition shadow-sm"><i class="fa-solid fa-plus"></i> Tambah Kategori Pengeluaran</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div x-show="openModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center z-50">
        <div class="bg-white rounded-2xl w-full max-w-md p-6 shadow-xl" @click.outside="openModal = false">
            <h2 class="text-lg font-bold text-gray-900 border-b border-gray-50 pb-3 mb-4">Tambah Kategori Pengeluaran Baru</h2>
            <form class="space-y-4" @submit.prevent="openModal = false">
                <div class="relative">
                    <label class="block text-xs font-bold text-gray-700 uppercase mb-1.5">Nama Jenis / Item Biaya Pengeluaran</label>
                    <select class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm font-medium appearance-none text-gray-500 focus:bg-white focus:outline-none"><option>Pilih Opsi</option><option>Biaya Bahan Bakar Ambulans</option><option>Perbaikan Alat Medis</option></select>
                    <i class="fa-solid fa-chevron-down absolute right-4 top-[38px] text-gray-400 text-xs"></i>
                </div>
                <div class="pt-4 flex gap-3 border-t border-gray-50">
                    <button type="button" @click="openModal = false" class="flex-1 border border-gray-200 py-2.5 rounded-xl text-sm font-bold text-gray-500 hover:bg-gray-50">Batal</button>
                    <button type="submit" class="flex-1 bg-[#0ea5e9] text-white py-2.5 rounded-xl text-sm font-bold shadow-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>