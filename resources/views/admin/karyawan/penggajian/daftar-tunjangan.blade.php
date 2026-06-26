@extends($layout)

@section('title', 'Daftar Master Tunjangan')

@section('content')
<div class="space-y-6" x-data="{ modalTunjangan: false }">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-gray-100 pb-2">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Daftar Tunjangan</h1>
            <p class="text-sm text-gray-400 mt-1">Kelola komponen tambahan pendapatan dan bonus karyawan</p>
        </div>
        <button @click="modalTunjangan = true" type="button" class="bg-[#149387] hover:bg-[#117d72] text-white px-4 py-2.5 rounded-xl font-semibold text-sm inline-flex items-center gap-2 transition shadow-xs cursor-pointer ml-auto sm:ml-0">
            <i class="fa-solid fa-plus text-xs"></i> Tambah Tunjangan
        </button>
    </div>

    <div class="bg-white rounded-3xl border border-gray-100 shadow-2xs overflow-hidden">
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/70 border-b border-gray-100 text-gray-400 text-[11px] font-bold tracking-wider uppercase">
                        <th class="px-6 py-4 w-16">No</th>
                        <th class="px-6 py-4">Nama Tunjangan</th>
                        <th class="px-6 py-4">Tipe Tunjangan</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center w-32">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm font-medium text-gray-700">
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 text-gray-400 font-mono text-xs">1</td>
                        <td class="px-6 py-4 font-bold text-gray-900">Bonus Hari Raya (THR)</td>
                        <td class="px-6 py-4"><span class="bg-emerald-50 text-[#149387] px-2.5 py-0.5 rounded-lg text-xs font-bold">Tambahan</span></td>
                        <td class="px-6 py-4"><span class="text-emerald-500 font-bold flex items-center gap-1.5 text-xs"><i class="fa-solid fa-circle text-[8px]"></i>Aktif</span></td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button type="button" class="text-gray-400 hover:text-sky-600 p-1 rounded-lg transition-colors cursor-pointer"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="text-gray-400 hover:text-rose-600 p-1 rounded-lg transition-colors cursor-pointer"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 text-gray-400 font-mono text-xs">2</td>
                        <td class="px-6 py-4 font-bold text-gray-900">Tunjangan Transportasi</td>
                        <td class="px-6 py-4"><span class="bg-emerald-50 text-[#149387] px-2.5 py-0.5 rounded-lg text-xs font-bold">Tambahan</span></td>
                        <td class="px-6 py-4"><span class="text-emerald-500 font-bold flex items-center gap-1.5 text-xs"><i class="fa-solid fa-circle text-[8px]"></i>Aktif</span></td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button type="button" class="text-gray-400 hover:text-sky-600 p-1 rounded-lg transition-colors cursor-pointer"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="text-gray-400 hover:text-rose-600 p-1 rounded-lg transition-colors cursor-pointer"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div x-show="modalTunjangan" class="fixed inset-0 bg-black/40 backdrop-blur-xs flex items-center justify-center z-50 p-4" x-transition style="display: none;">
        <div class="bg-white rounded-3xl w-full max-w-md p-6 shadow-xl space-y-4" @click.outside="modalTunjangan = false">
            <div class="flex justify-between items-center border-b border-gray-50 pb-2">
                <div>
                    <h2 class="text-base font-bold text-gray-900">Tambah Tunjangan Baru</h2>
                    <p class="text-xs text-gray-400 mt-0.5">Definisikan parameter tunjangan master baru</p>
                </div>
                <button @click="modalTunjangan = false" type="button" class="text-gray-400 hover:text-black cursor-pointer"><i class="fa-solid fa-xmark text-base"></i></button>
            </div>
            <form class="space-y-4 text-xs font-semibold" @submit.prevent="modalTunjangan = false">
                <div>
                    <label class="block text-gray-500 mb-1.5">Nama Tunjangan / Komponen</label>
                    <input type="text" placeholder="Contoh: Tunjangan Makan" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm font-medium focus:bg-white focus:outline-none focus:border-[#149387] transition-all">
                </div>
                <div class="relative bg-gray-50 border border-gray-200 rounded-xl px-4 py-2 flex items-center">
                    <div class="w-full">
                        <label class="block text-[10px] text-gray-400 uppercase tracking-wider mb-0.5">Tipe Sifat Komponen</label>
                        <select class="bg-transparent border-none focus:outline-none w-full text-gray-700 font-bold appearance-none pr-4 cursor-pointer">
                            <option>Tambahan (Income Addition)</option>
                            <option>Potongan (Deduction)</option>
                        </select>
                    </div>
                    <i class="fa-solid fa-chevron-down absolute right-4 text-gray-400 text-[10px] pointer-events-none"></i>
                </div>
                <div class="pt-3 border-t border-gray-100 flex gap-3 font-bold">
                    <button type="button" @click="modalTunjangan = false" class="flex-1 border border-gray-200 hover:bg-gray-50 py-2.5 rounded-xl text-xs text-gray-500 transition cursor-pointer text-center">Batal</button>
                    <button type="submit" class="flex-1 bg-[#149387] hover:bg-[#117d72] text-white py-2.5 rounded-xl text-xs transition shadow-sm cursor-pointer text-center">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection