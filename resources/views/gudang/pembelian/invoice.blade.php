@extends('layouts.gudang.main')

@section('title', 'Detail Invoice Pembelian')

@section('content')
    <div class="space-y-6 max-w-4xl mx-auto">
        <div class="flex justify-between items-center bg-white p-4 rounded-2xl border border-gray-100 shadow-xs">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-50 text-emerald-600 rounded-xl text-xs font-bold">
                    <span class="w-2 h-2 bg-emerald-500 rounded-full"></span> Lunas Pembayaran
                </span>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('gudang.pembelian.daftar-pembelian') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 text-xs font-bold px-4 py-2 rounded-xl transition-all">
                    <i class="fa-solid fa-arrow-left mr-1"></i> Kembali ke Daftar
                </a>
                <button onclick="window.print()" class="bg-[#149387] hover:bg-[#117c71] text-white text-xs font-bold px-4 py-2 rounded-xl cursor-pointer transition-all">
                    <i class="fa-solid fa-print mr-1"></i> Cetak Faktur
                </button>
            </div>
        </div>
        
        <div class="bg-white rounded-3xl border border-gray-100 shadow-sm p-8 sm:p-12 space-y-8 print:border-none print:shadow-none">
            <div class="flex flex-col sm:flex-row justify-between items-start gap-6 border-b border-gray-100 pb-8">
                <div>
                    <h1 class="text-3xl font-black tracking-tight text-[#149387]">medstock</h1>
                    <p class="text-xs text-gray-400 font-semibold mt-1">Sistem Manajemen Inventaris Apotek</p>
                    
                    <div class="mt-6">
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Ditujukan Kepada:</p>
                        <p class="text-base font-bold text-gray-800 mt-1">Gudang Utama MedStock</p>
                        <p class="text-xs text-gray-400 mt-0.5">Surabaya, Jawa Timur, Indonesia</p>
                    </div>
                </div>
                
                <div class="sm:text-right space-y-1 text-sm">
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Faktur Penjualan (Invoice)</p>
                    <p class="text-lg font-mono font-bold text-gray-800">#INV-{{ $id }}</p>
                    <p class="text-xs text-gray-400 font-semibold pt-2">Tanggal Berkas: <span class="text-gray-700 font-bold">16 Feb 2026</span></p>
                    <p class="text-xs text-gray-400 font-semibold">Nama Produsen: <span class="text-[#149387] font-bold">Beximco Pharmaceutical</span></p>
                </div>
            </div>

            <div>
                <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4">Rincian Item Pembelian</h4>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm border-collapse">
                        <thead>
                            <tr class="border-b border-gray-200 text-gray-400 text-xs uppercase font-bold tracking-wider">
                                <th class="py-3 pl-2 w-12">SI</th>
                                <th class="py-3">Nama Produk Obat</th>
                                <th class="py-3 text-center">Jumlah (QTY)</th>
                                <th class="py-3">Harga Produsen</th>
                                <th class="py-3 text-right pr-2">Total Jumlah</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-gray-600 font-medium">
                            <tr>
                                <td class="py-4 pl-2 text-gray-400">1</td>
                                <td class="py-4">
                                    <span class="text-gray-800 font-bold block">Napa 500mg</span>
                                    <span class="text-xs text-gray-400 font-mono">Batch: #632435434</span>
                                </td>
                                <td class="py-4 text-center font-bold text-gray-800">40</td>
                                <td class="py-4">Rp455.000</td>
                                <td class="py-4 text-right pr-2 font-bold text-gray-800">Rp18.200.000</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-2 text-gray-400">2</td>
                                <td class="py-4">
                                    <span class="text-gray-800 font-bold block">Seclo 20mg</span>
                                    <span class="text-xs text-gray-400 font-mono">Batch: #23550434</span>
                                </td>
                                <td class="py-4 text-center font-bold text-gray-800">20</td>
                                <td class="py-4">Rp510.000</td>
                                <td class="py-4 text-right pr-2 font-bold text-gray-800">Rp10.200.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-between items-start gap-4 border-t border-gray-100 pt-6">
                <div class="text-xs text-gray-400 max-w-xs font-medium">
                    <p class="font-bold text-gray-500 uppercase mb-1">Informasi Rekening:</p>
                    <p>Pembayaran ditransfer penuh ke rekening Bank Mandiri Produsen.</p>
                </div>
                <div class="w-full sm:w-64 text-sm font-semibold text-gray-500 space-y-2">
                    <div class="flex justify-between"><span>Subtotal:</span><span class="text-gray-800">Rp28.400.000</span></div>
                    <div class="flex justify-between"><span>Diskon (20%):</span><span class="text-rose-500">-Rp5.680.000</span></div>
                    <div class="flex justify-between border-t border-gray-100 pt-2 text-base font-bold">
                        <span class="text-gray-800">Total Akhir:</span>
                        <span class="text-[#149387]">Rp22.720.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection