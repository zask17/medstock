@extends($layout)

@section('title', 'Artikel Kesehatan')

@section('content')
    <div class="space-y-6">
        @if (session('user_role') === 'Admin System')
            {{-- <div class="flex flex-wrap items-center gap-2 border-b border-gray-100 pb-3">
                <a href="{{ route('artikel.index') }}" class="bg-[#149387] text-white px-4 py-2 rounded-xl text-xs font-bold shadow-xs">Daftar Artikel</a>
                <a href="{{ route('artikel.kelola') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Kelola Artikel</a>
                <a href="{{ route('artikel.ledger') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition-all">Buku Besar Artikel</a>
            </div> --}}
        @endif

        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-100 shadow-xs flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="space-y-3 max-w-xl">
                <span class="px-3 py-1 bg-emerald-50 text-[#149387] rounded-lg text-xs font-bold uppercase tracking-wider">Edukasi Farmasi</span>
                <h1 class="text-2xl sm:text-3xl font-black text-gray-800 leading-tight">Wawasan & Informasi Dunia Kesehatan Terkini</h1>
                <p class="text-sm text-gray-400">Dapatkan panduan seputar pengelolaan obat, edukasi klinis apotek, dan tren medis masa kini.</p>
                
                <div class="pt-2 relative max-w-md">
                    <input type="text" placeholder="Cari judul artikel atau topik..." class="w-full bg-gray-50 border border-gray-200 rounded-xl pl-10 pr-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                    <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-5.5 text-gray-400 text-sm"></i>
                </div>
            </div>
            <div class="w-48 sm:w-64">
                <img src="https://picsum.photos/seed/doctor-illustration/480/320" alt="Ilustrasi Kesehatan" class="w-full h-auto object-contain">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $articles = [
                    ['id' => 1, 'title' => 'Edukasi Pasien: Penggunaan Antibiotik Secara Tepat', 'desc' => 'Pentingnya kepatuhan konsumsi obat dan bahaya resistensi mikroba...', 'date' => '28 Feb 2026', 'category' => 'Farmasi Klinis', 'img' => 'https://picsum.photos/seed/article1/640/360'],
                    ['id' => 2, 'title' => 'Standar Manajemen Penyimpanan Obat Risikonya Tinggi', 'desc' => 'Tata cara penyimpanan obat High Alert dan LASA di gudang farmasi...', 'date' => '25 Feb 2026', 'category' => 'Manajemen Gudang', 'img' => 'https://picsum.photos/seed/article2/640/360'],
                    ['id' => 3, 'title' => 'Panduan Konseling Suplemen Bagi Pasien Lansia', 'desc' => 'Interaksi obat dan suplemen yang wajib diwaspadai apoteker...', 'date' => '20 Feb 2026', 'category' => 'Pelayanan', 'img' => 'https://picsum.photos/seed/article3/640/360'],
                ];
            @endphp

            @foreach ($articles as $art)
                <div class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="h-48 overflow-hidden relative">
                            <img src="{{ $art['img'] }}" alt="Cover Artikel" class="w-full h-full object-cover">
                            <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-xs text-[#149387] text-xs font-bold px-3 py-1 rounded-lg">{{ $art['category'] }}</span>
                        </div>
                        <div class="p-5 space-y-2">
                            <span class="text-xs font-semibold text-gray-400"><i class="fa-regular fa-calendar mr-1"></i> {{ $art['date'] }}</span>
                            <h3 class="text-base font-bold text-gray-800 line-clamp-2">{{ $art['title'] }}</h3>
                            <p class="text-xs text-gray-400 font-medium leading-relaxed line-clamp-3">{{ $art['desc'] }}</p>
                        </div>
                    </div>
                    <div class="p-5 pt-0">
                        <a href="{{ route('artikel.detail-cms', ['id' => $art['id']]) }}" class="w-full bg-emerald-50 hover:bg-[#149387] text-[#149387] hover:text-white py-2.5 rounded-xl text-xs font-bold transition-all flex items-center justify-center gap-2 cursor-pointer">
                            Baca Artikel Lengkap <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection