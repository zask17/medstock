@extends($layout)

@section('title', 'Daftar Karyawan')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Daftar Karyawan</h1>
        <div class="flex items-center gap-3">
            <div class="bg-white px-4 py-2 rounded-xl border border-gray-100 flex gap-4 text-xs font-semibold text-gray-500 shadow-2xs">
                <span>Cuti: <span class="text-indigo-600 font-bold">14</span></span>
                <span>Libur: <span class="text-rose-500 font-bold">04</span></span>
                <span>Di Kantor: <span class="text-emerald-500 font-bold">50</span></span>
            </div>
            <a href="{{ route('admin.karyawan.tambah') }}" class="bg-[#149387] hover:bg-[#117d72] text-white px-4 py-2.5 rounded-xl font-semibold text-sm inline-flex items-center gap-2 transition shadow-xs cursor-pointer">
                <i class="fa-solid fa-plus text-xs"></i> Tambah Karyawan Baru
            </a>
        </div>
    </div>

    <div class="bg-white p-4 rounded-3xl border border-gray-100 flex flex-wrap items-center gap-4 shadow-2xs">
        <div class="flex-1 min-w-[240px] relative bg-gray-50 border border-transparent rounded-xl px-4 py-2.5 flex items-center">
            <i class="fa-solid fa-magnifying-glass text-gray-400 mr-2.5 text-sm"></i>
            <input type="text" placeholder="Cari berdasarkan nama, email, atau peran..." class="bg-transparent border-none focus:outline-none text-sm w-full text-gray-700">
        </div>
        <div class="w-48 relative bg-gray-50 border border-transparent rounded-xl px-4 py-2.5 flex items-center">
            <select class="bg-transparent border-none focus:outline-none text-sm w-full text-gray-600 appearance-none cursor-pointer pr-4">
                <option>Jabatan / Peran</option>
                <option>Admin</option>
                <option>Pegawai Gudang</option>
                <option>Apoteker</option>
                <option>Asisten Apoteker</option>
            </select>
            <i class="fa-solid fa-chevron-down absolute right-4 text-gray-400 text-xs pointer-events-none"></i>
        </div>
        <button class="bg-slate-900 hover:bg-slate-800 text-white p-2.5 px-4 rounded-xl transition shadow-xs cursor-pointer">
            <i class="fa-solid fa-magnifying-glass"></i> Filter
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @php
            $karyawan = [
                ['nama' => 'Darlene Robertson', 'posisi' => 'Apoteker', 'foto' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=120&auto=format&fit=crop'],
                ['nama' => 'Jacob Jones', 'posisi' => 'Pegawai Gudang', 'foto' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=120&auto=format&fit=crop'],
                ['nama' => 'Cody Fisher', 'posisi' => 'Asisten Apoteker', 'foto' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=120&auto=format&fit=crop'],
                ['nama' => 'Jerome Bell', 'posisi' => 'Asisten Apoteker', 'foto' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=120&auto=format&fit=crop'],
                ['nama' => 'Dianne Russell', 'posisi' => 'Pegawai Gudang', 'foto' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=120&auto=format&fit=crop'],
                ['nama' => 'Devon Lane', 'posisi' => 'Apoteker', 'foto' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=120&auto=format&fit=crop']
            ];
        @endphp

        @foreach($karyawan as $k)
        <div class="bg-white p-5 rounded-3xl border border-gray-100 shadow-2xs relative hover:shadow-xs transition duration-200">
            <button class="absolute top-5 right-5 text-gray-400 hover:text-gray-600 cursor-pointer"><i class="fa-solid fa-ellipsis-vertical"></i></button>
            <div class="flex items-start gap-4">
                <img src="{{ $k['foto'] }}" alt="{{ $k['nama'] }}" class="w-14 h-14 rounded-2xl object-cover border border-gray-100 shadow-inner">
                <div class="flex-1 min-w-0">
                    <h3 class="text-base font-bold text-gray-900 truncate">{{ $k['nama'] }}</h3>
                    <span class="inline-block bg-emerald-50 text-[#149387] font-bold text-[11px] px-2.5 py-0.5 rounded-lg mt-1.5">{{ $k['posisi'] }}</span>
                    
                    <div class="grid grid-cols-2 gap-x-2 gap-y-3 mt-4 pt-4 border-t border-gray-50">
                        <div>
                            <p class="text-[10px] uppercase tracking-wider font-semibold text-gray-400">Telepon</p>
                            <p class="text-xs font-bold text-gray-700 mt-0.5 truncate">(021) 555-0120</p>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-wider font-semibold text-gray-400">Gol. Darah</p>
                            <p class="text-xs font-bold text-gray-700 mt-0.5">A+ (Positif)</p>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-wider font-semibold text-gray-400">Email</p>
                            <p class="text-xs font-bold text-gray-700 mt-0.5 truncate">jane@gmail.com</p>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-wider font-semibold text-gray-400">Gaji Per Jam</p>
                            <p class="text-xs font-bold text-[#149387] mt-0.5 truncate">Rp 35.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="flex items-center justify-center gap-1.5 pt-4">
        <button class="p-2 text-gray-400 hover:text-gray-600 transition"><i class="fa-solid fa-chevron-left text-xs"></i></button>
        <button class="w-8 h-8 rounded-lg text-sm font-semibold bg-[#149387] text-white transition">1</button>
        <button class="w-8 h-8 rounded-lg text-sm font-medium text-gray-500 hover:bg-gray-100 transition">2</button>
        <button class="w-8 h-8 rounded-lg text-sm font-medium text-gray-500 hover:bg-gray-100 transition">3</button>
        <button class="p-2 text-gray-400 hover:text-gray-600 transition"><i class="fa-solid fa-chevron-right text-xs"></i></button>
    </div>
</div>
@endsection