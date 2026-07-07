@extends('layouts.gudang.main')

@section('title', 'Tambah Pembelian Baru')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Tambah Pembelian</h2>
                <p class="text-sm text-gray-400 mt-1">Buat berkas pemesanan stok pasokan baru langsung ke pabrik mitra.</p>
            </div>
            <a href="{{ route('gudang.pembelian.daftar-pembelian') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 text-xs font-bold px-4 py-2.5 rounded-xl flex items-center gap-2 transition-all">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>

        <form action="{{ route('gudang.pembelian.invoice', ['id' => '87635466']) }}" method="GET" class="bg-white rounded-3xl p-6 border border-gray-100 shadow-xs space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1.5">Produsen <span class="text-red-500">*</span></label>
                    <select required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                        <option value="">Pilih Produsen</option>
                        <option>Beximco Pharma</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1.5">Tanggal <span class="text-red-500">*</span></label>
                    <input type="text" id="purchase_date" required placeholder="Pilih Tanggal" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1.5">No. Faktur (Invoice) <span class="text-red-500">*</span></label>
                    <input type="text" value="68325436546" required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1.5">Detail Catatan</label>
                    <input type="text" placeholder="Masukkan detail tambahan jika ada" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1.5">Jenis Pembayaran <span class="text-red-500">*</span></label>
                    <select required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                        <option>Transfer Bank</option>
                        <option>Tunai</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1.5">Nama Bank <span class="text-red-500">*</span></label>
                    <select required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                        <option>Bank Mandiri</option>
                        <option>Bank BRI</option>
                    </select>
                </div>
            </div>

            <div class="overflow-x-auto border border-gray-100 rounded-2xl">
                <table class="w-full text-left border-collapse text-xs">
                    <thead>
                        <tr class="bg-gray-50 text-gray-500 font-bold border-b border-gray-100">
                            <th class="p-3">Nama Obat</th>
                            <th class="p-3">ID Batch</th>
                            <th class="p-3">Tanggal Kedaluwarsa</th>
                            <th class="p-3">Stok Sistem</th>
                            <th class="p-3">Jumlah Beli</th>
                            <th class="p-3">Harga Produsen</th>
                            <th class="p-3">HET Box</th>
                            <th class="p-3 text-right">Total Harga</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50 font-semibold text-gray-700">
                        <tr>
                            <td class="p-2">
                                <select class="bg-white border border-gray-200 rounded-lg p-1.5 focus:outline-none focus:border-[#149387]">
                                    <option>Antiva 50ml</option>
                                </select>
                            </td>
                            <td class="p-2"><input type="text" value="632435434" class="w-20 bg-gray-50 border border-gray-200 rounded-lg p-1.5"></td>
                            <td class="p-2"><input type="text" id="expiry_date" placeholder="05 Feb 2022" class="w-24 bg-white border border-gray-200 rounded-lg p-1.5"></td>
                            <td class="p-2 text-center text-gray-400">245</td>
                            <td class="p-2"><input type="number" value="75" class="w-16 bg-white border border-gray-200 rounded-lg p-1.5"></td>
                            <td class="p-2 text-gray-500">Rp5.520.000</td>
                            <td class="p-2 text-gray-500">Rp3.920.000</td>
                            <td class="p-2 text-right text-gray-800 font-bold">Rp5.600.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 bg-gray-50/50 p-4 rounded-2xl border border-gray-100 text-sm font-semibold">
                <div><span class="text-xs text-gray-400 block mb-1">Subtotal</span><input type="text" readonly value="Rp135.00" class="w-full bg-white border border-gray-200 rounded-lg p-2 text-center"></div>
                <div><span class="text-xs text-gray-400 block mb-1">Diskon</span><input type="text" value="20%" class="w-full bg-white border border-gray-200 rounded-lg p-2 text-center"></div>
                <div><span class="text-xs text-gray-400 block mb-1">Jumlah Dibayar</span><input type="text" value="Rp135.00" class="w-full bg-white border border-gray-200 rounded-lg p-2 text-center"></div>
                <div><span class="text-xs text-gray-400 block mb-1">PPN (10%)</span><input type="text" readonly value="10%" class="w-full bg-white border border-gray-200 rounded-lg p-2 text-center"></div>
            </div>

            <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3">
                <button type="submit" class="bg-[#149387] hover:bg-[#117c71] text-white px-6 py-2.5 rounded-xl text-sm font-semibold shadow-xs cursor-pointer">
                    Simpan & Lihat Faktur (Lunas)
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#purchase_date", { locale: "id", dateFormat: "d M Y" });
            flatpickr("#expiry_date", { locale: "id", dateFormat: "d M Y" });
        });
    </script>
@endsection