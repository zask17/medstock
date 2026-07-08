@extends($layout)

@section('title', 'Log Histori Absensi')

@section('content')
<div class="space-y-6" x-data="{ modalAbsensi: false }">
    <div class="flex items-center justify-between gap-4 border-b border-gray-100 pb-2">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Riwayat Absensi Kerja</h1>
            <p class="text-sm text-gray-400 mt-1">Daftar log masuk dan keluar sediaan penugasan internal</p>
        </div>
        <button @click="modalAbsensi = true" class="bg-[#149387] hover:bg-[#117d72] text-white px-4 py-2.5 rounded-xl font-semibold text-sm inline-flex items-center gap-2 transition shadow-xs cursor-pointer">
            <i class="fa-solid fa-plus text-xs"></i> Tambah Absensi Manual
        </button>
    </div>

    <div class="bg-white p-4 rounded-3xl border border-gray-100 grid grid-cols-1 sm:grid-cols-4 gap-4 shadow-2xs">
        <div class="relative bg-gray-50 border border-transparent rounded-xl px-4 py-2 flex items-center">
            <select class="w-full bg-transparent border-none focus:outline-none text-xs font-semibold text-gray-600 appearance-none cursor-pointer pr-4">
                <option>Pilih Nama Karyawan</option>
            </select>
            <i class="fa-solid fa-chevron-down absolute right-4 text-gray-400 text-[10px] pointer-events-none"></i>
        </div>
        <div class="relative bg-gray-50 border border-transparent rounded-xl px-4 py-2 flex items-center">
            <input type="text" placeholder="Dari Tanggal: 28 Jun, 2026" class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-600 font-semibold">
            <i class="fa-regular fa-calendar absolute right-4 text-gray-400 text-xs"></i>
        </div>
        <div class="relative bg-gray-50 border border-transparent rounded-xl px-4 py-2 flex items-center">
            <input type="text" placeholder="Sampai Tanggal: 30 Jun, 2026" class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-600 font-semibold">
            <i class="fa-regular fa-calendar absolute right-4 text-gray-400 text-xs"></i>
        </div>
        <button class="bg-[#149387] hover:bg-[#117d72] text-white font-bold text-xs p-2.5 rounded-xl shadow-xs cursor-pointer">
            <i class="fa-solid fa-magnifying-glass mr-1"></i> Tampilkan Log
        </button>
    </div>

    <div class="bg-white rounded-3xl border border-gray-100 shadow-2xs overflow-hidden">
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/70 border-b border-gray-100 text-gray-400 text-[11px] font-bold tracking-wider uppercase">
                        <th class="px-6 py-4">Nama Karyawan</th>
                        <th class="px-6 py-4">Tanggal Absen</th>
                        <th class="px-6 py-4">Jam Datang</th>
                        <th class="px-6 py-4">Jam Pulang</th>
                        <th class="px-6 py-4">Durasi Jam Kerja</th>
                        <th class="px-6 py-4 text-center w-24">Detail</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm font-medium text-gray-700">
                    @php
                        $absensi = [
                            ['nama' => 'Jane Cooper', 'tgl' => '10 Feb 2026', 'masuk' => '08:59 AM', 'keluar' => '07:04 PM', 'durasi' => '10j 5m', 'foto' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=80'],
                            ['nama' => 'Guy Hawkins', 'tgl' => '10 Feb 2026', 'masuk' => '08:59 AM', 'keluar' => '07:04 PM', 'durasi' => '10j 5m', 'foto' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=80']
                        ];
                    @endphp

                    @foreach($absensi as $a)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 flex items-center gap-3">
                            <img src="{{ (isset($a['foto']) && filter_var($a['foto'], FILTER_VALIDATE_URL)) ? $a['foto'] : 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=80&auto=format&fit=crop' }}" alt="" class="w-8 h-8 rounded-lg object-cover border border-gray-100 shadow-inner">
                            <span class="font-bold text-gray-900 text-xs">{{ $a['nama'] }}</span>
                        </td>
                        <td class="px-6 py-4 text-xs text-gray-500">{{ $a['tgl'] }}</td>
                        <td class="px-6 py-4 text-xs font-bold text-emerald-600">{{ $a['masuk'] }}</td>
                        <td class="px-6 py-4 text-xs font-bold text-rose-500">{{ $a['keluar'] }}</td>
                        <td class="px-6 py-4 font-bold text-gray-800 text-xs">{{ $a['durasi'] }}</td>
                        <td class="px-6 py-4 text-center">
                            <button class="border border-gray-100 hover:bg-gray-50 px-3 py-1 rounded-lg text-xs font-bold text-[#149387] cursor-pointer transition-colors">Lihat</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div x-show="modalAbsensi" class="fixed inset-0 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center z-50 p-4" x-transition style="display: none;">
        <div class="bg-white rounded-3xl w-full max-w-md p-6 shadow-xl space-y-4" @click.outside="modalAbsensi = false">
            <div class="flex justify-between items-center border-b border-gray-50 pb-2">
                <h2 class="text-base font-bold text-gray-900">Tambah Absensi Manual</h2>
                <button @click="modalAbsensi = false" class="text-gray-400 hover:text-black cursor-pointer"><i class="fa-solid fa-xmark text-base"></i></button>
            </div>
            
            <form class="space-y-4 text-xs font-semibold" @submit.prevent="modalAbsensi = false">
                <div class="relative bg-gray-50 border border-gray-200 rounded-xl px-4 py-2 flex items-center">
                    <div class="w-full">
                        <label class="block text-[10px] text-gray-400 uppercase tracking-wider mb-0.5">Pilih Karyawan</label>
                        <select class="bg-transparent border-none focus:outline-none w-full text-gray-700 font-bold appearance-none pr-4 cursor-pointer">
                            <option>Thomas Flecture</option>
                            <option>Jane Cooper</option>
                        </select>
                    </div>
                    <i class="fa-solid fa-chevron-down absolute right-4 text-gray-400 text-[10px] pointer-events-none"></i>
                </div>

                <div>
                    <label class="block text-gray-500 uppercase mb-1.5">Tanggal Kerja</label>
                    <div class="relative bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 flex items-center">
                        <input type="text" placeholder="Pilih Tanggal Penugasan" class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-700 font-medium">
                        <i class="fa-regular fa-calendar absolute right-4 text-gray-400"></i>
                    </div>
                </div>

                <div>
                    <label class="block text-gray-500 uppercase mb-1.5">Jam Masuk Kerja</label>
                    <div class="relative bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 flex items-center">
                        <input type="text" placeholder="08:00 AM" class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-700 font-medium">
                        <i class="fa-regular fa-clock absolute right-4 text-gray-400"></i>
                    </div>
                </div>

                <div class="pt-3 border-t border-gray-100 flex gap-3 font-bold">
                    <button type="button" @click="modalAbsensi = false" class="flex-1 border border-gray-200 hover:bg-gray-50 py-2.5 rounded-xl text-xs text-gray-500 transition cursor-pointer text-center">Batal</button>
                    <button type="submit" class="flex-1 bg-[#149387] hover:bg-[#117d72] text-white py-2.5 rounded-xl text-xs transition shadow-sm cursor-pointer text-center">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection