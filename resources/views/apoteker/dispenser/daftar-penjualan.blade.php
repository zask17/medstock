@extends($layout)

@section('title', 'Daftar Penjualan Obat')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Riwayat Informasi Penjualan</h1>
            <p class="text-sm text-gray-400 mt-1">Sistem Informasi Manajemen Apotek - MedStock</p>
        </div>
        <div class="flex flex-wrap items-center gap-3">
            <div class="relative w-full sm:w-64 bg-white border border-gray-100 rounded-xl px-4 py-2 flex items-center shadow-2xs">
                <i class="fa-solid fa-magnifying-glass text-gray-400 mr-2 text-sm"></i>
                <input type="text" placeholder="Cari No. Faktur / Pelanggan..." class="bg-transparent border-none focus:outline-none text-sm w-full text-gray-700">
            </div>
            <button class="bg-white hover:bg-gray-50 border border-gray-100 px-4 py-2.5 rounded-xl text-sm font-semibold flex items-center gap-2 shadow-2xs cursor-pointer transition-all">
                <i class="fa-solid fa-filter text-gray-400"></i> Filter Data
            </button>
            <button class="bg-[#149387] hover:bg-[#117d72] px-4 py-2.5 rounded-xl text-sm font-semibold text-white flex items-center gap-2 shadow-xs cursor-pointer transition-all">
                <i class="fa-solid fa-file-excel"></i> Export Excel
            </button>
        </div>
    </div>

    <div class="bg-white rounded-3xl border border-gray-100 shadow-2xs overflow-hidden">
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/70 border-b border-gray-100 text-gray-400 text-[11px] font-bold tracking-wider uppercase">
                        <th class="px-6 py-4 w-12">No</th>
                        <th class="px-6 py-4">No. Faktur</th>
                        <th class="px-6 py-4">Tanggal Penjualan</th>
                        <th class="px-6 py-4">Nama Pelanggan</th>
                        <th class="px-6 py-4">Total Penjualan</th>
                        <th class="px-6 py-4">Total Bayar</th>
                        <th class="px-6 py-4">Sisa Tagihan</th>
                        <th class="px-6 py-4">Kembalian</th>
                        <th class="px-6 py-4 text-center w-32">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm font-medium">
                    @php
                        $penjualan = [
                            ['faktur' => 'INV/20260626/001', 'tgl' => '26 Jun 2026 14:20', 'nama' => 'Yusuf Bagus', 'total' => 'Rp 142.500', 'bayar' => 'Rp 150.000', 'sisa' => 'Rp 0', 'kembali' => 'Rp 7.500'],
                            ['faktur' => 'INV/20260626/002', 'tgl' => '26 Jun 2026 15:10', 'nama' => 'Siti Aminah', 'total' => 'Rp 320.000', 'bayar' => 'Rp 200.000', 'sisa' => 'Rp 120.000', 'kembali' => 'Rp 0'],
                            ['faktur' => 'INV/20260625/089', 'tgl' => '25 Jun 2026 09:15', 'nama' => 'Budi Santoso', 'total' => 'Rp 75.000', 'bayar' => 'Rp 75.000', 'sisa' => 'Rp 0', 'kembali' => 'Rp 0'],
                        ];
                    @endphp
                    
                    @foreach($penjualan as $index => $p)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 text-gray-400 text-xs">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 font-bold text-gray-900">{{ $p['faktur'] }}</td>
                        <td class="px-6 py-4 text-gray-400 text-xs">{{ $p['tgl'] }}</td>
                        <td class="px-6 py-4 text-gray-800">{{ $p['nama'] }}</td>
                        <td class="px-6 py-4 font-bold text-gray-900">{{ $p['total'] }}</td>
                        <td class="px-6 py-4 text-emerald-600 font-bold">{{ $p['bayar'] }}</td>
                        <td class="px-6 py-4 {{ $p['sisa'] !== 'Rp 0' ? 'text-rose-500 font-bold' : 'text-gray-400' }}">{{ $p['sisa'] }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ $p['kembali'] }}</td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button class="text-gray-400 hover:text-sky-600 p-1 rounded-lg hover:bg-sky-50 transition-colors cursor-pointer"><i class="fa-regular fa-eye"></i></button>
                            <button class="text-gray-400 hover:text-emerald-600 p-1 rounded-lg hover:bg-emerald-50 transition-colors cursor-pointer"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="text-gray-400 hover:text-slate-800 p-1 rounded-lg hover:bg-gray-100 transition-colors cursor-pointer"><i class="fa-solid fa-print"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection