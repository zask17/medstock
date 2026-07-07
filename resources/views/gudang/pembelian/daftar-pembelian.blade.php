@extends('layouts.gudang.main')

@section('title', 'Daftar Pembelian')

@section('content')
    <div class="space-y-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Daftar Pembelian (PO)</h2>
                <p class="text-sm text-gray-400 mt-1">Kelola dan pantau pesanan pembelian produk medis kepada produsen
                    mitra.</p>
            </div>
            <div>
                <a href="{{ route('gudang.pembelian.tambah') }}"
                    class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-xs flex items-center gap-2 transition-all cursor-pointer">
                    <i class="fa-solid fa-plus text-xs"></i>
                    Tambah Pembelian
                </a>
            </div>
        </div>

        <div class="bg-white rounded-3xl border border-gray-100 shadow-xs p-6">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 items-end mb-6">
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Tanggal
                        Mulai</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-gray-400 pointer-events-none">
                            <i class="fa-regular fa-calendar-days text-sm"></i>
                        </span>
                        <input type="text" id="start_date" placeholder="28 Jun, 2022 - 10:00"
                            class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-10 pr-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Tanggal
                        Selesai</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-gray-400 pointer-events-none">
                            <i class="fa-regular fa-calendar-days text-sm"></i>
                        </span>
                        <input type="text" id="end_date" placeholder="30 Jun, 2022 - 10:00"
                            class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-10 pr-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                    </div>
                </div>
                <div>
                    <button
                        class="bg-[#149387] hover:bg-[#117c71] text-white p-3 rounded-xl transition-all shadow-2xs cursor-pointer">
                        <i class="fa-solid fa-magnifying-glass text-sm"></i>
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse min-w-[800px]">
                    <thead>
                        <tr class="border-b border-gray-100 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                            <th class="pb-4 pl-2 w-12"><input type="checkbox"
                                    class="rounded border-gray-300 text-[#149387] focus:ring-[#149387]"></th>
                            <th class="pb-4 px-4">No.</th>
                            <th class="pb-4 px-4">No. Faktur (Invoice)</th>
                            <th class="pb-4 px-4">ID Pembelian</th>
                            <th class="pb-4 px-4">Nama Produsen</th>
                            <th class="pb-4 px-4">Tanggal</th>
                            <th class="pb-4 px-4">Total Jumlah</th>
                            <th class="pb-4 pr-2 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50 text-sm text-gray-600 font-medium">
                        @for ($i = 5; $i >= 1; $i--)
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-4 pl-2"><input type="checkbox"
                                        class="rounded border-gray-300 text-[#149387] focus:ring-[#149387]"></td>
                                <td class="py-4 px-4 text-gray-400">{{ 6 - $i }}</td>
                                <td class="py-4 px-4 text-gray-800 font-semibold">8763546{{ $i }}</td>
                                <td class="py-4 px-4 font-mono text-xs text-gray-400">8988408656{{ $i }}</td>
                                <td class="py-4 px-4 font-bold text-[#149387]">Beximco Mitra {{ $i }}</td>
                                <td class="py-4 px-4 text-gray-400 text-xs font-semibold">2026-07-0{{ $i }}</td>
                                <td class="py-4 px-4 font-bold text-gray-800">Rp{{ $i }}0.000,00</td>
                                <td class="py-4 pr-2 text-right">
                                    <a href="{{ route('gudang.pembelian.invoice', ['id' => '8763546' . $i]) }}"
                                        class="inline-flex items-center gap-1.5 bg-gray-50 hover:bg-emerald-50 text-gray-500 hover:text-[#149387] px-3 py-1.5 rounded-xl border border-gray-200 hover:border-emerald-200 text-xs font-bold transition-all">
                                        <i class="fa-solid fa-file-invoice"></i> Invoice
                                    </a>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr("#start_date", { locale: "id", enableTime: true, dateFormat: "d M, Y - H:i" });
            flatpickr("#end_date", { locale: "id", enableTime: true, dateFormat: "d M, Y - H:i" });
        });
    </script>
@endsection