@extends($layout)

@section('title', 'Daftar Konfigurasi Setup Gaji')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Daftar Pengaturan Gaji Karyawan</h1>
        <p class="text-sm text-gray-400 mt-1">Daftar pemetaan skema upah kotor berjalan per staf</p>
    </div>

    <div class="bg-white rounded-3xl border border-gray-100 shadow-2xs overflow-hidden">
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/70 border-b border-gray-100 text-gray-400 text-[11px] font-bold tracking-wider uppercase">
                        <th class="px-6 py-4">Nama Karyawan</th>
                        <th class="px-6 py-4">Sistem Gaji</th>
                        <th class="px-6 py-4">Tanggal Diatur</th>
                        <th class="px-6 py-4">Gaji Pokok/Kotor</th>
                        <th class="px-6 py-4 text-center w-32">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm font-medium text-gray-700">
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=80" class="w-8 h-8 rounded-lg object-cover border border-gray-100 shadow-inner">
                            <span class="font-bold text-gray-900">Jane Cooper</span>
                        </td>
                        <td class="px-6 py-4 text-gray-500">Bulanan Tetap</td>
                        <td class="px-6 py-4 text-xs text-gray-400">12 Feb 2026</td>
                        <td class="px-6 py-4 font-extrabold text-gray-900">Rp 12.000.000</td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button type="button" class="text-gray-400 hover:text-sky-600 p-1 rounded-lg transition-colors cursor-pointer"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="text-gray-400 hover:text-rose-600 p-1 rounded-lg transition-colors cursor-pointer"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection