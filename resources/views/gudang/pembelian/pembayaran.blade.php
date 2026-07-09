@extends('layouts.gudang.main')

@section('title', 'Daftar Pembayaran Produsen')

@section('content')
    <div class="space-y-6" x-data="{ openInvoice: false, openPaymentModal: false }" @keydown.escape.window="openPaymentModal = false">
        <div x-show="!openInvoice" class="space-y-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Daftar Pembayaran Produsen</h2>
                    <p class="text-sm text-gray-400 mt-1">Kelola pembukuan, pelunasan, dan status transaksi faktur bersama produsen mitra.</p>
                </div>
                <div>
                    <button @click="openPaymentModal = true"
                        class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-xs flex items-center gap-2 transition-all cursor-pointer">
                        <i class="fa-solid fa-plus text-xs"></i>
                        Tambah Pembayaran
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-3xl border border-gray-100 shadow-xs p-6">
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 items-end mb-6">
                    <div>
                        <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Nama Produsen</label>
                        <select class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                            <option value="">Pilih Produsen</option>
                            <option value="Jone Coper">Jone Coper</option>
                            <option value="Beximco">Beximco</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">ID Faktur (Invoice)</label>
                        <input type="text" placeholder="#B-63215615263"
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Tanggal Mulai</label>
                        <input type="text" id="pay_start" placeholder="28 Jun, 2022 - 10:00"
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                    </div>
                    <div class="flex gap-2">
                        <div class="flex-1">
                            <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Tanggal Selesai</label>
                            <input type="text" id="pay_end" placeholder="30 Jun, 2022 - 10:00"
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                        </div>
                        <button class="bg-[#149387] text-white p-3 rounded-xl self-end cursor-pointer hover:bg-[#117c71] transition-colors">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-t border-gray-50 pt-5 mb-4">
                    <div class="flex items-center gap-2 text-sm text-gray-400 font-medium">
                        <span>Tampilkan hingga</span>
                        <select class="bg-gray-50 border border-gray-200 rounded-xl px-3 py-1.5 focus:outline-none focus:border-[#149387]">
                            <option selected>100</option>
                            <option>50</option>
                            <option>10</option>
                        </select>
                        <span>Data</span>
                    </div>
                    <button class="bg-gray-50 hover:bg-gray-100 border border-gray-200 text-gray-500 rounded-xl px-4 py-2 text-xs font-bold inline-flex items-center gap-1.5 transition-colors cursor-pointer">
                        <i class="fa-solid fa-arrow-down-long text-[10px]"></i> Ekspor Data
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-sm min-w-[900px]">
                        <thead>
                            <tr class="border-b border-gray-100 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                                <th class="pb-4 pl-2 w-12"><input type="checkbox" class="rounded border-gray-300 text-[#149387] focus:ring-[#149387]"></th>
                                <th class="pb-4 px-4">SI</th>
                                <th class="pb-4 px-4">ID Faktur (Invoice)</th>
                                <th class="pb-4 px-4">Tanggal</th>
                                <th class="pb-4 px-4">Nama Produsen</th>
                                <th class="pb-4 px-4">Akun</th>
                                <th class="pb-4 px-4">Metode Pembayaran</th>
                                <th class="pb-4 px-4">Tipe</th>
                                <th class="pb-4 px-4">Jumlah</th>
                                <th class="pb-4 pr-2 text-right">Persetujuan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 font-medium text-gray-600">
                            @for ($i = 1; $i <= 8; $i++)
                                <tr class="hover:bg-gray-50/50 transition-colors">
                                    <td class="py-4 pl-2"><input type="checkbox" class="rounded border-gray-300 text-[#149387] focus:ring-[#149387]"></td>
                                    <td class="py-4 px-4 text-gray-400">{{ $i }}</td>
                                    <td class="py-4 px-4 font-bold text-[#149387] cursor-pointer hover:underline" @click="openInvoice = true">#B-1234567</td>
                                    <td class="py-4 px-4 text-gray-400 text-xs">26 Feb 2022</td>
                                    <td class="py-4 px-4 text-gray-800">Jone Coper</td>
                                    <td class="py-4 px-4">Kas (Cash)</td>
                                    <td class="py-4 px-4 text-gray-400">Rp1.800.000</td>
                                    <td class="py-4 px-4">Rp1.800.000</td>
                                    <td class="py-4 px-4 font-bold text-gray-800">Rp1.800.000</td>
                                    <td class="py-4 pr-2 text-right">
                                        <span class="inline-flex items-center px-3 py-1 bg-emerald-50 text-[#149387] rounded-xl text-xs font-bold border border-emerald-100">
                                            Disetujui
                                        </span>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-end items-center gap-1 mt-6 text-xs font-semibold text-gray-500">
                    <button class="w-7 h-7 bg-gray-50 border border-gray-200 rounded-lg flex items-center justify-center hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-chevron-left text-[10px]"></i></button>
                    <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">1</button>
                    <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">2</button>
                    <button class="w-7 h-7 bg-[#149387] text-white rounded-lg flex items-center justify-center shadow-2xs">3</button>
                    <span class="px-1 text-gray-300">...</span>
                    <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">40</button>
                    <button class="w-7 h-7 bg-gray-50 border border-gray-200 rounded-lg flex items-center justify-center hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-chevron-right text-[10px]"></i></button>
                </div>
            </div>
        </div>

        <div x-show="openInvoice" x-cloak class="bg-white rounded-3xl border border-gray-100 shadow-xs p-6 max-w-3xl mx-auto space-y-6">
            <div class="flex justify-between items-center border-b border-gray-100 pb-4">
                <span class="text-sm text-gray-400 font-bold">No Faktur: 0216202234253543</span>
                <div class="flex gap-2">
                    <button @click="openInvoice = false" class="bg-gray-100 text-gray-600 text-xs font-bold px-4 py-2 rounded-xl cursor-pointer hover:bg-gray-200 transition-colors">
                        <i class="fa-solid fa-arrow-left mr-1"></i> Kembali ke Daftar
                    </button>
                </div>
            </div>

            <div class="p-6 bg-gray-50/50 rounded-2xl border border-gray-100 space-y-6">
                <div class="flex justify-between items-start">
                    <div>
                        <h1 class="text-xl font-black text-[#149387]">medstock</h1>
                        <p class="text-xs text-gray-400 mt-2 font-bold uppercase">Ditujukan Kepada:</p>
                        <p class="text-sm font-bold text-gray-800">Jhonathon Doe</p>
                        <p class="text-xs text-gray-400">7896 Clouds Way 98237 Braavos, SE</p>
                    </div>
                    <div class="text-right">
                        <p class="text-xs font-mono text-gray-400">No. Faktur: 02162022</p>
                        <p class="text-xs font-mono text-gray-400 mt-1">Tanggal: 16 Feb 2022</p>
                    </div>
                </div>

                <table class="w-full text-left text-xs border-collapse font-semibold">
                    <thead>
                        <tr class="border-b border-gray-200 text-gray-400 uppercase">
                            <th class="py-2">Nama Obat</th>
                            <th class="py-2">Jumlah</th>
                            <th class="py-2">Harga Produsen</th>
                            <th class="py-2 text-right">Total Jumlah</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-gray-600">
                        <tr>
                            <td class="py-3">Napa 500mg</td>
                            <td>40</td>
                            <td>Rp455.000</td>
                            <td class="py-3 text-right font-bold text-gray-800">Rp18.200.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div x-show="openPaymentModal"
            class="fixed inset-0 z-50 overflow-y-auto"
            style="display: none;"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95">

            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-black/50 backdrop-blur-xs transition-opacity" @click="openPaymentModal = false"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full p-6 border border-gray-100 relative z-10"
                    @click.outside="openPaymentModal = false">

                    <div class="flex items-center justify-between pb-4 border-b border-gray-100 mb-6">
                        <h3 class="text-xl font-bold text-gray-800">Pembayaran Produsen (Supplier Payment)</h3>
                        <button @click="openPaymentModal = false" class="text-gray-400 hover:text-gray-600 transition-colors cursor-pointer focus:outline-none">
                            <i class="fa-solid fa-xmark text-lg"></i>
                        </button>
                    </div>

                    <form @submit.prevent="openPaymentModal = false" class="space-y-4 text-xs font-semibold">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-500 mb-1.5">Nama Produsen (Supplier Name)</label>
                                <input type="text" value="Jone Coper" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Tanggal (Date)</label>
                                <input type="text" id="pop_date" placeholder="Nama Pelanggan / Tanggal" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Kode Produsen (Supplier Code)</label>
                                <input type="text" value="#T-133444" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Pilih Rekening Akun (Select Account)</label>
                                <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                                    <option>Pilih Salah Satu</option>
                                    <option value="1">Kas Di Tangan (Cash Hand)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Nomor Handphone (Mobile Number)</label>
                                <input type="text" value="+12345678900" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Jumlah Piutang (Receivable Amount)</label>
                                <input type="text" placeholder="Nama Pelanggan / Jumlah" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Uang Muka (Advanced)</label>
                                <input type="text" value="Rp0,00" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Metode Pembayaran (Payment Method)</label>
                                <select class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387] cursor-pointer">
                                    <option>Cash Hand</option>
                                    <option>Transfer Bank</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Tunggakan Sebelumnya (Previous Due)</label>
                                <input type="text" value="Rp0,00" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Saldo Saat Ini (Current Balance)</label>
                                <input type="text" value="Cash Hand" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#149387]">
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-100 flex justify-end gap-2 mt-4">
                            <button type="button" @click="openPaymentModal = false" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-xl font-bold cursor-pointer transition-colors">Batal</button>
                            <button type="submit" class="bg-[#149387] hover:bg-[#117c71] text-white px-4 py-2 rounded-xl font-bold cursor-pointer transition-colors">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#pay_start", { locale: "id", dateFormat: "d M, Y" });
            flatpickr("#pay_end", { locale: "id", dateFormat: "d M, Y" });
            flatpickr("#pop_date", { locale: "id", dateFormat: "d M Y" });
        });
    </script>
@endsection