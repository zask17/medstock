<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedStock - Tambah Karyawan</title>
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
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=100&auto=format&fit=crop" alt="Admin" class="w-10 h-10 rounded-xl object-cover">
                    <div>
                        <p class="text-sm font-bold text-gray-900 leading-none">Thomas F</p>
                        <p class="text-xs font-medium text-gray-400 mt-1">Admin</p>
                    </div>
                </div>
            </header>

            <div class="p-8 max-w-5xl mx-auto">
                <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold text-gray-500 hover:text-gray-800 transition mb-4">
                    <i class="fa-solid fa-chevron-left text-xs"></i> Kembali
                </a>
                
                <h1 class="text-2xl font-bold text-gray-900 tracking-tight mb-6">Tambah Karyawan</h1>

                <form class="bg-white p-8 rounded-2xl border border-gray-100 shadow-xs space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-800 mb-3">Pilih Peran / Jabatan Karyawan</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                            <label class="border-2 border-[#0ea5e9] bg-sky-50/30 p-4 rounded-xl cursor-pointer flex items-start gap-3 relative transition">
                                <input type="radio" name="jabatan" value="admin" checked class="mt-1 accent-[#0ea5e9]">
                                <div>
                                    <p class="text-sm font-bold text-gray-900">Admin</p>
                                    <p class="text-[11px] text-gray-400 font-medium mt-1 leading-normal">Pemilik bisnis atau manajemen puncak yang mengontrol seluruh hak akses.</p>
                                </div>
                            </label>

                            <label class="border border-gray-100 hover:border-gray-200 p-4 rounded-xl cursor-pointer flex items-start gap-3 relative transition">
                                <input type="radio" name="jabatan" value="gudang" class="mt-1 accent-[#0ea5e9]">
                                <div>
                                    <p class="text-sm font-bold text-gray-900">Pegawai Gudang</p>
                                    <p class="text-[11px] text-gray-400 font-medium mt-1 leading-normal">Bertanggung jawab penuh atas manajemen logistik dan keluar masuk barang.</p>
                                </div>
                            </label>

                            <label class="border border-gray-100 hover:border-gray-200 p-4 rounded-xl cursor-pointer flex items-start gap-3 relative transition">
                                <input type="radio" name="jabatan" value="apoteker" class="mt-1 accent-[#0ea5e9]">
                                <div>
                                    <p class="text-sm font-bold text-gray-900">Apoteker</p>
                                    <p class="text-[11px] text-gray-400 font-medium mt-1 leading-normal">Melakukan pelayanan resep, dispensing, dan pengecekan kedaluwarsa.</p>
                                </div>
                            </label>

                            <label class="border border-gray-100 hover:border-gray-200 p-4 rounded-xl cursor-pointer flex items-start gap-3 relative transition">
                                <input type="radio" name="jabatan" value="asisten" class="mt-1 accent-[#0ea5e9]">
                                <div>
                                    <p class="text-sm font-bold text-gray-900">Asisten Apoteker</p>
                                    <p class="text-[11px] text-gray-400 font-medium mt-1 leading-normal">Membantu transaksi penjualan obat di baris depan pelayanan.</p>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Nama Lengkap</label>
                            <input type="text" placeholder="Thomas Flecture" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none transition">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Nomor Telepon</label>
                            <input type="text" placeholder="(406) 555-0120" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none transition">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Alamat Email</label>
                            <input type="email" placeholder="uihutofficial@gmail.com" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none transition">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Tanggal Lahir</label>
                            <div class="relative">
                                <input type="text" placeholder="12 Feb 2022" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none transition">
                                <i class="fa-regular fa-calendar absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Gaji Per Jam (Rp)</label>
                            <input type="text" placeholder="Rp 35.000" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none transition">
                        </div>
                        <div class="relative">
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Tipe Gaji</label>
                            <select class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none appearance-none text-gray-500 transition">
                                <option>Pilih Opsi</option>
                                <option>Bulanan</option>
                                <option>Mingguan</option>
                            </select>
                            <i class="fa-solid fa-chevron-down absolute right-4 top-[44px] text-gray-400 text-xs pointer-events-none"></i>
                        </div>

                        <div class="relative">
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Jenis Kelamin</label>
                            <select class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none appearance-none text-gray-500 transition">
                                <option>Pilih</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                            <i class="fa-solid fa-chevron-down absolute right-4 top-[44px] text-gray-400 text-xs pointer-events-none"></i>
                        </div>
                        <div class="relative">
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Kota</label>
                            <select class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none appearance-none text-gray-500 transition">
                                <option>Surabaya</option>
                                <option>Jakarta</option>
                            </select>
                            <i class="fa-solid fa-chevron-down absolute right-4 top-[44px] text-gray-400 text-xs pointer-events-none"></i>
                        </div>
                        <div class="relative">
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Kode Pos</label>
                            <select class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none appearance-none text-gray-500 transition">
                                <option>60115</option>
                            </select>
                            <i class="fa-solid fa-chevron-down absolute right-4 top-[44px] text-gray-400 text-xs pointer-events-none"></i>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="space-y-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Unggah Foto Karyawan</label>
                                <input type="file" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2 text-sm text-gray-400 focus:outline-none">
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Pratinjau Foto</p>
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=120&auto=format&fit=crop" alt="Pratinjau" class="w-24 h-24 rounded-2xl object-cover border border-gray-100 shadow-inner">
                            </div>
                        </div>

                        <div class="md:col-span-2 space-y-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Alamat Baris 1</label>
                                <input type="text" placeholder="Masukkan alamat lengkap..." class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none transition">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Alamat Baris 2 (Opsional)</label>
                                <input type="text" placeholder="Apartemen, blok, dll..." class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none transition">
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4 pt-2">
                                <div>
                                    <span class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Status Kerja</span>
                                    <div class="flex items-center gap-4 mt-2">
                                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-700"><input type="radio" name="status" checked class="accent-[#0ea5e9]"> Aktif</label>
                                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-500"><input type="radio" name="status" class="accent-[#0ea5e9]"> Nonaktif</label>
                                    </div>
                                </div>
                                <div class="relative">
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Bahasa Utama</label>
                                    <select class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:border-sky-500 focus:outline-none appearance-none text-gray-700 transition">
                                        <option>Indonesia (ID)</option>
                                        <option>English (EN)</option>
                                    </select>
                                    <i class="fa-solid fa-chevron-down absolute right-4 top-[44px] text-gray-400 text-xs pointer-events-none"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-gray-50 flex justify-end">
                        <button type="submit" class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white px-6 py-2.5 rounded-xl font-bold text-sm transition shadow-sm">Simpan Data Karyawan</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

</body>
</html>