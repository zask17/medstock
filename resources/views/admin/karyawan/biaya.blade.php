@extends($layout)

@section('title', 'Daftar Pengeluaran Operasional')

@section('content')
<div class="space-y-6" x-data="{ openModal: false }">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-gray-100 pb-2">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Pengeluaran Operasional</h1>
            <p class="text-sm text-gray-400 mt-1">Daftar item biaya operasional non-karyawan fasilitas kesehatan</p>
        </div>
        <button @click="openModal = true" type="button" class="bg-[#149387] hover:bg-[#117d72] text-white px-4 py-2.5 rounded-xl font-semibold text-sm inline-flex items-center gap-2 transition shadow-xs cursor-pointer ml-auto sm:ml-0">
            <i class="fa-solid fa-plus text-xs"></i> Tambah Kategori Pengeluaran
        </button>
    </div>

    <div class="bg-white p-4 rounded-3xl border border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-2xs">
        <div class="flex items-center gap-2 text-xs font-semibold text-gray-400">
            <span>Tampilkan</span>
            <select class="bg-gray-50 border border-gray-200 rounded-lg px-2 py-1 text-xs font-bold text-gray-600 focus:outline-none">
                <option>100</option>
                <option>50</option>
            </select>
            <span>data entries</span>
        </div>
        
        <div class="w-full sm:w-64 relative bg-gray-50 border border-transparent rounded-xl px-4 py-2 flex items-center shadow-inner">
            <i class="fa-solid fa-magnifying-glass text-gray-400 mr-2.5 text-xs"></i>
            <input type="text" placeholder="Cari kategori pengeluaran..." class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-700">
        </div>
    </div>

    <div class="bg-white rounded-3xl border border-gray-100 shadow-2xs overflow-hidden">
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/70 border-b border-gray-100 text-gray-400 text-[11px] font-bold tracking-wider uppercase">
                        <th class="px-6 py-4 w-16">No</th>
                        <th class="px-6 py-4">Nama Item Kategori Pengeluaran (*Operasional)</th>
                        <th class="px-6 py-4 text-center w-32">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm font-medium text-gray-700">
                    @php
                        $expenses = [
                            'Tagihan Konsumsi / Makan Lembur',
                            'Tagihan Listrik PLN',
                            'Tagihan Air PDAM',
                            'Biaya Berlangganan Wifi IndiHome',
                            'Sewa Gedung Bulanan Apotek'
                        ];
                    @endphp

                    @foreach($expenses as $index => $item)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 text-gray-400 font-mono text-xs">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 font-bold text-gray-900">{{ $item }}</td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button type="button" class="text-gray-400 hover:text-sky-600 p-1 rounded-lg hover:bg-sky-50 transition-colors cursor-pointer">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button type="button" class="text-gray-400 hover:text-rose-600 p-1 rounded-lg hover:bg-rose-50 transition-colors cursor-pointer">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div x-show="openModal" class="fixed inset-0 bg-black/40 backdrop-blur-xs flex items-center justify-center z-50 p-4" x-transition style="display: none;">
        <div class="bg-white rounded-3xl w-full max-w-md p-6 shadow-xl space-y-4" @click.outside="openModal = false">
            <div class="flex justify-between items-center border-b border-gray-50 pb-2">
                <div>
                    <h2 class="text-base font-bold text-gray-900">Tambah Kategori Pengeluaran</h2>
                    <p class="text-xs text-gray-400 mt-0.5">Definisikan master klasifikasi pengeluaran baru</p>
                </div>
                <button @click="openModal = false" type="button" class="text-gray-400 hover:text-black cursor-pointer">
                    <i class="fa-solid fa-xmark text-base"></i>
                </button>
            </div>
            
            <form class="space-y-4 text-xs font-semibold" @submit.prevent="openModal = false">
                <div class="relative bg-gray-50 border border-gray-200 rounded-xl px-4 py-2 flex items-center">
                    <div class="w-full">
                        <label class="block text-[10px] text-gray-400 uppercase tracking-wider mb-0.5">Nama Jenis / Item Biaya Pengeluaran</label>
                        <select class="bg-transparent border-none focus:outline-none w-full text-gray-700 font-bold appearance-none pr-4 cursor-pointer">
                            <option>Pilih Opsi</option>
                            <option>Biaya Bahan Bakar Ambulans</option>
                            <option>Perbaikan Alat Medis / Timbangan</option>
                            <option>Retur Pembelian Logistik Cacat</option>
                        </select>
                    </div>
                    <i class="fa-solid fa-chevron-down absolute right-4 text-gray-400 text-[10px] pointer-events-none"></i>
                </div>

                <div class="pt-3 border-t border-gray-100 flex gap-3 font-bold">
                    <button type="button" @click="openModal = false" class="flex-1 border border-gray-200 hover:bg-gray-50 py-2.5 rounded-xl text-xs text-gray-500 transition cursor-pointer text-center">
                        Batal
                    </button>
                    <button type="submit" class="flex-1 bg-[#149387] hover:bg-[#117d72] text-white py-2.5 rounded-xl text-xs transition shadow-sm cursor-pointer text-center">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection