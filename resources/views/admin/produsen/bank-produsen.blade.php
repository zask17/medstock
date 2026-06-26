@extends($layout)

@section('title', 'Manajemen Bank Produsen')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Manajemen Bank Produsen</h2>
            <p class="text-sm text-gray-400 mt-1">Kelola data rekening bank resmi produsen untuk keperluan verifikasi pencairan dana & transaksi restok obat.</p>
        </div>
        <div>
            <button class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-xs flex items-center gap-2 transition-all cursor-pointer">
                <i class="fa-solid fa-link text-xs"></i>
                Tautkan Rekening Baru
            </button>
        </div>
    </div>

    <div class="bg-white rounded-3xl border border-gray-100 shadow-xs p-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
            <div class="relative w-full sm:w-80">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-gray-400">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                </span>
                <input type="text" placeholder="Cari nama produsen atau pemilik rekening..."
                    class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-10 pr-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
            </div>
            <div class="flex items-center gap-2">
                <select class="bg-gray-50 border border-gray-200 text-gray-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387] cursor-pointer">
                    <option>Semua Bank Vendor</option>
                    <option>Bank Mandiri</option>
                    <option>BCA</option>
                    <option>BRI</option>
                    <option>BNI</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-gray-100 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                        <th class="pb-4 pl-2">Produsen</th>
                        <th class="pb-4 px-4">Nama Bank</th>
                        <th class="pb-4 px-4">Nomor Rekening</th>
                        <th class="pb-4 px-4">Nama Pemilik Rekening (Atas Nama)</th>
                        <th class="pb-4 px-4">Kantor Cabang (KCP)</th>
                        <th class="pb-4 pr-2 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm text-gray-600">
                    @php
                        $banks = [
                            ['produsen' => 'PT Kalbe Farma Tbk', 'bank' => 'Bank Mandiri', 'alias' => 'MANDIRI', 'no_rek' => '102-00-0984712-4', 'an' => 'PT Kalbe Farma Corporate', 'cabang' => 'KC Jakarta Jend. Gatot Subroto'],
                            ['produsen' => 'PT Sanbe Farma', 'bank' => 'Bank Central Asia', 'alias' => 'BCA', 'no_rek' => '284-301-9981', 'an' => 'Sanbe Farma Operational', 'cabang' => 'KCU Bandung Dago'],
                            ['produsen' => 'PT Kimia Farma Tbk', 'bank' => 'Bank Rakyat Indonesia', 'alias' => 'BRI', 'no_rek' => '0012-01-000495-30-2', 'an' => 'PT Kimia Farma (Persero)', 'cabang' => 'KC Jakarta Veteran'],
                            ['produsen' => 'PT Dexa Medica', 'bank' => 'Bank Negara Indonesia', 'alias' => 'BNI', 'no_rek' => '009-4829-112', 'an' => 'Dexa Medica Treasury', 'cabang' => 'KCP Palembang Sudirman'],
                            ['produsen' => 'PT Pharos Indonesia', 'bank' => 'Bank Central Asia', 'alias' => 'BCA', 'no_rek' => '035-419-8872', 'an' => 'Pharos Indonesia Finance', 'cabang' => 'KCU Jakarta Kebayoran Baru']
                        ];
                    @endphp

                    @foreach($banks as $b)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="py-4 pl-2">
                            <p class="font-semibold text-gray-800">{{ $b['produsen'] }}</p>
                        </td>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-2.5">
                                <span class="w-9 h-6 flex items-center justify-center rounded text-[10px] font-black tracking-tighter text-white shadow-2xs 
                                    {{ $b['alias'] == 'BCA' ? 'bg-blue-800' : '' }}
                                    {{ $b['alias'] == 'MANDIRI' ? 'bg-blue-500' : '' }}
                                    {{ $b['alias'] == 'BRI' ? 'bg-blue-600' : '' }}
                                    {{ $b['alias'] == 'BNI' ? 'bg-orange-500' : '' }}">
                                    {{ $b['alias'] }}
                                </span>
                                <span class="font-medium text-gray-700">{{ $b['bank'] }}</span>
                            </div>
                        </td>
                        <td class="py-4 px-4 font-mono font-bold text-gray-700 text-xs tracking-wide">
                            {{ $b['no_rek'] }}
                        </td>
                        <td class="py-4 px-4 text-gray-600 uppercase text-xs font-semibold">
                            {{ $b['an'] }}
                        </td>
                        <td class="py-4 px-4 text-gray-400 text-xs font-medium">
                            {{ $b['cabang'] }}
                        </td>
                        <td class="py-4 pr-2 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-[#149387] transition-colors cursor-pointer" title="Edit Akun Bank">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                                <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-rose-500 transition-colors cursor-pointer" title="Putus Tautan">
                                    <i class="fa-solid fa-link-slash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="flex justify-end items-center gap-1 mt-6 text-xs font-semibold text-gray-500">
            <button class="w-7 h-7 bg-gray-50 border border-gray-200 rounded-lg flex items-center justify-center hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-chevron-left text-[10px]"></i></button>
            <button class="w-7 h-7 bg-[#149387] text-white rounded-lg flex items-center justify-center shadow-2xs">1</button>
            <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">2</button>
            <button class="w-7 h-7 bg-gray-50 border border-gray-200 rounded-lg flex items-center justify-center hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-chevron-right text-[10px]"></i></button>
        </div>
    </div>
</div>
@endsection