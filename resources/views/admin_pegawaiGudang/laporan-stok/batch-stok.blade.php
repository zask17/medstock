@extends($layout)

@section('title', 'Laporan Stok Berdasarkan Batch')

@section('content')
<div class="space-y-6">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Laporan Stok ( Per Batch )</h2>
        <p class="text-sm text-gray-400 mt-1">Lacak rincian distribusi per kelompok produksi obat beserta batas tanggal kedaluwarsa amannya.</p>
    </div>

    <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-xs flex items-center gap-4">
        <div class="relative flex-1">
            <input type="text" placeholder="Masukkan ID Batch atau nama produk kesehatan..." 
                class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-4 pr-12 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
            <i class="fa-solid fa-barcode absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-base"></i>
        </div>
        <button class="bg-[#149387] hover:bg-[#0f7369] text-white px-5 py-2.5 rounded-xl text-sm font-semibold transition-all shadow-sm cursor-pointer flex items-center gap-2">
            <i class="fa-solid fa-filter text-xs"></i> Filter Batch
        </button>
    </div>

    <div class="bg-white rounded-3xl p-6 shadow-xs border border-gray-100">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
            <div class="flex items-center gap-2 text-sm text-gray-500 font-medium">
                <span>Tampilkan hingga</span>
                <select class="bg-gray-50 border border-gray-200 text-gray-600 rounded-xl px-3 py-1.5 text-xs focus:outline-none cursor-pointer">
                    <option>100</option>
                    <option>50</option>
                </select>
                <span>Baris data</span>
            </div>
            <button class="bg-gray-50 hover:bg-gray-100 text-gray-600 border border-gray-200 px-4 py-2 rounded-xl text-xs font-bold flex items-center gap-2 transition-all cursor-pointer">
                <i class="fa-solid fa-file-csv"></i> Cetak CSV
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm min-w-[850px]">
                <thead class="text-gray-400 border-b border-gray-100 text-xs uppercase tracking-wider">
                    <tr>
                        <th class="pb-3 pr-4 font-semibold">Nama Obat</th>
                        <th class="pb-3 px-4 font-semibold">Kekuatan Dosis</th>
                        <th class="pb-3 px-4 font-semibold">ID Batch</th>
                        <th class="pb-3 px-4 font-semibold">Tanggal Kedaluwarsa</th>
                        <th class="pb-3 px-4 font-semibold">Kuantitas Masuk</th>
                        <th class="pb-3 px-4 font-semibold">Kuantitas Keluar</th>
                        <th class="pb-3 px-4 font-semibold">Sisa Stok</th>
                        <th class="pb-3 pl-4 font-semibold text-right">Kotak Stok</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-gray-600 font-medium">
                    @php
                        $batches = [
                            ['name' => 'Antiva Pro', 'strength' => '500ml', 'batch' => '8767826', 'expiry' => '12 Feb 2027', 'in' => 200, 'out' => 120, 'stock' => 320, 'box' => 20],
                            ['name' => 'Paracetamol Forte', 'strength' => '650mg', 'batch' => '8767941', 'expiry' => '18 Aug 2028', 'in' => 500, 'out' => 150, 'stock' => 350, 'box' => 35],
                            ['name' => 'Amoxicillin Trihydrate', 'strength' => '250mg', 'batch' => '8768112', 'expiry' => '05 Jan 2027', 'in' => 150, 'out' => 50, 'stock' => 100, 'box' => 10],
                            ['name' => 'Cefixime Oral', 'strength' => '100mg', 'batch' => '8768290', 'expiry' => '22 Oct 2026', 'in' => 300, 'out' => 200, 'stock' => 100, 'box' => 8],
                            ['name' => 'Metformin HCL', 'strength' => '850mg', 'batch' => '8768415', 'expiry' => '14 Mar 2029', 'in' => 450, 'out' => 250, 'stock' => 200, 'box' => 15],
                            ['name' => 'Atorvastatin Calcium', 'strength' => '20mg', 'batch' => '8768599', 'expiry' => '30 Nov 2027', 'in' => 250, 'out' => 90, 'stock' => 160, 'box' => 16],
                            ['name' => 'Omeprazole Caps', 'strength' => '20mg', 'batch' => '8768704', 'expiry' => '09 Jul 2028', 'in' => 600, 'out' => 400, 'stock' => 200, 'box' => 20],
                            ['name' => 'Losartan Potassium', 'strength' => '50mg', 'batch' => '8768912', 'expiry' => '11 May 2027', 'in' => 180, 'out' => 80, 'stock' => 100, 'box' => 10],
                            ['name' => 'Azithromycin Eco', 'strength' => '500mg', 'batch' => '8769123', 'expiry' => '17 Sep 2026', 'in' => 400, 'out' => 120, 'stock' => 280, 'box' => 25],
                            ['name' => 'Amlodipine Besylate', 'strength' => '5mg', 'batch' => '8769350', 'expiry' => '24 Feb 2028', 'in' => 350, 'out' => 150, 'stock' => 200, 'box' => 18],
                        ];
                    @endphp
                    @foreach ($batches as $batch)
                    <tr class="hover:bg-gray-50/50 transition-all">
                        <td class="py-4 pr-4 font-semibold text-gray-800">{{ $batch['name'] }}</td>
                        <td class="py-4 px-4 text-xs font-bold text-[#149387] bg-[#149387]/5 rounded-xl inline-block mt-3">{{ $batch['strength'] }}</td>
                        <td class="py-4 px-4 font-mono text-gray-500 tracking-wide">{{ $batch['batch'] }}</td>
                        <td class="py-4 px-4 text-xs text-gray-400">{{ $batch['expiry'] }}</td>
                        <td class="py-4 px-4 font-semibold text-gray-600">{{ $batch['in'] }}</td>
                        <td class="py-4 px-4 text-gray-500">{{ $batch['out'] }}</td>
                        <td class="py-4 px-4 font-bold text-gray-700">{{ $batch['stock'] }}</td>
                        <td class="py-4 pl-4 text-right text-gray-500 font-bold">{{ $batch['box'] }}</td>
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
            <span class="px-1 text-gray-300">...</span>
            <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">40</button>
            <button class="w-7 h-7 bg-gray-50 border border-gray-200 rounded-lg flex items-center justify-center hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-chevron-right text-[10px]"></i></button>
        </div>
    </div>
</div>
@endsection