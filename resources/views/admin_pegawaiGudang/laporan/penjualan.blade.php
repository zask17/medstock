@extends($layout)

@section('title', 'Laporan Penjualan')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Laporan Penjualan</h2>
            <p class="text-sm text-gray-400 mt-1">Pantau ringkasan ringkas seluruh transaksi penjualan obat.</p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-xs flex flex-wrap items-end gap-4">
        <div class="w-full sm:w-auto">
            <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Tanggal Mulai</label>
            <div class="relative flex items-center">
                <input type="text" id="start_date" placeholder="Pilih Tanggal Mulai" readonly
                    class="w-full sm:w-64 bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-4 pr-10 py-2.5 text-sm focus:outline-none focus:border-[#149387] cursor-pointer">
                <i class="fa-regular fa-calendar-days absolute right-4 text-gray-400 pointer-events-none"></i>
            </div>
        </div>
        <div class="w-full sm:w-auto">
            <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Tanggal Selesai</label>
            <div class="relative flex items-center">
                <input type="text" id="end_date" placeholder="Pilih Tanggal Selesai" readonly
                    class="w-full sm:w-64 bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-4 pr-10 py-2.5 text-sm focus:outline-none focus:border-[#149387] cursor-pointer">
                <i class="fa-regular fa-calendar-days absolute right-4 text-gray-400 pointer-events-none"></i>
            </div>
        </div>
        <button class="w-full sm:w-auto bg-[#149387] hover:bg-[#0f7369] text-white px-5 py-2.5 rounded-xl text-sm font-semibold transition-all flex items-center justify-center gap-2 cursor-pointer shadow-sm">
            <i class="fa-solid fa-magnifying-glass"></i> Cari
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
                <i class="fa-solid fa-download"></i> Ekspor
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm min-w-[800px]">
                <thead class="text-gray-400 border-b border-gray-100 text-xs uppercase tracking-wider">
                    <tr>
                        <th class="pb-3 pr-2 font-semibold w-12"><input type="checkbox" class="rounded border-gray-300 text-[#149387] focus:ring-[#149387]"> No</th>
                        <th class="pb-3 px-4 font-semibold">No. Faktur</th>
                        <th class="pb-3 px-4 font-semibold">Nama Pelanggan</th>
                        <th class="pb-3 px-4 font-semibold">Tanggal</th>
                        <th class="pb-3 px-4 font-semibold">Total Jumlah</th>
                        <th class="pb-3 pl-4 font-semibold text-right">Dijual Oleh</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-gray-600 font-medium">
                    @php
                        $sales = [
                            ['no' => 1, 'invoice' => '#T-3243545', 'customer' => 'Jane Cooper', 'date' => '21 Feb 2022', 'total' => '$567.00', 'by' => 'Sales man'],
                            ['no' => 2, 'invoice' => '#R-4356464', 'customer' => 'Wade Warren', 'date' => '22 Feb 2022', 'total' => '$667.00', 'by' => 'Sales man'],
                            ['no' => 3, 'invoice' => '#678465454', 'customer' => 'Jenny Wilson', 'date' => '23 Feb 2022', 'total' => '$789.00', 'by' => 'Sales man'],
                            ['no' => 4, 'invoice' => '#634655476', 'customer' => 'Guy Hawkins', 'date' => '24 Feb 2022', 'total' => '$354.00', 'by' => 'Sales man'],
                            ['no' => 5, 'invoice' => '#657465445', 'customer' => 'Robert Fox', 'date' => '25 Feb 2022', 'total' => '$687.00', 'by' => 'Sales man'],
                            ['no' => 6, 'invoice' => '#365463577', 'customer' => 'Jacob Jones', 'date' => '26 Feb 2022', 'total' => '$980.00', 'by' => 'Sales man'],
                            ['no' => 7, 'invoice' => '#435748937', 'customer' => 'Cody Fisher', 'date' => '27 Feb 2022', 'total' => '$878.00', 'by' => 'Sales man'],
                            ['no' => 8, 'invoice' => '#463284633', 'customer' => 'Albert Flores', 'date' => '28 Feb 2022', 'total' => '$546.00', 'by' => 'Sales man'],
                            ['no' => 9, 'invoice' => '#753475454', 'customer' => 'Floyd Miles', 'date' => '29 Feb 2022', 'total' => '$909.00', 'by' => 'Sales man'],
                        ];
                    @endphp
                    @foreach ($sales as $sale)
                    <tr class="hover:bg-gray-50/50 transition-all">
                        <td class="py-4 pr-2"><input type="checkbox" class="rounded border-gray-300 text-[#149387] focus:ring-[#149387]"> {{ $sale['no'] }}</td>
                        <td class="py-4 px-4 font-semibold text-gray-800">{{ $sale['invoice'] }}</td>
                        <td class="py-4 px-4 text-gray-500">{{ $sale['customer'] }}</td>
                        <td class="py-4 px-4 text-xs text-gray-400">{{ $sale['date'] }}</td>
                        <td class="py-4 px-4 font-bold text-gray-700">{{ $sale['total'] }}</td>
                        <td class="py-4 pl-4 text-right text-gray-500">{{ $sale['by'] }}</td>
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