@extends('layouts.gudang.main')

@section('title', 'Dashboard Gudang')

@section('content')
<div class="space-y-6">
    
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Selamat Datang, {{ session('user_nama', 'Pegawai Gudang') }}!</h1>
            <p class="text-sm text-gray-500">Berikut adalah ringkasan aktivitas logistik dan inventaris MedStock hari ini.</p>
        </div>
        <div class="flex items-center space-x-2 bg-white px-4 py-2 rounded-xl border border-gray-100 shadow-sm text-sm text-gray-600 self-start sm:self-center">
            <i class="fa-regular fa-calendar text-[#149387]"></i>
            <span class="font-medium">{{ \Carbon\Carbon::now()->locale('id')->isoFormat('D MMMM YYYY') }}</span>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-xs border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-sm font-medium">Total Jenis Obat</p>
                <h3 class="text-3xl font-bold text-gray-800 mt-1">842</h3>
                <p class="text-gray-400 text-xs mt-2"><span class="text-[#149387] font-bold">12 Kategori</span> terdaftar</p>
            </div>
            <div class="w-14 h-14 bg-[#149387]/10 text-[#149387] rounded-2xl flex items-center justify-center text-2xl">
                <i class="fa-solid fa-pills"></i>
            </div>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-xs border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-sm font-medium">Stok Menipis</p>
                <h3 class="text-3xl font-bold text-amber-600 mt-1">18</h3>
                <p class="text-amber-600 text-xs mt-2 font-bold"><i class="fa-solid fa-triangle-exclamation"></i> Segera Re-order</p>
            </div>
            <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center text-2xl">
                <i class="fa-solid fa-layer-group"></i>
            </div>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-xs border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-sm font-medium">Hampir Expired</p>
                <h3 class="text-3xl font-bold text-red-600 mt-1">5</h3>
                <p class="text-gray-400 text-xs mt-2"><span class="text-red-500 font-bold">< 3 Bulan</span> sisa masa aktif</p>
            </div>
            <div class="w-14 h-14 bg-red-50 text-red-500 rounded-2xl flex items-center justify-center text-2xl">
                <i class="fa-solid fa-hourglass-half"></i>
            </div>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-xs border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-sm font-medium">Barang Masuk</p>
                <h3 class="text-3xl font-bold text-gray-800 mt-1">142</h3>
                <p class="text-emerald-500 text-xs mt-2 font-bold"><i class="fa-solid fa-arrow-trend-up"></i> +12.4% <span class="text-gray-300 font-normal">vs bln lalu</span></p>
            </div>
            <div class="w-14 h-14 bg-emerald-50 text-emerald-500 rounded-2xl flex items-center justify-center text-2xl">
                <i class="fa-solid fa-truck-ramp-box"></i>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <div class="bg-white p-6 rounded-3xl shadow-xs border border-gray-100 lg:col-span-2 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="font-bold text-gray-800 text-base">Aktivitas Barang Terbaru</h3>
                        <p class="text-xs text-gray-400">Log mutasi barang masuk dan keluar gudang teranyar</p>
                    </div>
                    <a href="#" class="text-xs text-[#149387] hover:underline font-semibold cursor-pointer">Lihat Semua</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-500 min-w-[500px]">
                        <thead class="text-gray-400 border-b border-gray-100 text-xs uppercase tracking-wider">
                            <tr>
                                <th class="pb-3 pr-4 font-semibold">Nama Obat / Batch</th>
                                <th class="pb-3 px-3 font-semibold">Tipe</th>
                                <th class="pb-3 px-3 font-semibold">Jumlah</th>
                                <th class="pb-3 pl-4 font-semibold text-right">Waktu / Pegawai</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="text-xs hover:bg-gray-50/30 transition-colors">
                                <td class="py-3.5 pr-4">
                                    <p class="font-bold text-gray-800 text-sm">Amoxicillin 500mg</p>
                                    <p class="text-[10px] text-gray-400 mt-0.5">Batch: #BCH-9921</p>
                                </td>
                                <td class="py-3.5 px-3">
                                    <span class="bg-emerald-50 text-emerald-600 px-2.5 py-1 rounded-full text-[10px] font-bold inline-flex items-center">
                                        <i class="fa-solid fa-arrow-down text-[8px] mr-1"></i> Masuk
                                    </span>
                                </td>
                                <td class="py-3.5 px-3 font-bold text-gray-800">+200 Box</td>
                                <td class="py-3.5 pl-4 text-right">
                                    <p class="text-gray-700 font-semibold">10:15 WIB</p>
                                    <p class="text-[10px] text-gray-400 mt-0.5">Oleh: {{ session('user_nama', 'Gudang') }}</p>
                                </td>
                            </tr>
                            <tr class="text-xs hover:bg-gray-50/30 transition-colors">
                                <td class="py-3.5 pr-4">
                                    <p class="font-bold text-gray-800 text-sm">Paracetamol Syrup</p>
                                    <p class="text-[10px] text-gray-400 mt-0.5">Batch: #BCH-7812</p>
                                </td>
                                <td class="py-3.5 px-3">
                                    <span class="bg-amber-50 text-amber-600 px-2.5 py-1 rounded-full text-[10px] font-bold inline-flex items-center">
                                        <i class="fa-solid fa-arrow-up text-[8px] mr-1"></i> Keluar
                                    </span>
                                </td>
                                <td class="py-3.5 px-3 font-bold text-gray-800">-50 Botol</td>
                                <td class="py-3.5 pl-4 text-right">
                                    <p class="text-gray-700 font-semibold">09:30 WIB</p>
                                    <p class="text-[10px] text-gray-400 mt-0.5">Unit: Apotek Depan</p>
                                </td>
                            </tr>
                            <tr class="text-xs hover:bg-gray-50/30 transition-colors">
                                <td class="py-3.5 pr-4">
                                    <p class="font-bold text-gray-800 text-sm">Cefadroxil 500mg</p>
                                    <p class="text-[10px] text-gray-400 mt-0.5">Batch: #BCH-1102</p>
                                </td>
                                <td class="py-3.5 px-3">
                                    <span class="bg-emerald-50 text-emerald-600 px-2.5 py-1 rounded-full text-[10px] font-bold inline-flex items-center">
                                        <i class="fa-solid fa-arrow-down text-[8px] mr-1"></i> Masuk
                                    </span>
                                </td>
                                <td class="py-3.5 px-3 font-bold text-gray-800">+150 Box</td>
                                <td class="py-3.5 pl-4 text-right">
                                    <p class="text-gray-700 font-semibold">Kemarin</p>
                                    <p class="text-[10px] text-gray-400 mt-0.5">Supplier: Kimia Farma</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-xs border border-gray-100 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="font-bold text-gray-800 text-base">Peringatan Stok</h3>
                        <p class="text-xs text-gray-400">Daftar item di bawah batas minimum</p>
                    </div>
                    <span class="bg-rose-50 text-rose-600 text-[10px] font-bold px-2 py-0.5 rounded-md">Urgent</span>
                </div>

                <div class="space-y-4 mt-2">
                    <div class="flex items-center justify-between p-3 rounded-2xl bg-gray-50 border border-gray-100">
                        <div class="min-w-0 flex-1 pr-2">
                            <p class="text-xs font-bold text-gray-800 truncate">Insulin Injection Lantus</p>
                            <p class="text-[10px] text-gray-400 mt-0.5">Min. Stok: 20 &bull; Rak A-3</p>
                        </div>
                        <div class="text-right shrink-0">
                            <p class="text-xs font-bold text-rose-600">Sisa 3 Pcs</p>
                            <div class="w-16 bg-gray-200 rounded-full h-1 mt-1.5 overflow-hidden">
                                <div class="bg-rose-500 h-1 rounded-full" style="width: 15%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-3 rounded-2xl bg-gray-50 border border-gray-100">
                        <div class="min-w-0 flex-1 pr-2">
                            <p class="text-xs font-bold text-gray-800 truncate">Mefenamic Acid 500mg</p>
                            <p class="text-[10px] text-gray-400 mt-0.5">Min. Stok: 50 &bull; Rak B-1</p>
                        </div>
                        <div class="text-right shrink-0">
                            <p class="text-xs font-bold text-amber-500">Sisa 12 Box</p>
                            <div class="w-16 bg-gray-200 rounded-full h-1 mt-1.5 overflow-hidden">
                                <div class="bg-amber-500 h-1 rounded-full" style="width: 24%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-3 rounded-2xl bg-gray-50 border border-gray-100">
                        <div class="min-w-0 flex-1 pr-2">
                            <p class="text-xs font-bold text-gray-800 truncate">Metformin HCl 500mg</p>
                            <p class="text-[10px] text-gray-400 mt-0.5">Min. Stok: 40 &bull; Rak B-4</p>
                        </div>
                        <div class="text-right shrink-0">
                            <p class="text-xs font-bold text-amber-500">Sisa 8 Box</p>
                            <div class="w-16 bg-gray-200 rounded-full h-1 mt-1.5 overflow-hidden">
                                <div class="bg-amber-500 h-1 rounded-full" style="width: 20%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="mt-4 w-full bg-[#149387] hover:bg-[#117c72] text-white text-center text-xs font-semibold py-3 rounded-xl transition-colors shadow-xs block">
                <i class="fa-solid fa-square-plus mr-1"></i> Buat Permintaan Supply Baru
            </a>
        </div>
    </div>

    <div class="space-y-4 pt-4">
        <div class="flex justify-between items-center">
            <h3 class="font-bold text-gray-800 text-lg">Today's Article</h3>
            <a href="#" class="text-[#149387] text-xs font-bold flex items-center gap-1 hover:underline">See all <i class="fa-solid fa-chevron-right text-[10px]"></i></a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">
            @php
                $articles = [
                    ['title' => '10 technologies that will transform the global economy by 2025', 'img' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=400&q=80'],
                    ['title' => 'Teknologi Medis Modern dan Arah Baru Ekonomi Kesehatan Dunia', 'img' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&q=80'],
                    ['title' => 'Inovasi Medis sebagai Motor Baru Pertumbuhan Ekonomi Global...', 'img' => 'https://images.unsplash.com/photo-1530026405186-ed1ea0ac7a63?w=400&q=80'],
                    ['title' => 'Revolusi Teknologi Medis dan Dampaknya terhadap Ekon...', 'img' => 'https://images.unsplash.com/photo-1584515933487-75982136b247?w=400&q=80'],
                ];
            @endphp
            @foreach($articles as $art)
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-xs flex flex-col group hover:shadow-md transition-shadow duration-300">
                <div class="h-40 overflow-hidden relative">
                    <img src="{{ $art['img'] }}" alt="Article Image" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4 flex-1 flex flex-col justify-between space-y-3">
                    <div class="space-y-2">
                        <span class="bg-indigo-50 text-indigo-600 px-2.5 py-0.5 rounded-md text-[10px] font-bold">Technology</span>
                        <h4 class="font-bold text-gray-800 text-sm line-clamp-2 leading-snug pt-1">{{ $art['title'] }}</h4>
                    </div>
                    <p class="text-[11px] text-gray-400 line-clamp-2 leading-relaxed">{{ $art['title'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection