@extends($layout)

@section('title', 'Eksekusi Pembayaran Gaji')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Status & Eksekusi Pembayaran Gaji</h1>
        <p class="text-sm text-gray-400 mt-1">Sahkan penyerahan gaji bersih bulanan karyawan</p>
    </div>

    <div class="bg-white rounded-3xl border border-gray-100 shadow-2xs overflow-hidden">
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/70 border-b border-gray-100 text-gray-400 text-[11px] font-bold tracking-wider uppercase">
                        <th class="px-6 py-4">Karyawan</th>
                        <th class="px-6 py-4">Bulan</th>
                        <th class="px-6 py-4">Total Jam Kerja</th>
                        <th class="px-6 py-4">Hari Aktif</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center w-40">Eksekusi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm font-medium text-gray-700">
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=80" class="w-8 h-8 rounded-lg object-cover border border-gray-100 shadow-inner">
                            <span class="font-bold text-gray-900">Guy Hawkins</span>
                        </td>
                        <td class="px-6 py-4 text-gray-500">Februari 2026</td>
                        <td class="px-6 py-4 font-bold text-gray-800">208 Jam</td>
                        <td class="px-6 py-4 text-gray-500">26 Hari</td>
                        <td class="px-6 py-4"><span class="bg-emerald-50 text-emerald-600 text-xs font-bold px-2.5 py-0.5 rounded-full">Selesai Dibayar</span></td>
                        <td class="px-6 py-4 text-center"><button disabled class="bg-gray-100 text-gray-400 text-xs font-bold px-3 py-1.5 rounded-lg border border-transparent">Sudah Lunas</button></td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=80" class="w-8 h-8 rounded-lg object-cover border border-gray-100 shadow-inner">
                            <span class="font-bold text-gray-900">Jacob Jones</span>
                        </td>
                        <td class="px-6 py-4 text-gray-500">Februari 2026</td>
                        <td class="px-6 py-4 font-bold text-gray-800">192 Jam</td>
                        <td class="px-6 py-4 text-gray-500">24 Hari</td>
                        <td class="px-6 py-4"><span class="bg-amber-50 text-amber-600 text-xs font-bold px-2.5 py-0.5 rounded-full">Tertunda</span></td>
                        <td class="px-6 py-4 text-center"><button class="bg-[#149387] hover:bg-[#117d72] text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm cursor-pointer transition-colors">Bayar Sekarang</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection