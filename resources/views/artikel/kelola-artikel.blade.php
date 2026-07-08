@extends($layout)

@section('title', 'Kelola Artikel')

@section('content')
    <div class="space-y-6">
        <div class="flex flex-wrap items-center gap-2 border-b border-gray-100 pb-3">
            <a href="{{ route('artikel.index') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Daftar Artikel</a>
            <a href="{{ route('artikel.kelola') }}" class="bg-[#149387] text-white px-4 py-2 rounded-xl text-xs font-bold shadow-xs">Kelola Artikel</a>
            <a href="{{ route('artikel.ledger') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Buku Besar Artikel</a>
        </div>

        <div class="bg-white rounded-3xl border border-gray-100 shadow-xs p-6 space-y-6">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h2 class="text-xl font-bold text-gray-800">Manajemen Konten Artikel</h2>
                    <p class="text-xs text-gray-400 mt-1">Publikasikan, sunting, atau hapus konten artikel edukasi medis.</p>
                </div>
                <button onclick="openModal('modalTambahArtikel')" class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl text-xs font-bold shadow-xs flex items-center gap-2 cursor-pointer transition-all">
                    <i class="fa-solid fa-plus"></i> Buat Artikel Baru
                </button>
            </div>

            <div class="overflow-x-auto border border-gray-100 rounded-2xl">
                <table class="w-full text-left border-collapse text-xs font-semibold text-gray-600 min-w-[700px]">
                    <thead>
                        <tr class="bg-gray-50 text-gray-400 uppercase border-b border-gray-100">
                            <th class="p-4 w-12"><input type="checkbox" class="rounded"></th>
                            <th class="p-4">SI</th>
                            <th class="p-4">Judul Artikel</th>
                            <th class="p-4">Kategori</th>
                            <th class="p-4">Tanggal Rilis</th>
                            <th class="p-4">Status</th>
                            <th class="p-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @for ($i = 1; $i <= 5; $i++)
                            <tr class="hover:bg-gray-50/50">
                                <td class="p-4"><input type="checkbox" class="rounded"></td>
                                <td class="p-4 text-gray-400">{{ $i }}</td>
                                <td class="p-4 font-bold text-gray-800">Edukasi Penggunaan Obatan Farmasi Seri #{{ $i }}</td>
                                <td class="p-4 text-gray-500">Farmasi Klinis</td>
                                <td class="p-4 text-gray-400">28 Feb 2026</td>
                                <td class="p-4"><span class="px-2.5 py-1 bg-emerald-50 text-[#149387] rounded-lg text-xs font-bold">Terbit</span></td>
                                <td class="p-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('artikel.detail-cms', ['id' => $i]) }}" class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-[#149387]"><i class="fa-regular fa-eye"></i></a>
                                        <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-blue-500"><i class="fa-regular fa-pen-to-square"></i></button>
                                        <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-rose-500"><i class="fa-regular fa-trash-can"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection