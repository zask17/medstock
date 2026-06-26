@extends($layout)

@section('title', 'Laporan Retur Penjualan')

@section('content')
<div class="space-y-6">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Laporan Retur Penjualan</h2>
        <p class="text-sm text-gray-400 mt-1">Kelola dan tinjau riwayat obat-obatan rusak atau kedaluwarsa yang dikembalikan oleh mitra.</p>
    </div>

    <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-xs flex flex-wrap items-end gap-4">
        <div class="w-full sm:w-auto">
            <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Jenis Retur</label>
            <select class="w-full sm:w-48 bg-gray-50 border border-gray-200 text-gray-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387] cursor-pointer">
                <option>Pilih Salah Satu</option>
                <option>Kerusakan Pabrik</option>
                <option>Kedaluwarsa Berjalan</option>
            </select>
        </div>
        <div class="w-full sm:w-auto">
            <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Nama Produsen / Pemasok</label>
            <select class="w-full sm:w-48 bg-gray-50 border border-gray-200 text-gray-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387] cursor-pointer">
                <option>Pilih Salah Satu</option>
                <option>Square Pharma</option>
                <option>Beximco Pharma</option>
            </select>
        </div>
        <div class="w-full sm:w-auto">
            <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Dari Tanggal</label>
            <div class="relative flex items-center">
                <input type="text" id="start_date" placeholder="Pilih Tanggal Mulai" readonly
                    class="w-full sm:w-48 bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-4 pr-10 py-2.5 text-sm focus:outline-none focus:border-[#149387] cursor-pointer">
                <i class="fa-regular fa-calendar-days absolute right-4 text-gray-400 pointer-events-none"></i>
            </div>
        </div>
        <div class="w-full sm:w-auto">
            <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Hingga Tanggal</label>
            <div class="relative flex items-center">
                <input type="text" id="end_date" placeholder="Pilih Tanggal Selesai" readonly
                    class="w-full sm:w-48 bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-4 pr-10 py-2.5 text-sm focus:outline-none focus:border-[#149387] cursor-pointer">
                <i class="fa-regular fa-calendar-days absolute right-4 text-gray-400 pointer-events-none"></i>
            </div>
        </div>
        <button class="w-full sm:w-auto bg-[#149387] hover:bg-[#0f7369] text-white px-5 py-2.5 rounded-xl text-sm font-semibold transition-all flex items-center justify-center gap-2 cursor-pointer shadow-sm">
            <i class="fa-solid fa-magnifying-glass"></i> Cari Data
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
                <span>Entri</span>
            </div>
            <button class="bg-gray-50 hover:bg-gray-100 text-gray-600 border border-gray-200 px-4 py-2 rounded-xl text-xs font-bold flex items-center gap-2 transition-all cursor-pointer">
                <i class="fa-solid fa-download"></i> Ekspor CSV
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm min-w-[850px]">
                <thead class="text-gray-400 border-b border-gray-100 text-xs uppercase tracking-wider">
                    <tr>
                        <th class="pb-3 pr-4 font-semibold">ID Faktur</th>
                        <th class="pb-3 px-4 font-semibold">Referensi Penjualan</th>
                        <th class="pb-3 px-4 font-semibold">Tanggal Transaksi</th>
                        <th class="pb-3 px-4 font-semibold">Total Hutang</th>
                        <th class="pb-3 px-4 font-semibold">Jumlah Dibayar</th>
                        <th class="pb-3 pl-4 font-semibold text-right">Kembalian / Sisa</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-gray-600 font-medium">
                    @php
                        $returns = [
                            ['id' => '#T-545463544', 'ref' => '#764765765', 'date' => '28 Feb 2022', 'payable' => '$328.85', 'paid' => '$293.01', 'change' => '$169.43'],
                            ['id' => '#T-634783546', 'ref' => '#758943544', 'date' => '01 Mar 2022', 'payable' => '$202.87', 'paid' => '$589.99', 'change' => '$169.43'],
                            ['id' => '#T-7218337248', 'ref' => '#435475445', 'date' => '21 Feb 2022', 'payable' => '$219.78', 'paid' => '$169.43', 'change' => '$100.00'],
                            ['id' => '#T-985786545', 'ref' => '#856476545', 'date' => '21 Feb 2022', 'payable' => '$475.22', 'paid' => '$351.02', 'change' => '$275.43'],
                            ['id' => '#T-988978665', 'ref' => '#834757357', 'date' => '21 Feb 2022', 'payable' => '$275.43', 'paid' => '$396.84', 'change' => '$100.00'],
                            ['id' => '#T-684365743', 'ref' => '#435767564', 'date' => '21 Feb 2022', 'payable' => '$576.28', 'paid' => '$351.02', 'change' => '$100.00'],
                            ['id' => '#T-546374657', 'ref' => '#584768575', 'date' => '21 Feb 2022', 'payable' => '$928.41', 'paid' => '$293.01', 'change' => '$169.43'],
                            ['id' => '#T-294936434', 'ref' => '#658684895', 'date' => '21 Feb 2022', 'payable' => '$943.65', 'paid' => '$105.55', 'change' => '$105.55'],
                            ['id' => '#T-654378564', 'ref' => '#688576554', 'date' => '21 Feb 2022', 'payable' => '$293.01', 'paid' => '$219.78', 'change' => '$105.55'],
                        ];
                    @endphp
                    @foreach ($returns as $ret)
                    <tr class="hover:bg-gray-50/50 transition-all">
                        <td class="py-4 pr-4 font-bold text-gray-800">{{ $ret['id'] }}</td>
                        <td class="py-4 px-4 text-gray-500 font-semibold">{{ $ret['ref'] }}</td>
                        <td class="py-4 px-4 text-xs text-gray-400">{{ $ret['date'] }}</td>
                        <td class="py-4 px-4 text-gray-700 font-bold">{{ $ret['payable'] }}</td>
                        <td class="py-4 px-4 text-emerald-600 font-bold">{{ $ret['paid'] }}</td>
                        <td class="py-4 pl-4 text-right text-rose-500 font-bold">{{ $ret['change'] }}</td>
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