@extends($layout)

@section('title', 'Daftar Penagihan Faktur Piutang')

@section('content')
<div class="space-y-6" x-data="{ modalTagihan: false }">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Manajemen Penagihan Piutang</h1>
            <p class="text-sm text-gray-400 mt-1">Faktur Kredit & Termin Tempo Pelanggan / Instansi</p>
        </div>
        <button @click="modalTagihan = true" class="bg-[#149387] hover:bg-[#117d72] text-white font-semibold text-sm py-2.5 px-4 rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer ml-auto md:ml-0">
            <i class="fa-solid fa-plus"></i> Pencatatan Pembayaran
        </button>
    </div>

    <div class="bg-white rounded-3xl border border-gray-100 shadow-2xs overflow-hidden">
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/70 border-b border-gray-100 text-gray-400 text-[11px] font-bold tracking-wider uppercase">
                        <th class="px-6 py-4 w-12">No</th>
                        <th class="px-6 py-4">No. Dokumen</th>
                        <th class="px-6 py-4">Faktur Asal</th>
                        <th class="px-6 py-4">Nama Pihak Kedua</th>
                        <th class="px-6 py-4">Sisa Piutang</th>
                        <th class="px-6 py-4">Jatuh Tempo</th>
                        <th class="px-6 py-4">Status Tagihan</th>
                        <th class="px-6 py-4 text-center w-24">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm font-medium">
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 text-gray-400 text-xs">1</td>
                        <td class="px-6 py-4 font-bold text-gray-900">BILL-0092383</td>
                        <td class="px-6 py-4 text-gray-500 font-mono text-xs">INV/20260611/092</td>
                        <td class="px-6 py-4 text-slate-800">Klinik Sehat Bersama</td>
                        <td class="px-6 py-4 font-extrabold text-rose-500">Rp 4.500.000</td>
                        <td class="px-6 py-4 text-gray-400 text-xs">12 Jul 2026</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-amber-50 text-amber-600">Belum Lunas</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button @click="modalTagihan = true" class="text-[#149387] hover:bg-emerald-50 text-xs font-bold py-1 px-2.5 rounded-lg border border-emerald-100 transition-colors cursor-pointer">Bayar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div x-show="modalTagihan" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4" x-transition>
        <div class="bg-white w-full max-w-lg rounded-3xl p-6 shadow-xl space-y-5" @click.outside="modalTagihan = false">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="font-bold text-gray-900 text-lg">Konfirmasi Pembayaran Piutang</h3>
                    <p class="text-xs text-gray-400 mt-0.5">Catat cicilan atau pelunasan tagihan pelanggan</p>
                </div>
                <button @click="modalTagihan = false" class="text-gray-400 hover:text-black cursor-pointer"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm font-medium">
                <div><label class="block text-xs font-bold text-gray-400 uppercase tracking-wide mb-1.5">Nama Kontak Pihak Kedua</label><input type="text" readonly value="Klinik Sehat Bersama" class="w-full bg-gray-100 border border-transparent rounded-xl p-2.5 font-bold text-gray-800"></div>
                <div><label class="block text-xs font-bold text-gray-400 uppercase tracking-wide mb-1.5">Tanggal Pembayaran</label><input type="date" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-2.5 text-gray-700 focus:outline-none focus:border-[#149387]"></div>
                <div><label class="block text-xs font-bold text-gray-400 uppercase tracking-wide mb-1.5">Kode Unik Bill</label><input type="text" readonly value="#BILL-0092383" class="w-full bg-gray-100 border border-transparent rounded-xl p-2.5 font-bold text-gray-500 font-mono"></div>
                <div><label class="block text-xs font-bold text-gray-400 uppercase tracking-wide mb-1.5">Jumlah Setoran Dana (Rp)</label><input type="text" placeholder="Rp 4.500.000" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-2.5 font-bold text-gray-800 focus:outline-none focus:border-[#149387]"></div>
            </div>

            <div class="pt-2 flex justify-end gap-3">
                <button @click="modalTagihan = false" class="px-4 py-2.5 text-sm font-semibold text-gray-500 hover:bg-gray-50 rounded-xl transition-colors cursor-pointer">Batal</button>
                <button @click="modalTagihan = false" class="bg-[#149387] hover:bg-[#117d72] text-white font-bold text-sm py-2.5 px-5 rounded-xl shadow-xs transition-all cursor-pointer">Simpan Pembayaran</button>
            </div>
        </div>
    </div>
</div>
@endsection