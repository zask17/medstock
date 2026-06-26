@extends($layout)

@section('title', 'Tambah Karyawan Baru')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between border-b border-gray-100 pb-2">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Tambah Karyawan</h1>
            <p class="text-sm text-gray-400 mt-1">Tambahkan berkas profil penugasan karyawan ke dalam pangkalan data</p>
        </div>
        <a href="{{ route('admin.karyawan.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-gray-500 hover:text-gray-800 transition cursor-pointer">
            <i class="fa-solid fa-chevron-left"></i> Kembali ke Daftar
        </a>
    </div>

    <form class="bg-white p-8 rounded-3xl border border-gray-100 shadow-2xs space-y-6">
        <div>
            <label class="block text-sm font-bold text-gray-800 mb-3">Pilih Peran / Jabatan Karyawan</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <label class="border-2 border-[#149387] bg-emerald-50/10 p-4 rounded-2xl cursor-pointer flex items-start gap-3 relative transition">
                    <input type="radio" name="jabatan" value="admin" checked class="mt-1 accent-[#149387]">
                    <div>
                        <p class="text-sm font-bold text-gray-900">Admin</p>
                        <p class="text-[11px] text-gray-400 font-medium mt-1 leading-normal">Pemilik bisnis atau manajemen puncak yang mengontrol seluruh hak akses operasional.</p>
                    </div>
                </label>

                <label class="border border-gray-100 hover:border-gray-200 p-4 rounded-2xl cursor-pointer flex items-start gap-3 relative transition">
                    <input type="radio" name="jabatan" value="gudang" class="mt-1 accent-[#149387]">
                    <div>
                        <p class="text-sm font-bold text-gray-900">Pegawai Gudang</p>
                        <p class="text-[11px] text-gray-400 font-medium mt-1 leading-normal">Bertanggung jawab penuh atas penanganan logistik gudang utama dan stok fisik.</p>
                    </div>
                </label>

                <label class="border border-gray-100 hover:border-gray-200 p-4 rounded-2xl cursor-pointer flex items-start gap-3 relative transition">
                    <input type="radio" name="jabatan" value="apoteker" class="mt-1 accent-[#149387]">
                    <div>
                        <p class="text-sm font-bold text-gray-900">Apoteker</p>
                        <p class="text-[11px] text-gray-400 font-medium mt-1 leading-normal">Melakukan penanganan klinis resep, dispensing obat, dan kontrol kedaluwarsa.</p>
                    </div>
                </label>

                <label class="border border-gray-100 hover:border-gray-200 p-4 rounded-2xl cursor-pointer flex items-start gap-3 relative transition">
                    <input type="radio" name="jabatan" value="asisten" class="mt-1 accent-[#149387]">
                    <div>
                        <p class="text-sm font-bold text-gray-900">Asisten Apoteker</p>
                        <p class="text-[11px] text-gray-400 font-medium mt-1 leading-normal">Membantu transaksi pelayanan kasir dan sediaan farmasi di bagian pelayanan depan.</p>
                    </div>
                </label>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs font-semibold">
            <div>
                <label class="block text-gray-500 uppercase tracking-wider mb-2">Nama Lengkap</label>
                <input type="text" placeholder="Thomas Flecture" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 font-medium focus:bg-white focus:border-[#149387] focus:outline-none transition">
            </div>
            <div>
                <label class="block text-gray-500 uppercase tracking-wider mb-2">Nomor Telepon</label>
                <input type="text" placeholder="(406) 555-0120" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 font-medium focus:bg-white focus:border-[#149387] focus:outline-none transition">
            </div>
            <div>
                <label class="block text-gray-500 uppercase tracking-wider mb-2">Alamat Email</label>
                <input type="email" placeholder="karyawan@medstock.com" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 font-medium focus:bg-white focus:border-[#149387] focus:outline-none transition">
            </div>

            <div>
                <label class="block text-gray-500 uppercase tracking-wider mb-2">Tanggal Lahir</label>
                <div class="relative bg-gray-50 border border-gray-100 rounded-xl px-4 py-2 flex items-center">
                    <input type="text" placeholder="12 Feb 2000" class="bg-transparent border-none focus:outline-none w-full font-medium text-gray-700">
                    <i class="fa-regular fa-calendar text-gray-400 absolute right-4"></i>
                </div>
            </div>
            <div>
                <label class="block text-gray-500 uppercase tracking-wider mb-2">Gaji Per Jam (Rp)</label>
                <input type="text" placeholder="Rp 35.000" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 font-medium focus:bg-white focus:border-[#149387] focus:outline-none transition">
            </div>
            <div class="relative bg-gray-50 border border-gray-100 rounded-xl px-4 py-2 flex items-center">
                <div class="w-full">
                    <label class="block text-[10px] text-gray-400 uppercase tracking-wider mb-0.5">Tipe Skema Gaji</label>
                    <select class="bg-transparent border-none focus:outline-none w-full text-gray-700 font-bold appearance-none pr-4 cursor-pointer">
                        <option>Bulanan (Salary)</option>
                        <option>Waktu Per Jam (Hourly)</option>
                    </select>
                </div>
                <i class="fa-solid fa-chevron-down absolute right-4 text-gray-400 text-[10px] pointer-events-none"></i>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs font-semibold pt-4 border-t border-gray-50">
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-500 uppercase tracking-wider mb-2">Unggah Foto Karyawan</label>
                    <input type="file" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2 text-gray-400 focus:outline-none text-xs">
                </div>
                <div>
                    <p class="block text-gray-500 uppercase tracking-wider mb-2">Pratinjau Foto</p>
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=120" alt="Pratinjau" class="w-24 h-24 rounded-2xl object-cover border border-gray-100 shadow-inner">
                </div>
            </div>

            <div class="md:col-span-2 space-y-4">
                <div>
                    <label class="block text-gray-500 uppercase tracking-wider mb-2">Alamat Rumah Baris 1</label>
                    <input type="text" placeholder="Masukkan alamat lengkap rumah tinggal asli..." class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-2.5 font-medium focus:bg-white focus:border-[#149387] focus:outline-none transition">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <span class="block text-gray-500 uppercase tracking-wider mb-2">Status Penugasan Kerja</span>
                        <div class="flex items-center gap-4 mt-2 font-bold text-sm">
                            <label class="flex items-center gap-2 text-gray-700 cursor-pointer"><input type="radio" name="status" checked class="accent-[#149387]"> Aktif</label>
                            <label class="flex items-center gap-2 text-gray-400 cursor-pointer"><input type="radio" name="status" class="accent-[#149387]"> Nonaktif</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-4 border-t border-gray-100 flex justify-end">
            <button type="submit" class="bg-[#149387] hover:bg-[#117d72] text-white px-6 py-2.5 rounded-xl font-bold text-sm transition shadow-sm cursor-pointer">
                Simpan Berkas Karyawan
            </button>
        </div>
    </form>
</div>
@endsection