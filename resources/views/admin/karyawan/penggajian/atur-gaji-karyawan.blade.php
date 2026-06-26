@extends($layout)

@section('title', 'Atur Skema Gaji')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Atur Skema Gaji Karyawan</h1>
        <p class="text-sm text-gray-400 mt-1">Konfigurasi formula tambahan upah serta potongan wajib</p>
    </div>

    <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-2xs space-y-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-xs font-semibold">
            <div class="relative bg-gray-50 border border-gray-100 rounded-xl px-4 py-2 flex items-center">
                <div class="w-full">
                    <label class="block text-[10px] text-gray-400 uppercase tracking-wider mb-0.5">Pilih Karyawan</label>
                    <select class="bg-transparent border-none focus:outline-none w-full text-gray-700 font-bold appearance-none pr-4 cursor-pointer">
                        <option>Jane Cooper</option>
                    </select>
                </div>
                <i class="fa-solid fa-chevron-down absolute right-4 text-gray-400 text-[10px] pointer-events-none"></i>
            </div>
            <div class="relative bg-gray-50 border border-gray-100 rounded-xl px-4 py-2 flex items-center">
                <div class="w-full">
                    <label class="block text-[10px] text-gray-400 uppercase tracking-wider mb-0.5">Tipe Skema Upah</label>
                    <select class="bg-transparent border-none focus:outline-none w-full text-gray-700 font-bold appearance-none pr-4 cursor-pointer">
                        <option>Bulanan (Salary)</option>
                        <option>Per Jam (Hourly)</option>
                    </select>
                </div>
                <i class="fa-solid fa-chevron-down absolute right-4 text-gray-400 text-[10px] pointer-events-none"></i>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs font-semibold">
            <div class="bg-gray-50/40 p-5 rounded-2xl border border-gray-100 space-y-4">
                <h3 class="text-sm font-bold text-gray-900 border-b border-gray-100 pb-2 flex items-center gap-2">
                    <i class="fa-solid fa-circle-plus text-emerald-500"></i> Komponen Tambahan (Pendapatan)
                </h3>
                <div>
                    <label class="block text-gray-400 mb-1.5">Gaji Pokok Base</label>
                    <input type="text" value="Rp 12.000.000" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-sm font-bold text-gray-800 focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-400 mb-1.5">Bonus Hari Raya (THR)</label>
                    <input type="text" value="Rp 1.200.000" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-sm font-bold text-gray-800 focus:outline-none focus:border-[#149387]">
                </div>
            </div>

            <div class="bg-gray-50/40 p-5 rounded-2xl border border-gray-100 space-y-4">
                <h3 class="text-sm font-bold text-gray-900 border-b border-gray-100 pb-2 flex items-center gap-2">
                    <i class="fa-solid fa-circle-minus text-rose-500"></i> Komponen Potongan (Deduction)
                </h3>
                <div>
                    <label class="block text-gray-400 mb-1.5">Potongan Keterlambatan (%)</label>
                    <input type="text" value="Rp 150.000" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-sm font-bold text-gray-800 focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-400 mb-1.5">Pajak PPh21 (%)</label>
                    <input type="text" value="Rp 250.000" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-sm font-bold text-gray-800 focus:outline-none focus:border-[#149387]">
                </div>
            </div>
        </div>

        <div class="pt-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div>
                <p class="text-xs text-gray-400 font-semibold uppercase">Estimasi Total Take Home Pay</p>
                <p class="text-2xl font-extrabold text-[#149387] mt-0.5">Rp 12.800.000</p>
            </div>
            <div class="flex gap-2 w-full sm:w-auto">
                <button type="button" class="flex-1 sm:flex-none px-5 py-2.5 bg-gray-100 text-gray-500 font-bold text-xs rounded-xl cursor-pointer">Reset</button>
                <button type="submit" class="flex-1 sm:flex-none px-6 py-2.5 bg-[#149387] hover:bg-[#117d72] text-white font-bold text-xs rounded-xl shadow-xs cursor-pointer transition-all">Simpan Pengaturan</button>
            </div>
        </div>
    </div>
</div>
@endsection