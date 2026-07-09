@extends('layouts.gudang.main')

@section('title', 'Informasi Kerusakan Produk')

@section('content')
    <div class="space-y-6" x-data="{ openKerusakanModal: false }" @keydown.escape.window="openKerusakanModal = false">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Informasi Kerusakan Produk</h2>
                <p class="text-sm text-gray-400 mt-1">Catat dan pantau seluruh produk obat yang mengalami kerusakan atau cacat fisik.</p>
            </div>
            <div>
                <button @click="openKerusakanModal = true"
                    class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-xs flex items-center gap-2 transition-all cursor-pointer">
                    <i class="fa-solid fa-plus text-xs"></i>
                    Tambah Kerusakan
                </button>
            </div>
        </div>

        <div class="bg-white rounded-3xl border border-gray-100 shadow-xs p-6">
            <div class="flex flex-col sm:flex-row sm:items-center gap-3 mb-6">
                <div class="relative flex-1 max-w-md">
                    <input type="text" placeholder="Cari produk rusak..."
                        class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-4 pr-10 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                </div>
                <button class="bg-[#149387] hover:bg-[#117c71] text-white p-2.5 rounded-xl transition-all cursor-pointer w-10 h-10 flex items-center justify-center">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm min-w-[800px]">
                    <thead>
                        <tr class="border-b border-gray-100 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                            <th class="pb-4 pl-2 w-12"><input type="checkbox" class="rounded border-gray-300 text-[#149387] focus:ring-[#149387]"></th>
                            <th class="pb-4 px-4">SI</th>
                            <th class="pb-4 px-4">Tanggal</th>
                            <th class="pb-4 px-4">No. Referensi</th>
                            <th class="pb-4 px-4">Total Kerugian</th>
                            <th class="pb-4 pr-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50 font-medium text-gray-600">
                        @php
                            $dummyData = [
                                ['date' => '28 Feb 2022', 'ref' => '23423 432', 'amount' => 'Rp1.800.000'],
                                ['date' => '28 Feb 2022', 'ref' => '2343 242', 'amount' => 'Rp4.932.750']
                            ];
                        @endphp

                        @foreach ($dummyData as $index => $item)
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-4 pl-2"><input type="checkbox" class="rounded border-gray-300 text-[#149387]"></td>
                                <td class="py-4 px-4 text-gray-400">{{ $index + 1 }}</td>
                                <td class="py-4 px-4 text-gray-700 text-xs font-semibold">{{ $item['date'] }}</td>
                                <td class="py-4 px-4 font-mono text-xs text-gray-800 font-bold max-w-[120px] leading-tight">{{ $item['ref'] }}</td>
                                <td class="py-4 px-4 font-bold text-gray-800">{{ $item['amount'] }}</td>
                                <td class="py-4 pr-2 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-[#149387] transition-colors cursor-pointer" title="Detail">
                                            <i class="fa-regular fa-eye"></i>
                                        </button>
                                        <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-blue-500 transition-colors cursor-pointer" title="Ubah">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-rose-500 transition-colors cursor-pointer" title="Hapus">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div x-show="openKerusakanModal" 
            style="display: none;"
            class="fixed inset-0 z-50 overflow-y-auto"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-black/50 backdrop-blur-xs transition-opacity" @click="openKerusakanModal = false"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full p-6 border border-gray-100 relative z-10"
                     @click.outside="openKerusakanModal = false">
                    <div class="flex items-center justify-between pb-4 border-b border-gray-100 mb-6">
                        <h3 class="text-xl font-bold text-gray-800">Tambah Kerusakan Obat Baru</h3>
                        <button @click="openKerusakanModal = false" class="text-gray-400 hover:text-gray-600 transition-colors cursor-pointer focus:outline-none">
                            <i class="fa-solid fa-xmark text-lg"></i>
                        </button>
                    </div>

                    <form @submit.prevent="openKerusakanModal = false" class="space-y-4 text-xs font-semibold">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-500 mb-1.5">No. Referensi (Reference No)</label>
                                <input type="text" value="763846544" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Tanggal (Date)</label>
                                <input type="text" id="damage_date" value="28 Feb 2022" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Nama Produk (Product Name)</label>
                                <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                                    <option value="Napa 500mg" selected>Napa 500mg</option>
                                    <option value="Paracetamol 500mg">Paracetamol 500mg</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Stok Tersedia (Available)</label>
                                <input type="text" value="90" readonly class="w-full bg-gray-100 border border-gray-200 text-gray-500 rounded-xl p-3 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Tipe Kerusakan (Type)</label>
                                <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                                    <option value="">Pilih Tipe Kerusakan</option>
                                    <option value="Pecah/Bocor">Kemasan Pecah / Bocor</option>
                                    <option value="Kedaluwarsa">Kadaluwarsa (Expired)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Jumlah Rusak (Damage Quantity)</label>
                                <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                                    <option value="">Pilih Jumlah</option>
                                    <option value="5">5 Box</option>
                                    <option value="10">10 Box</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-500 mb-1.5">Keterangan / Deskripsi (Description)</label>
                            <textarea rows="3" placeholder="Masukkan rincian kronologi kerusakan..."
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] resize-none"></textarea>
                        </div>

                        <div class="pt-5 border-t border-gray-100 flex justify-end gap-3 mt-4">
                            <button type="button" @click="openKerusakanModal = false"
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
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#damage_date", { locale: "id", dateFormat: "d M Y" });
        });
    </script>
@endsection