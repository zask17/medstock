@extends($layout)

@section('title', 'Buat Artikel Baru')

@section('content')
    <div class="space-y-6 max-w-4xl mx-auto">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Buat Artikel Baru</h2>
                <p class="text-sm text-gray-400 mt-1">Publikasikan konten edukasi dan informasi medis terbaru ke dalam sistem.</p>
            </div>
            <a href="{{ route('artikel.kelola') }}" 
                class="bg-gray-100 hover:bg-gray-200 text-gray-600 text-xs font-bold px-4 py-2.5 rounded-xl flex items-center gap-2 transition-all">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>

        <form action="{{ route('artikel.kelola') }}" method="GET" class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-100 shadow-xs space-y-6">
            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Judul Artikel <span class="text-red-500">*</span></label>
                    <input type="text" required placeholder="Masukkan judul artikel yang menarik..." 
                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#149387] font-medium">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Kategori Artikel <span class="text-red-500">*</span></label>
                        <select required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#149387] font-medium cursor-pointer">
                            <option value="">Pilih Kategori</option>
                            <option value="Edukasi Farmasi">Edukasi Farmasi</option>
                            <option value="Farmasi Klinis">Farmasi Klinis</option>
                            <option value="Manajemen Gudang">Manajemen Gudang</option>
                            <option value="Pelayanan">Pelayanan</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Gambar Sampul (Cover Image)</label>
                        <input type="file" accept="image/*" 
                            class="w-full bg-gray-50 border border-gray-200 text-gray-500 text-xs rounded-xl file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-[#149387] file:text-white hover:file:bg-[#117c71] cursor-pointer">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Ringkasan Singkat (Excerpt)</label>
                    <textarea rows="2" placeholder="Tuliskan ringkasan 1-2 kalimat untuk kartu pratinjau..." 
                        class="w-full bg-gray-50 border border-gray-200 rounded-xl p-4 text-sm focus:outline-none focus:border-[#149387] font-medium resize-none"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Isi Konten Artikel <span class="text-red-500">*</span></label>
                    <textarea rows="10" required placeholder="Tuliskan isi artikel lengkap di sini..." 
                        class="w-full bg-gray-50 border border-gray-200 rounded-xl p-4 text-sm focus:outline-none focus:border-[#149387] font-medium"></textarea>
                </div>
            </div>

            <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3">
                <a href="{{ route('artikel.kelola') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-5 py-2.5 rounded-xl text-xs font-bold transition-all">
                    Batal
                </a>
                <button type="submit" class="bg-[#149387] hover:bg-[#117c71] text-white px-6 py-2.5 rounded-xl text-xs font-bold shadow-xs cursor-pointer transition-all">
                    <i class="fa-solid fa-paper-plane mr-1.5"></i> Terbit Artikel
                </button>
            </div>
        </form>
    </div>
@endsection