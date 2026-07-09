@extends('layouts.gudang.main')

@section('title', 'Kelola Kategori Produk')

@section('content')
    <div class="space-y-6" x-data="{ openModalKategori: false }" @keydown.escape.window="openModalKategori = false">
        <div class="flex flex-wrap items-center gap-2 border-b border-gray-100 pb-3">
            <a href="{{ route('gudang.produk.daftar-produk') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Daftar Produk</a>
            <a href="{{ route('gudang.produk.kelola-merk') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Kelola Merk</a>
            <a href="{{ route('gudang.produk.kelola-kategori') }}" class="bg-[#149387] text-white px-4 py-2 rounded-xl text-xs font-bold shadow-xs">Kelola Kategori</a>
            <a href="{{ route('gudang.produk.kelola-rak-produk') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Kelola Rak Produk</a>
            <a href="{{ route('gudang.produk.kelola-tipe-produk') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Kelola Tipe</a>
        </div>

        <div class="bg-white rounded-3xl border border-gray-100 shadow-xs p-6">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                <div class="flex items-center gap-2 flex-1 max-w-md">
                    <input type="text" placeholder="Cari kategori..." class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                    <button class="bg-[#149387] text-white p-2.5 rounded-xl cursor-pointer hover:bg-[#117c71] transition-colors"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button @click="openModalKategori = true" class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-xs flex items-center gap-2 transition-all cursor-pointer">
                    <i class="fa-solid fa-plus text-xs"></i> Tambah Kategori
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm min-w-[600px]">
                    <thead>
                        <tr class="border-b border-gray-100 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                            <th class="pb-4 pl-2 w-12"><input type="checkbox" class="rounded border-gray-300 text-[#149387]"></th>
                            <th class="pb-4 px-4">SI</th>
                            <th class="pb-4 px-4">Nama Kategori</th>
                            <th class="pb-4 pr-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50 font-medium text-gray-600">
                        @php
                            $categories = ['Kapsul (Capsul)', 'Tablet', 'Sirup (Syrup)', 'Injeksi (Injection)'];
                        @endphp
                        @foreach ($categories as $index => $cat)
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-4 pl-2"><input type="checkbox" class="rounded border-gray-300 text-[#149387]"></td>
                                <td class="py-4 px-4 text-gray-400">{{ $index + 1 }}</td>
                                <td class="py-4 px-4 font-bold text-gray-800">{{ $cat }}</td>
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

        <div x-show="openModalKategori" 
            style="display: none;"
            class="fixed inset-0 z-50 overflow-y-auto"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-black/50 backdrop-blur-xs transition-opacity" @click="openModalKategori = false"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md sm:w-full p-6 border border-gray-100 relative z-10" @click.outside="openModalKategori = false">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Tambah Kategori Baru (Add New Category)</h3>
                    <form @submit.prevent="openModalKategori = false" class="space-y-4 text-xs font-semibold">
                        <div>
                            <label class="block text-gray-500 mb-1.5">Nama Kategori (Category Name)</label>
                            <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                                <option value="">Pilih / Tulis Nama Kategori</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Sirup">Sirup</option>
                            </select>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex justify-end gap-2">
                            <button type="button" @click="openModalKategori = false" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-5 py-2.5 rounded-xl font-bold cursor-pointer">Batal</button>
                            <button type="submit" class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl font-bold cursor-pointer shadow-xs">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection