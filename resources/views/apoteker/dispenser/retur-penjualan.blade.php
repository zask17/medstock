@extends($layout)

@section('title', 'Log dan Manajemen Retur Penjualan')

@section('content')
<div class="space-y-6" x-data="{ viewMode: 'list' }">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Retur Penjualan Obat</h1>
            <p class="text-sm text-gray-400 mt-1">Form Pengembalian Barang & Log Fisik Sediaan Medis</p>
        </div>
        
        <div class="bg-white border border-gray-100 rounded-xl p-1 flex gap-1 shadow-2xs self-start md:self-auto">
            <button @click="viewMode = 'list'" :class="viewMode === 'list' ? 'bg-[#149387] text-white' : 'text-gray-400 hover:text-gray-700'" class="px-4 py-1.5 text-xs font-bold rounded-lg transition-all cursor-pointer">
                <i class="fa-solid fa-list-ul mr-1"></i> Log Histori
            </button>
            <button @click="viewMode = 'form'" :class="viewMode === 'form' ? 'bg-[#149387] text-white' : 'text-gray-400 hover:text-gray-700'" class="px-4 py-1.5 text-xs font-bold rounded-lg transition-all cursor-pointer">
                <i class="fa-solid fa-square-plus mr-1"></i> Tambah Retur
            </button>
        </div>
    </div>

    <div x-show="viewMode === 'list'" class="bg-white rounded-3xl border border-gray-100 shadow-2xs overflow-hidden" x-transition>
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/70 border-b border-gray-100 text-gray-400 text-[11px] font-bold tracking-wider uppercase">
                        <th class="px-6 py-4 w-12">No</th>
                        <th class="px-6 py-4">No Retur</th>
                        <th class="px-6 py-4">Faktur Asal</th>
                        <th class="px-6 py-4">Nama Sediaan Obat</th>
                        <th class="px-6 py-4">Jumlah Retur</th>
                        <th class="px-6 py-4">Status Kondisi</th>
                        <th class="px-6 py-4">Tanggal Input</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm font-medium">
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 text-gray-400 text-xs">1</td>
                        <td class="px-6 py-4 font-bold text-gray-900">RTR-9023838</td>
                        <td class="px-6 py-4 text-gray-500 font-mono text-xs">INV/20260512/001</td>
                        <td class="px-6 py-4 text-gray-800">Xeldrin 20mg</td>
                        <td class="px-6 py-4 font-bold text-gray-900">200 Box</td>
                        <td class="px-6 py-4"><span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-emerald-50 text-emerald-600">Layak Simpan</span></td>
                        <td class="px-6 py-4 text-gray-400 text-xs">26 Jun 2026</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div x-show="viewMode === 'form'" class="bg-white p-6 rounded-3xl border border-gray-100 shadow-2xs space-y-6" x-transition>
        <div>
            <h3 class="text-base font-bold text-gray-800">Formulir Pencatatan Fisik Retur</h3>
            <p class="text-xs text-gray-400 mt-0.5">Pastikan data fisik obat dicocokkan dengan invoice penjualan asli</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm font-medium">
            <div><label class="block text-xs font-bold text-gray-400 uppercase tracking-wide mb-1.5">No Faktur Penjualan Asal</label><input type="text" placeholder="Ketik kode invoice..." class="w-full bg-gray-50 border border-gray-200 rounded-xl p-2.5 text-gray-700 focus:outline-none focus:border-[#149387]"></div>
            <div><label class="block text-xs font-bold text-gray-400 uppercase tracking-wide mb-1.5">Kondisi Fisik Obat</label>
                <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-2.5 text-gray-700 focus:outline-none focus:border-[#149387]">
                    <option>Bagus (Masuk Stok Gudang Lagi)</option>
                    <option>Rusak / Cacat Ekslusif (Karantina/Pemusnahan)</option>
                </select>
            </div>
        </div>

        <div class="border-t border-gray-50 pt-4 flex justify-end gap-3 font-semibold">
            <button @click="viewMode = 'list'" class="px-4 py-2.5 text-sm text-gray-500 hover:bg-gray-50 rounded-xl transition-colors cursor-pointer">Batal</button>
            <button @click="viewMode = 'list'" class="bg-[#149387] hover:bg-[#117d72] text-white font-bold text-sm py-2.5 px-5 rounded-xl shadow-xs transition-all cursor-pointer">Proses Pengembalian</button>
        </div>
    </div>
</div>
@endsection