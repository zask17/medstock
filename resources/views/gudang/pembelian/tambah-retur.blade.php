@extends('layouts.gudang.main')

@section('title', 'Tambah Retur Pembelian')

@section('content')
    <div class="space-y-6">
        <!-- Header Form Kembali -->
        <div class="flex items-center justify-between">
            <h3 class="text-2xl font-bold text-gray-800">Tambah Retur Pembelian Baru (New Purchase Return)</h3>
            <a href="{{ route('gudang.pembelian.retur-pembelian') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 text-xs font-bold px-4 py-2.5 rounded-xl flex items-center gap-2 transition-all">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar
            </a>
        </div>

        <form class="space-y-6">
            <!-- Blok Input Data Atas Sesuai Foto 2 -->
            <div class="bg-white rounded-3xl border border-gray-100 p-6 shadow-xs grid grid-cols-1 md:grid-cols-3 gap-4 text-xs font-semibold text-gray-600">
                <div>
                    <label class="block text-gray-400 mb-2">Nama Produsen (Supplier Name)</label>
                    <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                        <option value="">Pilih Produsen</option>
                        <option value="1" selected>Square Pharma</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-400 mb-2">No. Referensi (Reference No)</label>
                    <input type="text" value="563426346523" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-400 mb-2">Tanggal (Date)</label>
                    <input type="text" id="ret_date" value="27 Feb 2022" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-400 mb-2">No. Faktur (Invoice)</label>
                    <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                        <option>Semua (All)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-400 mb-2">Nama Obat (Drug Name)</label>
                    <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                        <option>Napa 500mg</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-400 mb-2">Jumlah Dapat Diretur (Returnable Qty)</label>
                    <input type="text" value="400" readonly class="w-full bg-gray-100 border border-gray-200 text-gray-400 rounded-xl p-3 focus:outline-none">
                </div>
                <div>
                    <label class="block text-gray-400 mb-2">Jumlah (Quantity)</label>
                    <input type="text" value="563426346523" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-400 mb-2">Harga (Price)</label>
                    <input type="text" value="Rp235.000" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                </div>
            </div>

            <!-- Tabel Daftar Masuk Item Obat Retur Sesuai Foto 2 -->
            <div class="bg-white rounded-3xl border border-gray-100 p-6 shadow-xs space-y-4">
                <div class="overflow-x-auto border border-gray-100 rounded-2xl">
                    <table class="w-full text-left border-collapse text-xs font-semibold text-gray-600 min-w-[800px]">
                        <thead>
                            <tr class="bg-gray-50 text-gray-400 uppercase border-b border-gray-100">
                                <th class="p-4 w-12"><input type="checkbox" class="rounded border-gray-300 text-[#149387]"></th>
                                <th class="p-4">SI</th>
                                <th class="p-4">Kode Produk (Product Code)</th>
                                <th class="p-4">Nama Produk (Product Name)</th>
                                <th class="p-4">Kondisi (Condition)</th>
                                <th class="p-4">Jumlah Retur (Return Quantity)</th>
                                <th class="p-4">Total Diterima (Total Received)</th>
                                <th class="p-4">Jumlah (Quantity)</th>
                                <th class="p-4 text-right">Stok Tersedia (Available Qty)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @for ($j = 1; $j <= 3; $j++)
                                <tr class="hover:bg-gray-50/50">
                                    <td class="p-4"><input type="checkbox" class="rounded border-gray-300 text-[#149387]"></td>
                                    <td class="p-4 text-gray-400">{{ $j }}</td>
                                    <td class="p-4 font-mono text-gray-400">#T-43654354</td>
                                    <td class="p-4 font-bold text-gray-800">Xeldrin 20mg</td>
                                    <td class="p-4 text-emerald-600">Baik (Good)</td>
                                    <td class="p-4">200</td>
                                    <td class="p-4">150</td>
                                    <td class="p-4"><input type="number" value="150" class="w-16 bg-white border border-gray-200 rounded-lg p-1 text-center"></td>
                                    <td class="p-4 text-right font-bold text-gray-800">300.00</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                
                <!-- Finansial Ringkasan Bawah Sesuai Foto 2 -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 pt-4 items-end text-sm font-semibold">
                    <div>
                        <span class="text-xs text-gray-400 block mb-1">Jumlah Retur (Return Amount)</span>
                        <input type="text" readonly value="Rp7.987.000" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-2.5 text-center text-gray-700">
                    </div>
                    <div>
                        <span class="text-xs text-gray-400 block mb-1">Total Jumlah (Total Amount)</span>
                        <input type="text" readonly value="Rp9.876.000" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-2.5 text-center text-gray-700">
                    </div>
                    <div>
                        <span class="text-xs text-gray-400 block mb-1">Tunggakan Sebelumnya (Previous Due)</span>
                        <input type="text" readonly value="Rp678.000" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-2.5 text-center text-gray-700">
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-[#149387] hover:bg-[#117c71] text-white text-xs font-bold py-3 px-6 rounded-xl shadow-xs cursor-pointer transition-all">
                            Simpan Dokumen Retur (Add Return)
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#ret_date", { locale: "id", dateFormat: "d M Y" });
        });
    </script>
@endsection