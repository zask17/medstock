@extends($layout)

@section('title', 'Laporan Stok Obat')

@section('content')
<div class="space-y-6">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Laporan Stok</h2>
        <p class="text-sm text-gray-400 mt-1">Pantau sisa kuantitas gudang, harga master, dan ketersediaan kotak obat secara real-time.</p>
    </div>

    <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-xs flex items-center gap-4">
        <div class="relative flex-1">
            <input type="text" placeholder="Cari nama obat atau produsen..." 
                class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-4 pr-12 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
            <i class="fa-solid fa-magnifying-glass absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
        </div>
        <button class="bg-[#149387] hover:bg-[#0f7369] text-white px-5 py-2.5 rounded-xl text-sm font-semibold transition-all shadow-sm cursor-pointer">
            Cari
        </button>
    </div>

    <div class="bg-white rounded-3xl p-6 shadow-xs border border-gray-100">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
            <div class="flex items-center gap-2 text-sm text-gray-500 font-medium">
                <span>Tampilkan hingga</span>
                <select class="bg-gray-50 border border-gray-200 text-gray-600 rounded-xl px-3 py-1.5 text-xs focus:outline-none cursor-pointer">
                    <option>100</option>
                    <option>50</option>
                    <option>10</option>
                </select>
                <span>Entri</span>
            </div>
            <button class="bg-gray-50 hover:bg-gray-100 text-gray-600 border border-gray-200 px-4 py-2 rounded-xl text-xs font-bold flex items-center gap-2 transition-all cursor-pointer">
                <i class="fa-solid fa-download"></i> Ekspor Laporan
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm min-w-[1000px]">
                <thead class="text-gray-400 border-b border-gray-100 text-xs uppercase tracking-wider">
                    <tr>
                        <th class="pb-3 pr-2 font-semibold">Nama Obat</th>
                        <th class="pb-3 px-4 font-semibold">Nama Produsen</th>
                        <th class="pb-3 px-4 font-semibold">Harga Jual</th>
                        <th class="pb-3 px-4 font-semibold">Harga Beli</th>
                        <th class="pb-3 px-4 font-semibold">Kuantitas Masuk</th>
                        <th class="pb-3 px-4 font-semibold">Sisa Stok</th>
                        <th class="pb-3 px-4 font-semibold">Kotak Stok</th>
                        <th class="pb-3 px-4 font-semibold">Harga Jual Kotak</th>
                        <th class="pb-3 pl-4 font-semibold text-right">Harga Beli Kotak</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-gray-600 font-medium">
                    @php
                        $stocks = [
                            ['name' => 'Almex (400ml)', 'supplier' => 'Beximco', 'sale' => '$328.85', 'purchase' => '$105.55', 'in' => 60, 'stock' => 50, 'box' => '08', 'box_sale' => '$948.55', 'box_purchase' => '$328.85'],
                            ['name' => 'Diasulin 10ml', 'supplier' => 'Square', 'sale' => '$202.87', 'purchase' => '$128.85', 'in' => 48, 'stock' => 40, 'box' => '06', 'box_sale' => '$782.01', 'box_purchase' => '$219.78'],
                            ['name' => 'Meloxciam 11mg', 'supplier' => 'ACI', 'sale' => '$105.55', 'purchase' => '$778.35', 'in' => 45, 'stock' => 40, 'box' => '04', 'box_sale' => '$630.44', 'box_purchase' => '$203.45'],
                            ['name' => 'Lignocaine 2%', 'supplier' => 'Mesalazine', 'sale' => '$219.78', 'purchase' => '$202.87', 'in' => 45, 'stock' => 30, 'box' => '04', 'box_sale' => '$396.84', 'box_purchase' => '$601.22'],
                            ['name' => 'Ketoporfen 30g', 'supplier' => 'Beximco', 'sale' => '$106.58', 'purchase' => '$202.87', 'in' => 88, 'stock' => 50, 'box' => '05', 'box_sale' => '$943.65', 'box_purchase' => '$576.28'],
                            ['name' => 'Mefenamic Acid', 'supplier' => 'Alien Pharma', 'sale' => '$106.58', 'purchase' => '$202.87', 'in' => 61, 'stock' => 40, 'box' => '04', 'box_sale' => '$854.08', 'box_purchase' => '$105.55'],
                            ['name' => 'Diclofenac 75', 'supplier' => 'Beximco', 'sale' => '$106.58', 'purchase' => '$202.87', 'in' => 34, 'stock' => 30, 'box' => '05', 'box_sale' => '$475.22', 'box_purchase' => '$475.22'],
                            ['name' => 'Paracetamol 12', 'supplier' => 'Aexim', 'sale' => '$106.58', 'purchase' => '$106.58', 'in' => 54, 'stock' => '09', 'box' => '023', 'box_sale' => '$490.51', 'box_purchase' => '$854.08'],
                            ['name' => 'Tramadol 50mg', 'supplier' => 'Beximco', 'sale' => '$105.55', 'purchase' => '$105.55', 'in' => 123, 'stock' => 100, 'box' => '46', 'box_sale' => '$450.54', 'box_purchase' => '$106.58'],
                            ['name' => 'Diasulin 5ml', 'supplier' => 'Ad-din', 'sale' => '$105.55', 'purchase' => '$475.22', 'in' => 200, 'stock' => 150, 'box' => '87', 'box_sale' => '$782.01', 'box_purchase' => '$779.35'],
                        ];
                    @endphp
                    @foreach ($stocks as $item)
                    <tr class="hover:bg-gray-50/50 transition-all">
                        <td class="py-4 pr-2 font-semibold text-gray-800">{{ $item['name'] }}</td>
                        <td class="py-4 px-4 text-gray-500">{{ $item['supplier'] }}</td>
                        <td class="py-4 px-4 font-bold text-gray-700">{{ $item['sale'] }}</td>
                        <td class="py-4 px-4 text-xs text-gray-400">{{ $item['purchase'] }}</td>
                        <td class="py-4 px-4 font-semibold text-gray-600">{{ $item['in'] }}</td>
                        <td class="py-4 px-4">
                            <span class="px-2 py-1 rounded-md text-xs font-bold {{ $item['stock'] <= 10 ? 'bg-rose-50 text-rose-600' : 'bg-emerald-50 text-emerald-600' }}">
                                {{ $item['stock'] }}
                            </span>
                        </td>
                        <td class="py-4 px-4 text-gray-500 font-mono">{{ $item['box'] }}</td>
                        <td class="py-4 px-4 font-bold text-gray-700">{{ $item['box_sale'] }}</td>
                        <td class="py-4 pl-4 text-right text-xs text-gray-400">{{ $item['box_purchase'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="flex justify-end items-center gap-1 mt-6 text-xs font-semibold text-gray-500">
            <button class="w-7 h-7 bg-gray-50 border border-gray-200 rounded-lg flex items-center justify-center hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-chevron-left text-[10px]"></i></button>
            <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">1</button>
            <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">2</button>
            <button class="w-7 h-7 bg-[#149387] text-white rounded-lg flex items-center justify-center">3</button>
            <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">4</button>
            <span class="px-1 text-gray-300">...</span>
            <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">40</button>
            <button class="w-7 h-7 bg-gray-50 border border-gray-200 rounded-lg flex items-center justify-center hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-chevron-right text-[10px]"></i></button>
        </div>
    </div>
</div>
@endsection