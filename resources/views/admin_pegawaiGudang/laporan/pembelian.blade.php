@extends($layout)

@section('title', 'Laporan Pembelian Restok')

@section('content')
<div class="space-y-6">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Laporan Pembelian Pemasok</h2>
        <p class="text-sm text-gray-400 mt-1">Rekap data transaksi keluar untuk penyediaan stok gudang apotek.</p>
    </div>

    <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-xs flex flex-wrap items-end gap-4">
        <div class="w-full sm:w-auto">
            <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Mulai Dari</label>
            <div class="relative flex items-center">
                <input type="text" id="start_date" placeholder="Pilih Tanggal Mulai" readonly
                    class="w-full sm:w-64 bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-4 pr-10 py-2.5 text-sm focus:outline-none focus:border-[#149387] cursor-pointer">
                <i class="fa-regular fa-calendar-days absolute right-4 text-gray-400 pointer-events-none"></i>
            </div>
        </div>
        <div class="w-full sm:w-auto">
            <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Hingga Tanggal</label>
            <div class="relative flex items-center">
                <input type="text" id="end_date" placeholder="Pilih Tanggal Selesai" readonly
                    class="w-full sm:w-64 bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-4 pr-10 py-2.5 text-sm focus:outline-none focus:border-[#149387] cursor-pointer">
                <i class="fa-regular fa-calendar-days absolute right-4 text-gray-400 pointer-events-none"></i>
            </div>
        </div>
        <button class="w-full sm:w-auto bg-[#149387] hover:bg-[#0f7369] text-white px-5 py-2.5 rounded-xl text-sm font-semibold transition-all flex items-center justify-center gap-2 cursor-pointer shadow-sm">
            <i class="fa-solid fa-filter"></i> Saring Log
        </button>
    </div>

    <div class="bg-white rounded-3xl p-6 shadow-xs border border-gray-100">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
            <div class="flex items-center gap-2 text-sm text-gray-500 font-medium">
                <span>Tampilkan</span>
                <select class="bg-gray-50 border border-gray-200 text-gray-600 rounded-xl px-3 py-1.5 text-xs focus:outline-none cursor-pointer">
                    <option>100</option>
                    <option>25</option>
                </select>
                <span>Baris data</span>
            </div>
            <button class="bg-gray-50 hover:bg-gray-100 text-gray-600 border border-gray-200 px-4 py-2 rounded-xl text-xs font-bold flex items-center gap-2 transition-all cursor-pointer">
                <i class="fa-solid fa-file-excel"></i> Ekspor Excel
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm min-w-[850px]">
                <thead class="text-gray-400 border-b border-gray-100 text-xs uppercase tracking-wider">
                    <tr>
                        <th class="pb-3 pr-2 font-semibold w-12"><input type="checkbox" class="rounded border-gray-300 text-[#149387] focus:ring-[#149387]"> No</th>
                        <th class="pb-3 px-4 font-semibold">No. Faktur</th>
                        <th class="pb-3 px-4 font-semibold">ID Pembelian</th>
                        <th class="pb-3 px-4 font-semibold">Nama Produsen</th>
                        <th class="pb-3 px-4 font-semibold">Tanggal</th>
                        <th class="pb-3 px-4 font-semibold">Total Nominal</th>
                        <th class="pb-3 pl-4 font-semibold text-right">Dibuat Oleh</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-gray-600 font-medium">
                    @php
                        $purchases = [
                            ['invoice' => '236167532676367', 'purchase_id' => 'TR26367634', 'supplier' => 'Square Pharma', 'date' => '21 Feb 2022', 'amount' => '$345.00', 'role' => 'Admin', 'badge' => 'bg-indigo-50 text-indigo-600'],
                            ['invoice' => '236167532676388', 'purchase_id' => 'TR26367655', 'supplier' => 'Beximco Pharma', 'date' => '22 Feb 2022', 'amount' => '$520.50', 'role' => 'Gudang', 'badge' => 'bg-amber-50 text-amber-600'],
                            ['invoice' => '236167532676401', 'purchase_id' => 'TR26367690', 'supplier' => 'Incepta Pharma', 'date' => '24 Feb 2022', 'amount' => '$1,250.00', 'role' => 'Admin', 'badge' => 'bg-indigo-50 text-indigo-600'],
                            ['invoice' => '236167532676442', 'purchase_id' => 'TR26367712', 'supplier' => 'Renata Limited', 'date' => '25 Feb 2022', 'amount' => '$410.00', 'role' => 'Gudang', 'badge' => 'bg-amber-50 text-amber-600'],
                            ['invoice' => '236167532676495', 'purchase_id' => 'TR26367740', 'supplier' => 'Square Pharma', 'date' => '25 Feb 2022', 'amount' => '$895.00', 'role' => 'Admin', 'badge' => 'bg-indigo-50 text-indigo-600'],
                            ['invoice' => '236167532676512', 'purchase_id' => 'TR26367802', 'supplier' => 'Acme Laboratories', 'date' => '27 Feb 2022', 'amount' => '$630.75', 'role' => 'Gudang', 'badge' => 'bg-amber-50 text-amber-600'],
                            ['invoice' => '236167532676550', 'purchase_id' => 'TR26367833', 'supplier' => 'Beximco Pharma', 'date' => '28 Feb 2022', 'amount' => '$215.00', 'role' => 'Gudang', 'badge' => 'bg-amber-50 text-amber-600'],
                            ['invoice' => '236167532676604', 'purchase_id' => 'TR26367911', 'supplier' => 'Incepta Pharma', 'date' => '01 Mar 2022', 'amount' => '$1,050.00', 'role' => 'Admin', 'badge' => 'bg-indigo-50 text-indigo-600'],
                        ];
                    @endphp

                    @foreach ($purchases as $index => $item)
                    <tr class="hover:bg-gray-50/50 transition-all">
                        <td class="py-4 pr-2">
                            <input type="checkbox" class="rounded border-gray-300 text-[#149387] focus:ring-[#149387]"> 
                            {{ $index + 1 }}
                        </td>
                        <td class="py-4 px-4 font-semibold text-gray-500">{{ $item['invoice'] }}</td>
                        <td class="py-4 px-4 font-bold text-gray-800 uppercase tracking-wider">{{ $item['purchase_id'] }}</td>
                        <td class="py-4 px-4 text-gray-700">{{ $item['supplier'] }}</td>
                        <td class="py-4 px-4 text-xs text-gray-400">{{ $item['date'] }}</td>
                        <td class="py-4 px-4 font-bold text-gray-800">{{ $item['amount'] }}</td>
                        <td class="py-4 pl-4 text-right">
                            <span class="{{ $item['badge'] }} px-3 py-1 rounded-full text-xs font-bold shadow-2xs">
                                {{ $item['role'] }}
                            </span>
                        </td>
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const startPicker = flatpickr("#start_date", {
            locale: "id",
            enableTime: true,
            dateFormat: "d M, Y - H:i",
            time_24hr: true,
            defaultDate: "2022-06-28 10:00",
            onChange: function(selectedDates, dateStr, instance) {
                endPicker.set("minDate", selectedDates[0]);
            }
        });

        const endPicker = flatpickr("#end_date", {
            locale: "id",
            enableTime: true,
            dateFormat: "d M, Y - H:i",
            time_24hr: true,
            defaultDate: "2022-06-30 10:00",
            onChange: function(selectedDates, dateStr, instance) {
                startPicker.set("maxDate", selectedDates[0]);
            }
        });
    });
</script>
@endsection