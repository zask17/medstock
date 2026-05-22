@extends('layouts.apoteker.main')

@section('title', 'Dasbor Apoteker')

@section('content')
<div class="space-y-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 sm:gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-xs border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-sm font-medium">Total Pelanggan</p>
                <h3 class="text-3xl font-bold text-gray-800 mt-1">120</h3>
                <a href="#" class="text-[#149387] text-xs font-semibold mt-3 block hover:underline">Lihat Detail</a>
            </div>
            <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-full flex items-center justify-center text-xl"><i class="fa-solid fa-users"></i></div>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-xs border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-sm font-medium">Total Penjualan</p>
                <h3 class="text-3xl font-bold text-gray-800 mt-1">234</h3>
                <a href="#" class="text-[#149387] text-xs font-semibold mt-3 block hover:underline">Lihat Detail</a>
            </div>
            <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-full flex items-center justify-center text-xl"><i class="fa-solid fa-cart-shopping"></i></div>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-xs border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-sm font-medium">Total Laba</p>
                <h3 class="text-3xl font-bold text-gray-800 mt-1">$456</h3>
                <a href="#" class="text-[#149387] text-xs font-semibold mt-3 block hover:underline">Lihat Detail</a>
            </div>
            <div class="w-14 h-14 bg-amber-50 text-amber-500 rounded-full flex items-center justify-center text-xl"><i class="fa-solid fa-wallet"></i></div>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-xs border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-sm font-medium">Habis Terjual</p>
                <h3 class="text-3xl font-bold text-gray-800 mt-1">56</h3>
                <a href="#" class="text-[#149387] text-xs font-semibold mt-3 block hover:underline">Lihat Detail</a>
            </div>
            <div class="w-14 h-14 bg-rose-50 text-rose-500 rounded-full flex items-center justify-center text-xl"><i class="fa-solid fa-box-open"></i></div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-3xl p-6 shadow-xs border border-gray-100">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-gray-800 text-lg">Daftar Kedaluwarsa</h3>
                <a href="#" class="text-[#149387] text-xs font-bold flex items-center gap-1 hover:underline">Lihat Semua <i class="fa-solid fa-chevron-right text-[10px]"></i></a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm min-w-[500px]">
                    <thead class="text-gray-400 border-b border-gray-100 text-xs">
                        <tr>
                            <th class="pb-3 pr-2 font-medium">Nama Obat <i class="fa-solid fa-arrows-up-down text-[9px] ml-0.5"></i></th>
                            <th class="pb-3 px-2 font-medium">Tanggal Kadaluarsa <i class="fa-solid fa-arrows-up-down text-[9px] ml-0.5"></i></th>
                            <th class="pb-3 px-2 font-medium">Jumlah <i class="fa-solid fa-arrows-up-down text-[9px] ml-0.5"></i></th>
                            <th class="pb-3 px-2 font-medium">Grafik <i class="fa-solid fa-arrows-up-down text-[9px] ml-0.5"></i></th>
                            <th class="pb-3 pl-2 font-medium text-right">Kembalikan <i class="fa-solid fa-arrows-up-down text-[9px] ml-0.5"></i></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50 text-gray-600">
                        @foreach (['Doxycycline', 'Abetis', 'Diasulin 10ml', 'Diasulin 10ml ', 'Diasulin 10ml  '] as $name)
                        <tr class="hover:bg-gray-50/50 transition-all text-sm">
                            <td class="py-4 pr-2 font-semibold text-gray-800">{{ trim($name) }}</td>
                            <td class="py-4 px-2 text-xs text-gray-500">24 Dec 2021</td>
                            <td class="py-4 px-2 font-medium">40</td>
                            <td class="py-4 px-2 text-emerald-500">
                                <svg class="w-12 h-5" viewBox="0 0 50 20" fill="none"><path d="M2 15 L12 8 L25 14 L38 4 L48 12" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </td>
                            <td class="py-4 pl-2 text-right text-gray-300"><button class="hover:text-gray-500"><i class="fa-solid fa-arrow-rotate-left text-xs"></i></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-xs border border-gray-100">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-gray-800 text-lg">Pesanan Terbaru</h3>
                <a href="#" class="text-[#149387] text-xs font-bold flex items-center gap-1 hover:underline">Lihat Semua <i class="fa-solid fa-chevron-right text-[10px]"></i></a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm min-w-[500px]">
                    <thead class="text-gray-400 border-b border-gray-100 text-xs">
                        <tr>
                            <th class="pb-3 pr-4 font-medium">Nama Obat <i class="fa-solid fa-arrows-up-down text-[9px] ml-0.5"></i></th>
                            <th class="pb-3 px-3 font-medium">No Batch <i class="fa-solid fa-arrows-up-down text-[9px] ml-0.5"></i></th>
                            <th class="pb-3 px-3 font-medium">Jumlah <i class="fa-solid fa-arrows-up-down text-[9px] ml-0.5"></i></th>
                            <th class="pb-3 px-3 font-medium">Status <i class="fa-solid fa-arrows-up-down text-[9px] ml-0.5"></i></th>
                            <th class="pb-3 pl-4 font-medium text-right">Harga <i class="fa-solid fa-arrows-up-down text-[9px] ml-0.5"></i></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50 text-gray-600">
                        @php
                            $orders = [
                                ['name' => 'Paricel 15mg', 'batch' => '783627834', 'qty' => 40, 'status' => 'Delivered', 'price' => '$23.00'],
                                ['name' => 'Abetis 20mg', 'batch' => '88832433', 'qty' => 40, 'status' => 'Pending', 'price' => '$23.00'],
                                ['name' => 'Cerox CV', 'batch' => '767676344', 'qty' => 40, 'status' => 'Cancelled', 'price' => '$23.00'],
                                ['name' => 'Abetis 20mg', 'batch' => '45578866', 'qty' => 40, 'status' => 'Delivered', 'price' => '$23.00'],
                                ['name' => 'Cerox CV ', 'batch' => '767676344', 'qty' => 40, 'status' => 'Cancelled', 'price' => '$23.00'],
                            ];
                        @endphp
                        @foreach ($orders as $order)
                        <tr class="hover:bg-gray-50/50 transition-all text-sm">
                            <td class="py-4 pr-4 font-semibold text-gray-800">{{ $order['name'] }}</td>
                            <td class="py-4 px-3 text-xs text-gray-500">{{ $order['batch'] }}</td>
                            <td class="py-4 px-3 font-medium">{{ $order['qty'] }}</td>
                            <td class="py-4 px-3">
                                @if($order['status'] === 'Delivered')
                                    <span class="bg-indigo-50 text-indigo-600 px-2.5 py-1 rounded-md text-[10px] font-bold">Terkirim</span>
                                @elseif($order['status'] === 'Pending')
                                    <span class="bg-amber-50 text-amber-500 px-2.5 py-1 rounded-md text-[10px] font-bold">Tertunda</span>
                                @else
                                    <span class="bg-rose-50 text-rose-500 px-2.5 py-1 rounded-md text-[10px] font-bold">Dibatalkan</span>
                                @endif
                            </td>
                            <td class="py-4 pl-4 font-bold text-gray-700 text-right">{{ $order['price'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        <div class="bg-white rounded-3xl p-6 shadow-xs border border-gray-100 xl:col-span-2">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-bold text-gray-800 text-lg">Progres Bulanan</h3>
                <select class="bg-gray-50 border border-gray-200 text-gray-500 rounded-xl px-3 py-1.5 text-xs focus:outline-none cursor-pointer">
                    <option>Bulanan</option>
                    <option>Mingguan</option>
                </select>
            </div>
            <div class="h-64">
                <canvas id="monthlyChart"></canvas>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-xs border border-gray-100">
            <h3 class="font-bold text-gray-800 text-lg mb-2">Laporan Hari Ini</h3>
            <div class="relative flex flex-col items-center justify-center">
                <div class="w-48 h-48">
                    <canvas id="todaysReportChart"></canvas>
                </div>
                <div class="absolute top-[34%] text-center">
                    <p class="text-xs text-gray-400 font-medium">Total Pendapatan</p>
                    <p class="text-xl font-bold text-gray-800">$5098.00</p>
                    <p class="text-emerald-500 text-[10px] font-bold"><i class="fa-solid fa-arrow-up"></i> 35%</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-2 text-xs mt-4 pl-4 text-gray-500 font-semibold">
                <div class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-rose-500"></span> Total Pembelian</div>
                <div class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-amber-400"></span> Kas Diterima</div>
                <div class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-indigo-600"></span> Bank Diterima</div>
                <div class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Total Layanan</div>
            </div>
        </div>
    </div>

    <div class="space-y-4">
        <div class="flex justify-between items-center">
            <h3 class="font-bold text-gray-800 text-lg">Artikel Hari Ini</h3>
            <a href="#" class="text-[#149387] text-xs font-bold flex items-center gap-1 hover:underline">Lihat semua <i class="fa-solid fa-chevron-right text-[10px]"></i></a>
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
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-xs flex flex-col group hover:shadow-md transition-shadow">
                <div class="h-40 overflow-hidden relative">
                    <img src="{{ $art['img'] }}" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4 flex-1 flex flex-col justify-between space-y-3">
                    <div class="space-y-2">
                        <span class="bg-indigo-50 text-indigo-600 px-2.5 py-0.5 rounded-md text-[10px] font-bold">Teknologi</span>
                        <h4 class="font-bold text-gray-800 text-sm line-clamp-2 leading-snug pt-1">{{ $art['title'] }}</h4>
                    </div>
                    <p class="text-[11px] text-gray-400 line-clamp-2 leading-relaxed">{{ $art['title'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // --- 1. CONFIG GRAPH BAR (MONTHLY PROGRESS) ---
        const ctxBar = document.getElementById('monthlyChart').getContext('2d');
        const monthlyData = [75, 48, 55, 82, 18, 48, 85, 95, 52, 72, 50, 30];
        const barBackgrounds = monthlyData.map((val, index) => index === 7 ? '#1e1e1e' : '#54cb98');

        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    data: monthlyData,
                    backgroundColor: barBackgrounds,
                    borderRadius: 6,
                    borderSkipped: false,
                    barThickness: 12
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    x: { grid: { display: false }, border: { display: false }, ticks: { color: '#9ca3af', font: { size: 11 } } },
                    y: { min: 0, max: 120, border: { display: false }, ticks: { stepSize: 30, color: '#9ca3af', font: { size: 11 } } }
                }
            }
        });

        // --- 2. CONFIG GRAPH RADIAL LINGKARAN (TODAY'S REPORT) ---
        const ctxRadial = document.getElementById('todaysReportChart').getContext('2d');
        new Chart(ctxRadial, {
            type: 'doughnut',
            data: {
                datasets: [
                    { data: [80, 20], backgroundColor: ['#f43f5e', '#f3f4f6'], weight: 0.4, borderRadius: 10 },
                    { data: [70, 30], backgroundColor: ['#fbbf24', '#f3f4f6'], weight: 0.4, borderRadius: 10 },
                    { data: [60, 40], backgroundColor: ['#4f46e5', '#f3f4f6'], weight: 0.4, borderRadius: 10 },
                    { data: [50, 50], backgroundColor: ['#10b981', '#f3f4f6'], weight: 0.4, borderRadius: 10 }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '60%',
                spacing: 4,
                plugins: { tooltip: { enabled: false } }
            }
        });
    });
</script>
@endsection