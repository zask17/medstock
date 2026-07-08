@extends($layout)

@section('title', 'Buku Besar Artikel')

@section('content')
    <div class="space-y-6">
        {{-- <div class="flex flex-wrap items-center gap-2 border-b border-gray-100 pb-3">
            <a href="{{ route('artikel.index') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Daftar Artikel</a>
            <a href="{{ route('artikel.kelola') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Kelola Artikel</a>
            <a href="{{ route('artikel.ledger') }}" class="bg-[#149387] text-white px-4 py-2 rounded-xl text-xs font-bold shadow-xs">Buku Besar Artikel</a>
        </div> --}}

        <div class="bg-white rounded-3xl border border-gray-100 shadow-xs p-6 space-y-6">
            <div>
                <h2 class="text-xl font-bold text-gray-800">Buku Besar Artikel (Article Ledger)</h2>
                <p class="text-xs text-gray-400 mt-1">Rekapitulasi riwayat statistik pembaca, penulis, dan dampak edukasi konten.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-gray-50/50 p-4 rounded-2xl border border-gray-100">
                    <span class="text-xs text-gray-400 font-bold block mb-1">Total Artikel Terbit</span>
                    <span class="text-xl font-black text-gray-800">128 Berkas</span>
                </div>
                <div class="bg-gray-50/50 p-4 rounded-2xl border border-gray-100">
                    <span class="text-xs text-gray-400 font-bold block mb-1">Total Pembaca</span>
                    <span class="text-xl font-black text-[#149387]">14.290 Pembaca</span>
                </div>
                <div class="bg-gray-50/50 p-4 rounded-2xl border border-gray-100">
                    <span class="text-xs text-gray-400 font-bold block mb-1">Kategori Terpopuler</span>
                    <span class="text-xl font-black text-gray-800">Farmasi Klinis</span>
                </div>
            </div>

            <div class="overflow-x-auto border border-gray-100 rounded-2xl">
                <table class="w-full text-left border-collapse text-xs font-semibold text-gray-600 min-w-[700px]">
                    <thead>
                        <tr class="bg-gray-50 text-gray-400 uppercase border-b border-gray-100">
                            <th class="p-4">Kode Ledger</th>
                            <th class="p-4">Judul Artikel</th>
                            <th class="p-4">Penulis (Author)</th>
                            <th class="p-4">Pembaca</th>
                            <th class="p-4 text-right">Tanggal Log</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @for ($k = 1; $k <= 5; $k++)
                            <tr class="hover:bg-gray-50/50">
                                <td class="p-4 font-mono text-gray-400">#LDG-ART-00{{ $k }}</td>
                                <td class="p-4 font-bold text-gray-800">Panduan Edukasi Penggunaan Obat Seri #{{ $k }}</td>
                                <td class="p-4 text-gray-500">Dr. Fitriani (Apoteker)</td>
                                <td class="p-4 font-bold text-[#149387]">1,420 View</td>
                                <td class="p-4 text-right text-gray-400">28 Feb 2026</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection