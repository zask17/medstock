@extends('layouts.gudang.main')

@section('title', 'Terima Retur')

@section('content')
    <div class="space-y-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Penerimaan Retur Pembelian</h2>
            <p class="text-sm text-gray-400 mt-1">Konfirmasi penerimaan produk pengganti (replacement items) yang lolos QC
                dari produsen mitra.</p>
        </div>

        <div class="bg-white rounded-3xl border border-gray-100 shadow-xs p-6 space-y-6">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 items-end text-xs font-semibold">
                <div>
                    <label class="block text-gray-400 mb-1">ID Retur Pembelian</label>
                    <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-2.5">
                        <option>T-2535436734 3254</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-400 mb-1">Tanggal Masuk</label>
                    <input type="text" id="rcv_date" value="27 Feb 2022"
                        class="w-full bg-gray-50 border border-gray-200 rounded-xl p-2.5">
                </div>
                <button
                    class="bg-[#149387] text-white p-2.5 rounded-xl w-10 h-10 flex items-center justify-center shadow-2xs cursor-pointer"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </div>

            <div
                class="grid grid-cols-3 gap-4 p-4 bg-gray-50/50 border border-gray-100 rounded-2xl text-xs font-bold text-gray-500">
                <div>Nama Produsen: <span class="text-gray-800 block mt-1 font-black">Square Pharmaceuticals</span></div>
                <div>ID Faktur (Invoice): <span class="text-gray-400 block mt-1 font-mono">#T-7236478638276</span></div>
                <div>Tanggal Retur Asal: <span class="text-gray-400 block mt-1">27 Feb 2022</span></div>
            </div>

            <div class="overflow-x-auto border border-gray-100 rounded-2xl">
                <table class="w-full text-left border-collapse text-xs font-semibold text-gray-600">
                    <thead>
                        <tr class="bg-gray-50 text-gray-400 uppercase border-b border-gray-100">
                            <th class="p-4 w-12"><input type="checkbox" class="rounded"></th>
                            <th class="p-4">Kode Produk</th>
                            <th class="p-4">Nama Produk</th>
                            <th class="p-4">Kondisi Fisik</th>
                            <th class="p-4">Jumlah Diretur</th>
                            <th class="p-4">Total Diterima</th>
                            <th class="p-4">Jumlah Masuk</th>
                            <th class="p-4 text-right">Stok Tersedia</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr class="hover:bg-gray-50/50">
                            <td class="p-4"><input type="checkbox" class="rounded"></td>
                            <td class="p-4 font-mono text-gray-400">#T-43654354</td>
                            <td class="p-4 font-bold text-gray-800">Xeldrin 20mg</td>
                            <td class="p-4 text-emerald-600">Baik / Lolos QC</td>
                            <td class="p-4">200</td>
                            <td class="p-4">150</td>
                            <td class="p-4"><input type="number" value="150"
                                    class="w-16 bg-white border border-gray-200 rounded-lg p-1 text-center"></td>
                            <td class="p-4 text-right font-bold text-gray-800">300.00</td>
                        </tr>
                        <tr class="bg-gray-50/50 font-bold border-t border-gray-100">
                            <td colspan="4" class="p-4 text-gray-400 uppercase">Total Keseluruhan</td>
                            <td class="p-4">300.00</td>
                            <td class="p-4">300.00</td>
                            <td class="p-4">300.00</td>
                            <td class="p-4 text-right text-gray-800">300.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex justify-end pt-4 border-t border-gray-100">
                <button
                    class="bg-[#149387] hover:bg-[#117c71] text-white text-xs font-bold px-6 py-2.5 rounded-xl shadow-xs cursor-pointer">Simpan
                    Verifikasi</button>
            </div>
        </div>
    </div>

    <script>
        function openVerifikasiModal() {
            const modal = document.getElementById('verifikasiModal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeVerifikasiModal() {
            const modal = document.getElementById('verifikasiModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeVerifikasiModal();
            }
        });
    </script>
@endsection