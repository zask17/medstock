@extends($layout)

@section('title', 'Log Histori Absensi')

@section('content')
<div class="space-y-6" x-data="{ modalAbsensi: false }">
    <!-- Header Halaman & Tombol Tambah Absensi -->
    <div class="flex items-center justify-between gap-4 border-b border-gray-100 pb-2">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Riwayat Absensi Kerja</h1>
            <p class="text-sm text-gray-400 mt-1">Daftar log masuk dan keluar sediaan penugasan internal</p>
        </div>
        <!-- Tombol Pemicu Modal Pop-up -->
        <button @click="modalAbsensi = true" 
            class="bg-[#149387] hover:bg-[#117d72] text-white px-5 py-2.5 rounded-xl font-bold text-xs inline-flex items-center gap-2 transition shadow-xs cursor-pointer">
            <i class="fa-solid fa-plus text-xs"></i> Tambah Absensi
        </button>
    </div>

    <!-- Filter Bar Atas (Sesuai Gambar image_8cd722.jpg) -->
    <div class="bg-white p-4 rounded-3xl border border-gray-100 grid grid-cols-1 sm:grid-cols-4 gap-4 shadow-2xs">
        <div class="relative bg-gray-50 border border-transparent rounded-xl px-4 py-2 flex items-center">
            <select class="w-full bg-transparent border-none focus:outline-none text-xs font-semibold text-gray-600 appearance-none cursor-pointer pr-4">
                <option value="">Pilih Nama Karyawan</option>
                <option value="Thomas Flecture">Thomas Flecture</option>
                <option value="Jane Cooper">Jane Cooper</option>
            </select>
            <i class="fa-solid fa-chevron-down absolute right-4 text-gray-400 text-[10px] pointer-events-none"></i>
        </div>
        <div class="relative bg-gray-50 border border-transparent rounded-xl px-4 py-2 flex items-center">
            <input type="text" id="filter_from_date" placeholder="Dari: 28 Jun, 2026 - 10:00" class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-600 font-semibold">
            <i class="fa-regular fa-calendar absolute right-4 text-gray-400 text-xs"></i>
        </div>
        <div class="relative bg-gray-50 border border-transparent rounded-xl px-4 py-2 flex items-center">
            <input type="text" id="filter_to_date" placeholder="Sampai: 30 Jun, 2026 - 10:00" class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-600 font-semibold">
            <i class="fa-regular fa-calendar absolute right-4 text-gray-400 text-xs"></i>
        </div>
        <button class="bg-[#149387] hover:bg-[#117d72] text-white font-bold text-xs p-2.5 rounded-xl shadow-xs cursor-pointer flex items-center justify-center gap-1.5 transition-colors">
            <i class="fa-solid fa-magnifying-glass text-xs"></i> Tampilkan Log
        </button>
    </div>

    <!-- Tabel Data Absensi Karyawan -->
    <div class="bg-white rounded-3xl border border-gray-100 shadow-2xs overflow-hidden">
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse min-w-[750px]">
                <thead>
                    <tr class="bg-gray-50/70 border-b border-gray-100 text-gray-400 text-[11px] font-bold tracking-wider uppercase">
                        <th class="px-6 py-4">Nama Karyawan</th>
                        <th class="px-6 py-4">Tanggal</th>
                        <th class="px-6 py-4">Jam Datang</th>
                        <th class="px-6 py-4">Jam Pulang</th>
                        <th class="px-6 py-4">Durasi Jam Kerja</th>
                        <th class="px-6 py-4 text-center w-24">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm font-medium text-gray-700">
                    @php
                        $absensi = [
                            ['nama' => 'Jane Cooper', 'tgl' => '10 Feb 2026', 'masuk' => '8:59 AM', 'keluar' => '07:04 PM', 'durasi' => '10h 4m', 'foto' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=80'],
                            ['nama' => 'Guy Hawkins', 'tgl' => '10 Feb 2026', 'masuk' => '8:59 AM', 'keluar' => '07:04 PM', 'durasi' => '10h 4m', 'foto' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=80'],
                            ['nama' => 'Robert Fox', 'tgl' => '10 Feb 2026', 'masuk' => '8:59 AM', 'keluar' => '07:04 PM', 'durasi' => '10h 4m', 'foto' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=80'],
                            ['nama' => 'Cody Fisher', 'tgl' => '10 Feb 2026', 'masuk' => '8:59 AM', 'keluar' => '07:04 PM', 'durasi' => '10h 4m', 'foto' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=80'],
                            ['nama' => 'Albert Flores', 'tgl' => '10 Feb 2026', 'masuk' => '8:59 AM', 'keluar' => '07:04 PM', 'durasi' => '10h 4m', 'foto' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=80'],
                            ['nama' => 'Devon Lane', 'tgl' => '10 Feb 2026', 'masuk' => '8:59 AM', 'keluar' => '07:04 PM', 'durasi' => '10h 4m', 'foto' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=80']
                        ];
                    @endphp

                    @foreach($absensi as $a)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 flex items-center gap-3">
                            <img src="{{ $a['foto'] }}" alt="" class="w-8 h-8 rounded-full object-cover border border-gray-100 shadow-inner">
                            <span class="font-bold text-gray-900 text-xs">{{ $a['nama'] }}</span>
                        </td>
                        <td class="px-6 py-4 text-xs text-gray-500 font-semibold">{{ $a['tgl'] }}</td>
                        <td class="px-6 py-4 text-xs font-bold text-gray-700">{{ $a['masuk'] }}</td>
                        <td class="px-6 py-4 text-xs font-bold text-gray-700">{{ $a['keluar'] }}</td>
                        <td class="px-6 py-4 font-bold text-gray-800 text-xs">{{ $a['durasi'] }}</td>
                        <td class="px-6 py-4 text-center">
                            <button class="bg-indigo-50/70 hover:bg-indigo-100/80 px-4 py-1.5 rounded-xl text-xs font-bold text-indigo-500 cursor-pointer transition-colors">View</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Pop-up "Tambah Absensi" (Sesuai Presisi Gambar image_8cd722.jpg) -->
    <div x-show="modalAbsensi" 
        class="fixed inset-0 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center z-50 p-4" 
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        style="display: none;">
        
        <div class="bg-white rounded-3xl w-full max-w-sm p-6 shadow-2xl space-y-5 border border-gray-100" @click.outside="modalAbsensi = false">
            <!-- Header Modal -->
            <div class="flex justify-between items-center">
                <h2 class="text-base font-bold text-gray-900">Add Attendance</h2>
                <button @click="modalAbsensi = false" class="text-gray-400 hover:text-gray-600 transition-colors cursor-pointer">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>
            
            <form class="space-y-4 text-xs font-medium" @submit.prevent="modalAbsensi = false">
                <!-- Select Karyawan -->
                <div>
                    <label class="block text-gray-500 font-bold mb-1.5">Employee</label>
                    <div class="relative bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 flex items-center">
                        <select class="bg-transparent border-none focus:outline-none w-full text-gray-600 font-semibold appearance-none pr-6 cursor-pointer">
                            <option value="Thomas Flecture">Thomas Flecture</option>
                            <option value="Jane Cooper">Jane Cooper</option>
                            <option value="Guy Hawkins">Guy Hawkins</option>
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-4 text-gray-400 text-[10px] pointer-events-none"></i>
                    </div>
                </div>

                <!-- Date & Time Input -->
                <div>
                    <label class="block text-gray-500 font-bold mb-1.5">Date & Time</label>
                    <div class="relative bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 flex items-center">
                        <input type="text" id="attendance_date" value="Thomas Flecture" placeholder="Select Date & Time" class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-600 font-semibold pr-6">
                        <i class="fa-regular fa-calendar absolute right-4 text-gray-400 text-sm"></i>
                    </div>
                </div>

                <!-- Start Time Input -->
                <div>
                    <label class="block text-gray-500 font-bold mb-1.5">Start Time</label>
                    <div class="relative bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 flex items-center">
                        <input type="text" id="attendance_start_time" value="Thomas Flecture" placeholder="Select Start Time" class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-600 font-semibold pr-6">
                        <i class="fa-regular fa-calendar absolute right-4 text-gray-400 text-sm"></i>
                    </div>
                </div>

                <!-- Tombol Action Cancel & Add -->
                <div class="pt-3 flex gap-3 font-bold">
                    <button type="button" @click="modalAbsensi = false" 
                        class="flex-1 bg-gray-50 hover:bg-gray-100 border border-gray-200 py-2.5 rounded-xl text-xs text-gray-600 transition cursor-pointer text-center">
                        Cancel
                    </button>
                    <button type="submit" 
                        class="flex-1 bg-[#149387] hover:bg-[#117d72] text-white py-2.5 rounded-xl text-xs transition shadow-xs cursor-pointer text-center">
                        Add
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script Inisialisasi Flatpickr untuk Input Tanggal & Jam -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof flatpickr !== 'undefined') {
            flatpickr("#filter_from_date", { enableTime: true, dateFormat: "d M, Y - H:i", locale: "id" });
            flatpickr("#filter_to_date", { enableTime: true, dateFormat: "d M, Y - H:i", locale: "id" });
            flatpickr("#attendance_date", { enableTime: true, dateFormat: "d M, Y - H:i", locale: "id" });
            flatpickr("#attendance_start_time", { enableTime: true, noCalendar: false, dateFormat: "d M, Y - H:i", locale: "id" });
        }
    });
</script>
@endsection