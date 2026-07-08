@extends('layouts.gudang.main')

@section('title', 'Kelola Merk Produk')

@section('content')
    <div class="space-y-6">
        <!-- Sub-Navigasi Tab Modul Produk -->
        <div class="flex flex-wrap items-center gap-2 border-b border-gray-100 pb-3">
            <a href="{{ route('gudang.produk.daftar-produk') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Daftar Produk</a>
            <a href="{{ route('gudang.produk.kelola-merk') }}" class="bg-[#149387] text-white px-4 py-2 rounded-xl text-xs font-bold shadow-xs">Kelola Merk</a>
            <a href="{{ route('gudang.produk.kelola-kategori') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Kelola Kategori</a>
            <a href="{{ route('gudang.produk.kelola-rak-produk') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Kelola Rak Produk</a>
            <a href="{{ route('gudang.produk.kelola-tipe-produk') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Kelola Tipe</a>
        </div>

        <div class="bg-white rounded-3xl border border-gray-100 shadow-xs p-6">
            <!-- Filter Pencarian & Tombol Tambah Merk -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                <div class="flex items-center gap-2 flex-1 max-w-md">
                    <input type="text" placeholder="Cari merk..." class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                    <button class="bg-[#149387] text-white p-2.5 rounded-xl cursor-pointer hover:bg-[#117c71] transition-colors"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button onclick="openModal('modalMerk')" class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-xs flex items-center gap-2 transition-all cursor-pointer">
                    <i class="fa-solid fa-plus text-xs"></i> Tambah Merk
                </button>
            </div>

            <!-- Kontrol Baris & Ekspor -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-t border-gray-50 pt-5 mb-4">
                <div class="flex items-center gap-2 text-sm text-gray-400 font-medium">
                    <span>Tampilkan hingga</span>
                    <select class="bg-gray-50 border border-gray-200 rounded-xl px-3 py-1.5 focus:outline-none focus:border-[#149387]"><option selected>100</option></select>
                    <span>Data</span>
                </div>
                <button class="bg-gray-50 hover:bg-gray-100 border border-gray-200 text-gray-500 rounded-xl px-4 py-2 text-xs font-bold inline-flex items-center gap-1.5 transition-colors cursor-pointer">
                    <i class="fa-solid fa-arrow-down-long text-[10px]"></i> Ekspor Data
                </button>
            </div>

            <!-- Tabel Data Merk -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm min-w-[700px]">
                    <thead>
                        <tr class="border-b border-gray-100 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                            <th class="pb-4 pl-2 w-12"><input type="checkbox" class="rounded border-gray-300 text-[#149387]"></th>
                            <th class="pb-4 px-4">SI</th>
                            <th class="pb-4 px-4">Nama Merk</th>
                            <th class="pb-4 px-4">Kode Merk</th>
                            <th class="pb-4 px-4">Status</th>
                            <th class="pb-4 pr-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50 font-medium text-gray-600">
                        @php
                            $brands = [
                                ['name' => 'Square', 'code' => '678346783'],
                                ['name' => 'Beximco', 'code' => '673465777'],
                                ['name' => 'ACI', 'code' => '789735475'],
                                ['name' => 'Mesalazine', 'code' => '897863856'],
                                ['name' => 'Alien Pharma', 'code' => '7874357467'],
                                ['name' => 'Alk Laboratories', 'code' => '8437574887'],
                                ['name' => 'Aexim', 'code' => '7835849755'],
                                ['name' => 'Ad-din', 'code' => '5374657845']
                            ];
                        @endphp
                        @foreach ($brands as $index => $b)
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-4 pl-2"><input type="checkbox" class="rounded border-gray-300 text-[#149387]"></td>
                                <td class="py-4 px-4 text-gray-400">{{ $index + 1 }}</td>
                                <td class="py-4 px-4 font-bold text-gray-800">{{ $b['name'] }}</td>
                                <td class="py-4 px-4 font-mono text-xs text-gray-500">{{ $b['code'] }}</td>
                                <td class="py-4 px-4"><span class="px-2.5 py-1 bg-emerald-50 text-[#149387] rounded-lg text-xs font-bold">Aktif</span></td>
                                <td class="py-4 pr-2 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-[#149387]"><i class="fa-regular fa-eye text-sm"></i></button>
                                        <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-blue-500"><i class="fa-regular fa-pen-to-square text-sm"></i></button>
                                        <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-rose-500"><i class="fa-regular fa-trash-can text-sm"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Merk Baru -->
    <div id="modalMerk" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-black/50 backdrop-blur-xs transition-opacity" onclick="closeModal('modalMerk')"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md sm:w-full p-6 border border-gray-100">
                <h3 class="text-lg font-bold text-gray-800 mb-4">Tambah Merk Baru (Add New Brand)</h3>
                <form class="space-y-4 text-xs font-semibold">
                    <div>
                        <label class="block text-gray-500 mb-1.5">Nama Merk (Brand Name)</label>
                        <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                            <option value="Beximco Pharmaceuticals" selected>Beximco Pharmaceuticals</option>
                            <option value="Square Pharmaceuticals">Square Pharmaceuticals</option>
                        </select>
                    </div>
                    <div class="pt-4 border-t border-gray-100 flex justify-end gap-2">
                        <button type="button" onclick="closeModal('modalMerk')" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-5 py-2.5 rounded-xl font-bold cursor-pointer">Batal</button>
                        <button type="submit" class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl font-bold cursor-pointer shadow-xs">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection