@extends('layouts.gudang.main')

@section('title', 'Daftar Produk')

@section('content')
    <div class="space-y-6">
        <!-- Sub-Navigasi Tab Modul Produk (Sesuai Gambar image_cadae4.jpg) -->
        <div class="flex flex-wrap items-center gap-2 border-b border-gray-100 pb-3">
            <a href="{{ route('gudang.produk.daftar-produk') }}" 
               class="bg-[#149387] text-white px-4 py-2 rounded-xl text-xs font-bold shadow-xs">
                Daftar Produk
            </a>
            <a href="{{ route('gudang.produk.kelola-merk') }}" 
               class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">
                Kelola Merk
            </a>
            <a href="{{ route('gudang.produk.kelola-kategori') }}" 
               class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">
                Kelola Kategori
            </a>
            <a href="{{ route('gudang.produk.kelola-rak-produk') }}" 
               class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">
                Kelola Rak Produk
            </a>
            <a href="{{ route('gudang.produk.kelola-tipe-produk') }}" 
               class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">
                Kelola Tipe
            </a>
        </div>

        <!-- Filter Atas & Tombol Tambah Produk (Sesuai Gambar image_cadae4.jpg) -->
        <div class="bg-white rounded-3xl border border-gray-100 shadow-xs p-6">
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 items-end mb-6">
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Pilih Produk</label>
                    <select class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387] cursor-pointer">
                        <option value="">Pilih salah satu</option>
                        <option value="Napa Extra">Napa Extra</option>
                        <option value="OBH Combi">OBH Combi</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Kode Produk</label>
                    <input type="text" placeholder="G3-63215615263" 
                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Tanggal & Waktu</label>
                    <input type="text" id="filter_date" placeholder="28 Jun, 2022 - 10:00" 
                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                </div>
                <div class="flex gap-2">
                    <button class="bg-[#149387] text-white p-3 rounded-xl self-end cursor-pointer hover:bg-[#117c71] transition-colors">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <!-- Tombol Tambah Produk Memunculkan Modal image_cb2c84.jpg -->
                    <button onclick="openTambahModal()" 
                        class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-xs flex items-center gap-2 transition-all cursor-pointer whitespace-nowrap">
                        <i class="fa-solid fa-plus text-xs"></i> Tambah Produk
                    </button>
                </div>
            </div>

            <!-- Kontrol Baris & Ekspor -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-t border-gray-50 pt-5 mb-4">
                <div class="flex items-center gap-2 text-sm text-gray-400 font-medium">
                    <span>Tampilkan hingga</span>
                    <select class="bg-gray-50 border border-gray-200 rounded-xl px-3 py-1.5 focus:outline-none focus:border-[#149387]">
                        <option selected>100</option>
                        <option>50</option>
                        <option>10</option>
                    </select>
                    <span>Data</span>
                </div>
                <button class="bg-gray-50 hover:bg-gray-100 border border-gray-200 text-gray-500 rounded-xl px-4 py-2 text-xs font-bold inline-flex items-center gap-1.5 transition-colors cursor-pointer">
                    <i class="fa-solid fa-arrow-down-long text-[10px]"></i> Ekspor Data
                </button>
            </div>

            <!-- Tabel Data Produk (Sesuai Kolom Gambar image_cadae4.jpg) -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm min-w-[900px]">
                    <thead>
                        <tr class="border-b border-gray-100 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                            <th class="pb-4 pl-2 w-12"><input type="checkbox" class="rounded border-gray-300 text-[#149387] focus:ring-[#149387]"></th>
                            <th class="pb-4 px-3">SI</th>
                            <th class="pb-4 px-3">Pemasok (Supplier)</th>
                            <th class="pb-4 px-3">Nama Produk</th>
                            <th class="pb-4 px-3">Merk (Brand)</th>
                            <th class="pb-4 px-3">Kode Produk</th>
                            <th class="pb-4 px-3">Kedaluwarsa</th>
                            <th class="pb-4 px-3">Tipe Produk</th>
                            <th class="pb-4 px-3">Harga</th>
                            <th class="pb-4 pr-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50 font-medium text-gray-600">
                        @for ($i = 1; $i <= 8; $i++)
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-4 pl-2"><input type="checkbox" class="rounded border-gray-300 text-[#149387]"></td>
                                <td class="py-4 px-3 text-gray-400">{{ $i }}</td>
                                <td class="py-4 px-3 text-gray-500 max-w-[120px] leading-tight">General Supplier</td>
                                <td class="py-4 px-3 text-gray-800 font-bold">Napa Extra</td>
                                <td class="py-4 px-3 text-gray-600">Beximco</td>
                                <td class="py-4 px-3 font-mono text-xs text-gray-500">63264387</td>
                                <td class="py-4 px-3 text-xs text-gray-400">25 Feb 2022</td>
                                <td class="py-4 px-3 text-gray-500">Medicine</td>
                                <td class="py-4 px-3 font-bold text-gray-800">Rp1.800.000</td>
                                <td class="py-4 pr-2 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <!-- Tombol Lihat Detail Memunculkan Modal image_cadb04.jpg -->
                                        <button onclick="openDetailModal('OBH Combi', '75ml', 'Rp149.000', 'OBH COMBI adalah obat batuk yang mengandung Paracetamol, Ephedrine HCl, dan Chlorphenamine maleate yang digunakan untuk meredakan batuk disertai gejala flu seperti demam, sakit kepala, dan bersin-bersin...')" 
                                            class="p-1.5 hover:bg-emerald-50 rounded-lg text-gray-400 hover:text-[#149387] transition-colors cursor-pointer" title="Lihat Detail">
                                            <i class="fa-regular fa-eye text-sm"></i>
                                        </button>
                                        <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-blue-500 transition-colors cursor-pointer" title="Ubah">
                                            <i class="fa-regular fa-pen-to-square text-sm"></i>
                                        </button>
                                        <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-rose-500 transition-colors cursor-pointer" title="Hapus">
                                            <i class="fa-regular fa-trash-can text-sm"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

            <!-- Pagination Halaman -->
            <div class="flex justify-end items-center gap-1 mt-6 text-xs font-semibold text-gray-500">
                <button class="w-7 h-7 bg-gray-50 border border-gray-200 rounded-lg flex items-center justify-center hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-chevron-left text-[10px]"></i></button>
                <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">1</button>
                <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">2</button>
                <button class="w-7 h-7 bg-[#149387] text-white rounded-lg flex items-center justify-center shadow-2xs">3</button>
                <span class="px-1 text-gray-300">...</span>
                <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">40</button>
                <button class="w-7 h-7 bg-gray-50 border border-gray-200 rounded-lg flex items-center justify-center hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-chevron-right text-[10px]"></i></button>
            </div>
        </div>
    </div>

    <!-- 1. Modal Form Tambah Produk Baru (Sesuai Gambar image_cb2c84.jpg) -->
    <div id="tambahProdukModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-black/50 backdrop-blur-xs transition-opacity" onclick="closeTambahModal()"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full p-6 border border-gray-100">
                <div class="flex items-center justify-between pb-4 border-b border-gray-100 mb-6">
                    <h3 class="text-xl font-bold text-gray-800">Tambah Obat/Produk Baru (Add New Drug)</h3>
                    <button onclick="closeTambahModal()" class="text-gray-400 hover:text-gray-600 transition-colors cursor-pointer focus:outline-none">
                        <i class="fa-solid fa-xmark text-lg"></i>
                    </button>
                </div>

                <form class="space-y-4 text-xs font-semibold">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-500 mb-1.5">Nama Obat (Drug Name) <span class="text-red-500">*</span></label>
                            <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                                <option value="Napa 500mg" selected>Napa 500mg</option>
                                <option value="Paracetamol 500mg">Paracetamol 500mg</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">Merk (Brand)</label>
                            <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                                <option value="Beximco" selected>Beximco</option>
                                <option value="Kalbe">Kalbe Farma</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">Data Matriks (Data Matrix)</label>
                            <input type="text" value="678584536847" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">Kode Barcode (Barcode)</label>
                            <input type="text" value="6435876534657436854354" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">Kategori (Category)</label>
                            <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                                <option value="">Pilih Kategori</option>
                                <option value="Obat Bebas">Obat Bebas</option>
                                <option value="Obat Keras">Obat Keras</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">Tipe Barcode (Barcode Type)</label>
                            <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                                <option value="">Pilih Tipe</option>
                                <option value="EAN-13">EAN-13</option>
                                <option value="CODE128">CODE128</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">No. Batch (Batch No)</label>
                            <input type="text" value="78943757" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">Tanggal Kedaluwarsa (Expiry Date)</label>
                            <input type="text" id="add_expiry_date" value="19 Feb 2022" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">Harga Beli (Buy Price)</label>
                            <input type="text" value="Rp460.000" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">Harga Jual (Sale Price)</label>
                            <input type="text" value="Rp560.000" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">Jumlah Obat (Drug Quantity)</label>
                            <input type="text" value="430" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">Total Satuan (Unit Total)</label>
                            <input type="text" value="Rp10.000.000" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                        </div>
                    </div>

                    <div class="pt-5 border-t border-gray-100 flex justify-end gap-3 mt-4">
                        <button type="button" onclick="closeTambahModal()"
                            class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-6 py-2.5 rounded-xl font-bold transition-all cursor-pointer">
                            Batal
                        </button>
                        <button type="submit"
                            class="bg-[#149387] hover:bg-[#117c71] text-white px-6 py-2.5 rounded-xl font-bold shadow-xs transition-all cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- 2. Modal Popup Detail Obat (Sesuai Gambar image_cadb04.jpg) -->
    <div id="detailProdukModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-black/50 backdrop-blur-xs transition-opacity" onclick="closeDetailModal()"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md sm:w-full p-6 border border-gray-100">
                <!-- Top Nav Modal -->
                <div class="flex items-center justify-between pb-4 border-b border-gray-100 mb-4">
                    <button onclick="closeDetailModal()" class="text-gray-400 hover:text-gray-800 transition-colors focus:outline-none cursor-pointer">
                        <i class="fa-solid fa-chevron-left text-base"></i>
                    </button>
                    <h3 class="text-base font-bold text-gray-800">Detail Obat (Drugs Detail)</h3>
                    <div class="w-4"></div> <!-- Spacer penyeimbang -->
                </div>

                <!-- Konten Gambar Obat & Info Card -->
                <div class="space-y-4">
                    <div class="bg-gray-50/50 p-6 rounded-2xl flex items-center justify-center">
                        <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=300&auto=format&fit=crop&q=80" 
                            alt="Foto Produk Obat" class="h-44 object-contain rounded-lg">
                    </div>

                    <div class="flex justify-between items-start">
                        <div>
                            <h4 id="detail_nama_produk" class="text-lg font-black text-gray-800">OBH Combi</h4>
                            <p id="detail_ukuran_produk" class="text-xs text-gray-400 font-semibold mt-0.5">75ml</p>
                            <div class="flex items-center gap-1 text-amber-400 text-xs mt-1.5">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span id="detail_rating" class="text-gray-500 font-bold ml-1">4.0</span>
                            </div>
                        </div>
                        <button class="text-rose-500 hover:text-rose-600 transition-colors text-lg cursor-pointer">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                    </div>

                    <!-- Kuantitas & Harga -->
                    <div class="flex items-center justify-between pt-2">
                        <div class="flex items-center gap-3">
                            <button class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 flex items-center justify-center hover:bg-gray-100 cursor-pointer font-bold">-</button>
                            <span class="font-bold text-gray-800 text-sm">1</span>
                            <button class="w-8 h-8 rounded-lg bg-[#149387] text-white flex items-center justify-center hover:bg-[#117c71] cursor-pointer font-bold">+</button>
                        </div>
                        <span id="detail_harga_produk" class="text-xl font-black text-gray-800">Rp149.000</span>
                    </div>

                    <!-- Deskripsi -->
                    <div class="pt-2 border-t border-gray-100">
                        <h5 class="text-xs font-bold text-gray-800 uppercase tracking-wider mb-1">Deskripsi</h5>
                        <p id="detail_deskripsi_produk" class="text-xs text-gray-400 font-medium leading-relaxed">
                            OBH COMBI adalah obat batuk yang mengandung Paracetamol, Ephedrine HCl, dan Chlorphenamine maleate yang digunakan untuk meredakan batuk disertai gejala flu seperti demam, sakit kepala, dan bersin-bersin...
                            <a href="#" class="text-[#149387] font-bold hover:underline">Baca selengkapnya</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Pengendali Modal & Datepicker -->
    <script>
        // Modal Tambah Produk
        function openTambahModal() {
            const modal = document.getElementById('tambahProdukModal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            flatpickr("#add_expiry_date", { locale: "id", dateFormat: "d M Y" });
        }

        function closeTambahModal() {
            const modal = document.getElementById('tambahProdukModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Modal Detail Produk
        function openDetailModal(nama, ukuran, harga, deskripsi) {
            document.getElementById('detail_nama_produk').innerText = nama;
            document.getElementById('detail_ukuran_produk').innerText = ukuran;
            document.getElementById('detail_harga_produk').innerText = harga;
            
            const modal = document.getElementById('detailProdukModal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeDetailModal() {
            const modal = document.getElementById('detailProdukModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#filter_date", { locale: "id", enableTime: true, dateFormat: "d M, Y - H:i" });
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeTambahModal();
                closeDetailModal();
            }
        });
    </script>
@endsection