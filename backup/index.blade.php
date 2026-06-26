<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedStock - Manajemen Penggajian</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 font-sans antialiased text-gray-800" x-data="{ currentTab: 'tunjangan', modalTunjangan: false }">

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
                            <a href="#" class="block py-2 text-sm font-semibold text-[#0369a1]">Penggajian</a>
                            <a href="#" class="block py-2 text-sm text-gray-500 hover:text-gray-900">Biaya</a>
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
                
                <div class="flex flex-wrap items-center gap-2 mb-8 bg-gray-200/60 p-1.5 rounded-2xl w-max">
                    <button @click="currentTab = 'tunjangan'" :class="currentTab === 'tunjangan' ? 'bg-[#0ea5e9] text-white shadow-xs' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-xl text-xs font-bold transition">Daftar Tunjangan</button>
                    <button @click="currentTab = 'daftar-atur'" :class="currentTab === 'daftar-atur' ? 'bg-[#0ea5e9] text-white shadow-xs' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-xl text-xs font-bold transition">Daftar Pengaturan Gaji</button>
                    <button @click="currentTab = 'tambah-atur'" :class="currentTab === 'tambah-atur' ? 'bg-[#0ea5e9] text-white shadow-xs' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-xl text-xs font-bold transition">Atur Gaji Karyawan</button>
                    <button @click="currentTab = 'lembar-gaji'" :class="currentTab === 'lembar-gaji' ? 'bg-[#0ea5e9] text-white shadow-xs' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-xl text-xs font-bold transition">Lembar Gaji Bulanan</button>
                    <button @click="currentTab = 'pembayaran'" :class="currentTab === 'pembayaran' ? 'bg-[#0ea5e9] text-white shadow-xs' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-xl text-xs font-bold transition">Pembayaran Gaji</button>
                </div>

                <div x-show="currentTab === 'tunjangan'" class="space-y-6">
                    <div class="flex items-center justify-between">
                        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Daftar Tunjangan</h1>
                    </div>
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-xs overflow-hidden">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-100 text-xs font-bold text-gray-400 uppercase">
                                    <th class="px-6 py-4 w-12">No</th>
                                    <th class="px-6 py-4">Nama Tunjangan</th>
                                    <th class="px-6 py-4">Tipe Tunjangan</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50 text-sm font-medium text-gray-700">
                                <tr>
                                    <td class="px-6 py-4">1</td>
                                    <td class="px-6 py-4 font-bold text-gray-900">Bonus Hari Raya (THR)</td>
                                    <td class="px-6 py-4"><span class="bg-emerald-50 text-emerald-600 px-2.5 py-1 rounded-lg text-xs font-bold">Tambahan</span></td>
                                    <td class="px-6 py-4"><span class="text-emerald-500 font-bold"><i class="fa-solid fa-circle text-[8px] mr-1.5"></i>Aktif</span></td>
                                    <td class="px-6 py-4 text-center space-x-2">
                                        <button class="text-gray-400 hover:text-sky-600"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="text-gray-400 hover:text-red-600"><i class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4">2</td>
                                    <td class="px-6 py-4 font-bold text-gray-900">Tunjangan Transportasi</td>
                                    <td class="px-6 py-4"><span class="bg-emerald-50 text-emerald-600 px-2.5 py-1 rounded-lg text-xs font-bold">Tambahan</span></td>
                                    <td class="px-6 py-4"><span class="text-emerald-500 font-bold"><i class="fa-solid fa-circle text-[8px] mr-1.5"></i>Aktif</span></td>
                                    <td class="px-6 py-4 text-center space-x-2">
                                        <button class="text-gray-400 hover:text-sky-600"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="text-gray-400 hover:text-red-600"><i class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="p-4 bg-gray-50/50 border-t border-gray-100 flex justify-end">
                            <button @click="modalTunjangan = true" class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white px-4 py-2 rounded-xl font-bold text-xs inline-flex items-center gap-2 transition"><i class="fa-solid fa-plus"></i> Tambah Tunjangan</button>
                        </div>
                    </div>
                </div>

                <div x-show="currentTab === 'daftar-atur'" class="space-y-6">
                    <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Daftar Pengaturan Gaji Karyawan</h1>
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-xs overflow-hidden">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-100 text-xs font-bold text-gray-400 uppercase">
                                    <th class="px-6 py-4">Nama Karyawan</th>
                                    <th class="px-6 py-4">Sistem Gaji</th>
                                    <th class="px-6 py-4">Tanggal Diatur</th>
                                    <th class="px-6 py-4">Gaji Pokok/Kotor</th>
                                    <th class="px-6 py-4 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50 text-sm font-medium text-gray-700">
                                <tr>
                                    <td class="px-6 py-4 flex items-center gap-3"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=80" class="w-8 h-8 rounded-lg object-cover"><span class="font-bold text-gray-900">Jane Cooper</span></td>
                                    <td class="px-6 py-4">Bulanan Tetap</td>
                                    <td class="px-6 py-4">12 Feb 2026</td>
                                    <td class="px-6 py-4 font-bold text-gray-900">Rp 12.000.000</td>
                                    <td class="px-6 py-4 text-center space-x-2">
                                        <button class="text-gray-400 hover:text-sky-600"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="text-gray-400 hover:text-red-600"><i class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div x-show="currentTab === 'tambah-atur'" class="space-y-6">
                    <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Atur Skema Gaji Karyawan</h1>
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-xs space-y-6">
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Pilih Karyawan</label>
                                <select class="w-full bg-gray-50 border border-transparent rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none transition"><option>Jane Cooper</option></select>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Tipe Gaji</label>
                                <select class="w-full bg-gray-50 border border-transparent rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none transition"><option>Per Jam (Hourly)</option><option>Bulanan (Salary)</option></select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gray-50/50 p-5 rounded-xl border border-gray-100 space-y-4">
                                <h3 class="text-sm font-bold text-gray-900 border-b border-gray-100 pb-2"><i class="fa-solid fa-circle-plus text-emerald-500 mr-2"></i>Komponen Tambahan (Pendapatan)</h3>
                                <div><label class="block text-xs font-bold text-gray-500 mb-1.5">Gaji Pokok Base</label><input type="text" value="Rp 12.000.000" class="w-full bg-white border border-gray-200 rounded-lg px-3 py-2 text-sm font-semibold"></div>
                                <div><label class="block text-xs font-bold text-gray-500 mb-1.5">Bonus Hari Raya (%)</label><input type="text" value="Rp 1.200.000" class="w-full bg-white border border-gray-200 rounded-lg px-3 py-2 text-sm font-semibold"></div>
                            </div>
                            <div class="bg-gray-50/50 p-5 rounded-xl border border-gray-100 space-y-4">
                                <h3 class="text-sm font-bold text-gray-900 border-b border-gray-100 pb-2"><i class="fa-solid fa-circle-minus text-rose-500 mr-2"></i>Komponen Potongan</h3>
                                <div><label class="block text-xs font-bold text-gray-500 mb-1.5">Potongan Keterlambatan (%)</label><input type="text" value="Rp 150.000" class="w-full bg-white border border-gray-200 rounded-lg px-3 py-2 text-sm font-semibold"></div>
                                <div><label class="block text-xs font-bold text-gray-500 mb-1.5">Pajak Penghasilan PPh21 (%)</label><input type="text" value="Rp 250.000" class="w-full bg-white border border-gray-200 rounded-lg px-3 py-2 text-sm font-semibold"></div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-50 flex items-center justify-between">
                            <div><p class="text-xs text-gray-400 font-medium">Estimasi Gaji Bersih</p><p class="text-lg font-bold text-gray-900 mt-1">Rp 12.800.000</p></div>
                            <div class="flex gap-2"><button class="px-4 py-2.5 bg-gray-100 rounded-xl text-sm font-bold text-gray-500">Reset</button><button class="px-5 py-2.5 bg-emerald-500 text-white rounded-xl text-sm font-bold">Simpan Pengaturan</button></div>
                        </div>
                    </div>
                </div>

                <div x-show="currentTab === 'lembar-gaji'" class="space-y-6">
                    <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Rekap Lembar Gaji Bulanan</h1>
                    <div class="bg-white p-4 rounded-2xl border border-gray-100 flex items-center gap-4 shadow-xs">
                        <div class="w-64 relative">
                            <input type="text" value="Februari 2026" class="w-full bg-gray-50 px-4 py-2.5 rounded-xl text-sm font-semibold"><i class="fa-regular fa-calendar absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        </div>
                        <button class="bg-[#0ea5e9] text-white p-2.5 rounded-xl"><i class="fa-solid fa-magnifying-glass px-1"></i></button>
                    </div>
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-xs overflow-hidden">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-100 text-xs font-bold text-gray-400 uppercase">
                                    <th class="px-6 py-4">ID Slip</th>
                                    <th class="px-6 py-4">Periode Bulan</th>
                                    <th class="px-6 py-4">Tanggal Pembuatan</th>
                                    <th class="px-6 py-4">Dibuat Oleh</th>
                                    <th class="px-6 py-4 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50 text-sm font-medium text-gray-700">
                                <tr>
                                    <td class="px-6 py-4">#SLP-0226</td>
                                    <td class="px-6 py-4 font-bold text-gray-900">Februari 2026</td>
                                    <td class="px-6 py-4">26 Feb 2026</td>
                                    <td class="px-6 py-4">Sistem Admin</td>
                                    <td class="px-6 py-4 text-center space-x-2">
                                        <button class="text-[#0ea5e9] hover:underline font-bold text-xs">Cetak Slip</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div x-show="currentTab === 'pembayaran'" class="space-y-6">
                    <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Status & Eksekusi Pembayaran Gaji</h1>
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-xs overflow-hidden">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-100 text-xs font-bold text-gray-400 uppercase">
                                    <th class="px-6 py-4">Karyawan</th>
                                    <th class="px-6 py-4">Bulan</th>
                                    <th class="px-6 py-4">Jam Kerja</th>
                                    <th class="px-6 py-4">Hari Aktif</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4 text-center">Eksekusi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50 text-sm font-medium text-gray-700">
                                <tr>
                                    <td class="px-6 py-4 flex items-center gap-3"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=80" class="w-8 h-8 rounded-lg object-cover"><span class="font-bold text-gray-900">Guy Hawkins</span></td>
                                    <td class="px-6 py-4">Februari 2026</td>
                                    <td class="px-6 py-4 font-semibold">208 Jam</td>
                                    <td class="px-6 py-4">26 Hari</td>
                                    <td class="px-6 py-4"><span class="bg-emerald-50 text-emerald-600 text-xs font-bold px-2 py-1 rounded-md">Selesai Dibayar</span></td>
                                    <td class="px-6 py-4 text-center"><button disabled class="bg-gray-100 text-gray-400 text-xs font-bold px-3 py-1.5 rounded-lg">Sudah Lunas</button></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 flex items-center gap-3"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=80" class="w-8 h-8 rounded-lg object-cover"><span class="font-bold text-gray-900">Jacob Jones</span></td>
                                    <td class="px-6 py-4">Februari 2026</td>
                                    <td class="px-6 py-4 font-semibold">192 Jam</td>
                                    <td class="px-6 py-4">24 Hari</td>
                                    <td class="px-6 py-4"><span class="bg-amber-50 text-amber-600 text-xs font-bold px-2 py-1 rounded-md">Tertunda</span></td>
                                    <td class="px-6 py-4 text-center"><button class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm">Bayar Sekarang</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <div x-show="modalTunjangan" class="fixed inset-0 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center z-50">
        <div class="bg-white rounded-2xl w-full max-w-md p-6 shadow-xl" @click.outside="modalTunjangan = false">
            <h2 class="text-lg font-bold text-gray-900 border-b border-gray-50 pb-3 mb-4">Tambah Master Tunjangan Baru</h2>
            <form class="space-y-4" @submit.prevent="modalTunjangan = false">
                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase mb-1.5">Nama Tunjangan / Komponen</label>
                    <input type="text" placeholder="Contoh: Tunjangan Makan" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:outline-none focus:border-sky-500">
                </div>
                <div class="relative">
                    <label class="block text-xs font-bold text-gray-700 uppercase mb-1.5">Tipe Sifat Komponen</label>
                    <select class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm font-medium appearance-none text-gray-700 focus:bg-white focus:outline-none"><option>Tambahan (Income Addition)</option><option>Potongan (Deduction)</option></select>
                    <i class="fa-solid fa-chevron-down absolute right-4 top-[38px] text-gray-400 text-xs"></i>
                </div>
                <div class="pt-4 flex gap-3 border-t border-gray-50">
                    <button type="button" @click="modalTunjangan = false" class="flex-1 border border-gray-200 py-2.5 rounded-xl text-sm font-bold text-gray-500 hover:bg-gray-50">Batal</button>
                    <button type="submit" class="flex-1 bg-[#0ea5e9] text-white py-2.5 rounded-xl text-sm font-bold shadow-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>