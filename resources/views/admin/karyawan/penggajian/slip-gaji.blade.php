@extends($layout)

@section('title', 'Rekap Slip Gaji Karyawan')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Rekap Lembar Gaji Bulanan</h1>
            <p class="text-sm text-gray-400 mt-1">Daftar cetak berkas slip gaji periodik berkala</p>
        </div>
        
        <div class="flex items-center gap-2 self-end sm:self-auto">
            <div class="relative bg-white border border-gray-100 px-4 py-2 rounded-xl flex items-center shadow-2xs w-48">
                <input type="text" value="Februari 2026" class="bg-transparent border-none focus:outline-none text-xs font-bold text-gray-700 w-full">
                <i class="fa-regular fa-calendar absolute right-4 text-gray-400 text-xs"></i>
            </div>
            <button type="button" class="bg-[#149387] hover:bg-[#117d72] text-white p-2.5 rounded-xl cursor-pointer shadow-xs transition-colors"><i class="fa-solid fa-magnifying-glass px-1"></i></button>
        </div>
    </div>

    <div class="bg-white rounded-3xl border border-gray-100 shadow-2xs overflow-hidden">
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/70 border-b border-gray-100 text-gray-400 text-[11px] font-bold tracking-wider uppercase">
                        <th class="px-6 py-4">ID Slip</th>
                        <th class="px-6 py-4">Periode Bulan</th>
                        <th class="px-6 py-4">Tanggal Pembuatan</th>
                        <th class="px-6 py-4">Dibuat Oleh</th>
                        <th class="px-6 py-4 text-center w-32">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm font-medium text-gray-700">
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 font-mono font-bold text-gray-500">#SLP-0226</td>
                        <td class="px-6 py-4 font-bold text-gray-900">Februari 2026</td>
                        <td class="px-6 py-4 text-gray-400 text-xs">26 Feb 2026</td>
                        <td class="px-6 py-4 text-gray-500">Sistem Admin</td>
                        <td class="px-6 py-4 text-center">
                            <button type="button" class="text-[#149387] hover:underline font-bold text-xs cursor-pointer"><i class="fa-solid fa-print mr-1"></i> Cetak Slip</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection