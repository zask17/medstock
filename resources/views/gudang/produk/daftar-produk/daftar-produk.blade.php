@extends('layouts.gudang.main')

@section('title', 'Daftar Produk')

@section('content')
    <div class="space-y-6" 
         x-data="{ 
             openTambah: false, 
             openDetail: false,
             detailData: { nama: '', ukuran: '', harga: '', deskripsi: '' }
         }" 
         @keydown.escape.window="openTambah = false; openDetail = false">

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
                    <button @click="openTambah = true" 
                        class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-xs flex items-center gap-2 transition-all cursor-pointer whitespace-nowrap">
                        <i class="fa-solid fa-plus text-xs"></i> Tambah Produk
                    </button>
                </div>
            </div>

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
                                <td class="py-4 px-3 text-gray-500 max-w-[120px] leading-tight">Pemasok Umum</td>
                                <td class="py-4 px-3 text-gray-800 font-bold">OBH Combi</td>
                                <td class="py-4 px-3 text-gray-600">Beximco</td>
                                <td class="py-4 px-3 font-mono text-xs text-gray-500">63264387</td>
                                <td class="py-4 px-3 text-xs text-gray-400">25 Feb 2022</td>
                                <td class="py-4 px-3 text-gray-500">Obat-obatan</td>
                                <td class="py-4 px-3 font-bold text-gray-800">Rp149.000</td>
                                <td class="py-4 pr-2 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <button @click="detailData = { 
                                                    nama: 'OBH Combi', 
                                                    ukuran: '75ml', 
                                                    harga: 'Rp149.000', 
                                                    deskripsi: 'OBH COMBI adalah obat batuk yang mengandung Paracetamol, Ephedrine HCl, dan Chlorphenamine maleate yang digunakan untuk meredakan batuk disertai gejala flu seperti demam, sakit kepala, dan bersin-bersin.' 
                                                }; openDetail = true" 
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
        </div>

        <div x-show="openTambah" 
            style="display: none;"
            class="fixed inset-0 z-50 overflow-y-auto"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-black/50 backdrop-blur-xs transition-opacity" @click="openTambah = false"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full p-6 border border-gray-100 relative z-10"
                     @click.outside="openTambah = false">
                    <div class="flex items-center justify-between pb-4 border-b border-gray-100 mb-6">
                        <h3 class="text-xl font-bold text-gray-800">Tambah Obat/Produk Baru (Add New Drug)</h3>
                        <button @click="openTambah = false" class="text-gray-400 hover:text-gray-600 transition-colors cursor-pointer focus:outline-none">
                            <i class="fa-solid fa-xmark text-lg"></i>
                        </button>
                    </div>

                    <form @submit.prevent="openTambah = false" class="space-y-4 text-xs font-semibold">
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
                            <button type="button" @click="openTambah = false"
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

        <div x-show="openDetail" 
            style="display: none;"
            class="fixed inset-0 z-50 overflow-y-auto"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-black/50 backdrop-blur-xs transition-opacity" @click="openDetail = false"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md sm:w-full p-6 border border-gray-100 relative z-10"
                     @click.outside="openDetail = false">
                    <div class="flex items-center justify-between pb-4 border-b border-gray-100 mb-4">
                        <button @click="openDetail = false" class="text-gray-400 hover:text-gray-800 transition-colors focus:outline-none cursor-pointer">
                            <i class="fa-solid fa-chevron-left text-base"></i>
                        </button>
                        <h3 class="text-base font-bold text-gray-800">Detail Obat (Drugs Detail)</h3>
                        <div class="w-4"></div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-gray-50/50 p-6 rounded-2xl flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=300&auto=format&fit=crop&q=80" 
                                alt="Foto Produk Obat" class="h-44 object-contain rounded-lg">
                        </div>

                        <div class="flex justify-between items-start">
                            <div>
                                <h4 x-text="detailData.nama" class="text-lg font-black text-gray-800"></h4>
                                <p x-text="detailData.ukuran" class="text-xs text-gray-400 font-semibold mt-0.5"></p>
                                <div class="flex items-center gap-1 text-amber-400 text-xs mt-1.5">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span class="text-gray-500 font-bold ml-1">4.0</span>
                                </div>
                            </div>
                            <button class="text-rose-500 hover:text-rose-600 transition-colors text-lg cursor-pointer">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                        </div>

                        <div class="flex items-center justify-between pt-2">
                            <div class="flex items-center gap-3">
                                <button class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 flex items-center justify-center hover:bg-gray-100 cursor-pointer font-bold">-</button>
                                <span class="font-bold text-gray-800 text-sm">1</span>
                                <button class="w-8 h-8 rounded-lg bg-[#149387] text-white flex items-center justify-center hover:bg-[#117c71] cursor-pointer font-bold">+</button>
                            </div>
                            <span x-text="detailData.harga" class="text-xl font-black text-gray-800"></span>
                        </div>

                        <div class="pt-2 border-t border-gray-100">
                            <h5 class="text-xs font-bold text-gray-800 uppercase tracking-wider mb-1">Deskripsi</h5>
                            <p class="text-xs text-gray-400 font-medium leading-relaxed">
                                <span x-text="detailData.deskripsi"></span>
                                <a href="#" class="text-[#149387] font-bold hover:underline">Baca selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#filter_date", { locale: "id", enableTime: true, dateFormat: "d M, Y - H:i" });
            flatpickr("#add_expiry_date", { locale: "id", dateFormat: "d M Y" });
        });
    </script>
@endsection