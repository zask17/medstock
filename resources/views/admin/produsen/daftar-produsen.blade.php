@extends('layouts.admin.main')

@section('title', 'Daftar Produsen Mitra')

@section('content')
    <div class="space-y-6" x-data="{ openModal: false }">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Daftar Produsen Mitra</h2>
                <p class="text-sm text-gray-400 mt-1">Kelola dan pantau seluruh daftar perusahaan manufaktur farmasi yang bekerja sama.</p>
            </div>
            <div>
                <button @click="openModal = true" onclick="openTambahModal()"
                    class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-xs flex items-center gap-2 transition-all cursor-pointer">
                    <i class="fa-solid fa-plus text-xs"></i>
                    Tambah Produsen Baru
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-xs flex items-center gap-4">
                <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-[#149387]">
                    <i class="fa-solid fa-industry text-lg"></i>
                </div>
                <div>
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Total Produsen</p>
                    <p class="text-xl font-bold text-gray-800 mt-0.5">24 Perusahaan</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-xs flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-500">
                    <i class="fa-solid fa-handshake text-lg"></i>
                </div>
                <div>
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Kemitraan Aktif</p>
                    <p class="text-xl font-bold text-gray-800 mt-0.5">21 Produsen</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-xs flex items-center gap-4">
                <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center text-amber-500">
                    <i class="fa-solid fa-clock-rotate-left text-lg"></i>
                </div>
                <div>
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Menunggu Tinjauan</p>
                    <p class="text-xl font-bold text-gray-800 mt-0.5">3 Berkas</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl border border-gray-100 shadow-xs p-6">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                <div class="relative w-full sm:w-80">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-gray-400">
                        <i class="fa-solid fa-magnifying-glass text-sm"></i>
                    </span>
                    <input type="text" placeholder="Cari pabrik atau kode produsen..."
                        class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl pl-10 pr-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                </div>
                <div class="flex items-center gap-2 self-end sm:self-auto">
                    <select
                        class="bg-gray-50 border border-gray-200 text-gray-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387] cursor-pointer">
                        <option>Semua Status</option>
                        <option>Aktif</option>
                        <option>Ditangguhkan</option>
                    </select>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse min-w-[900px]">
                    <thead>
                        <tr class="border-b border-gray-100 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                            <th class="pb-4 pl-2 w-12"><input type="checkbox" class="rounded border-gray-300 text-[#149387] focus:ring-[#149387]"> No</th>
                            <th class="pb-4 px-4">Tanggal Gabung</th>
                            <th class="pb-4 px-4">Nama PIC</th>
                            <th class="pb-4 px-4">Nama Perusahaan</th>
                            <th class="pb-4 px-4">Email</th>
                            <th class="pb-4 px-4">No. Telepon</th>
                            <th class="pb-4 px-4">Alamat</th>
                            <th class="pb-4 px-4">Saldo Awal</th>
                            <th class="pb-4 pr-2 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50 text-sm text-gray-600">
                        @php
                            // Data dummy variatif non-repetitif disesuaikan dengan Manufacturer List asli Anda
                            $produsens = [
                                ['date' => '22 Feb 2022', 'name' => 'Annette Black', 'company' => 'Beximco Pharma', 'email' => 'jane@example.com', 'phone' => '(207) 555-0119', 'address' => '1901 Thornridge Cir. Shiloh, Hawaii 81063', 'balance' => '$300.00'],
                                ['date' => '24 Feb 2022', 'name' => 'Arlene McCoy', 'company' => 'Square Pharma', 'email' => 'mcc@example.com', 'phone' => '(302) 555-0107', 'address' => '2715 Ash Dr. San Jose, Dakota 83475', 'balance' => '$450.00'],
                                ['date' => '25 Feb 2022', 'name' => 'Robert Fox', 'company' => 'Kalbe Farma Tbk', 'email' => 'foxe@example.com', 'phone' => '(219) 555-0114', 'address' => '2464 Royal Ln. Mesa, New Jersey 45463', 'balance' => '$600.00'],
                                ['date' => '04 Mar 2022', 'name' => 'Albert Flores', 'company' => 'Incepta Pharma', 'email' => 'flores@example.com', 'phone' => '(270) 555-0117', 'address' => '4140 Parker Rd. Tanggerang 31134', 'balance' => '$250.00'],
                                ['date' => '05 Mar 2022', 'name' => 'Jerome Bell', 'company' => 'Sanbe Farma', 'email' => 'jerom@example.com', 'phone' => '(209) 555-0104', 'address' => '3517 W. Gray St. Bandung, Barat 57867', 'balance' => '$700.00']
                            ];
                        @endphp

                        @foreach($produsens as $index => $prd)
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-4 pl-2 font-medium text-gray-400"><input type="checkbox" class="rounded border-gray-300 text-[#149387] focus:ring-[#149387]"> {{ $index + 1 }}</td>
                                <td class="py-4 px-4 text-xs text-gray-400 font-semibold">{{ $prd['date'] }}</td>
                                <td class="py-4 px-4 font-semibold text-gray-800">{{ $prd['name'] }}</td>
                                <td class="py-4 px-4 font-bold text-[#149387]">{{ $prd['company'] }}</td>
                                <td class="py-4 px-4 font-mono text-xs text-gray-500">{{ $prd['email'] }}</td>
                                <td class="py-4 px-4 font-mono text-xs text-gray-500">{{ $prd['phone'] }}</td>
                                <td class="py-4 px-4 text-xs text-gray-400 max-w-[200px] truncate" title="{{ $prd['address'] }}">{{ $prd['address'] }}</td>
                                <td class="py-4 px-4 font-bold text-gray-700">{{ $prd['balance'] }}</td>
                                <td class="py-4 pr-2 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-blue-500 transition-colors cursor-pointer" title="Ubah">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <button class="p-1.5 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-rose-500 transition-colors cursor-pointer" title="Hapus">
                                            <i class="fa-regular fa-trash-can"></i>
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
                <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">3</button>
                <span class="px-1 text-gray-300">...</span>
                <button class="w-7 h-7 border border-transparent rounded-lg flex items-center justify-center hover:bg-gray-50 cursor-pointer">8</button>
                <button class="w-7 h-7 bg-gray-50 border border-gray-200 rounded-lg flex items-center justify-center hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-chevron-right text-[10px]"></i></button>
            </div>
        </div>
        
        <div id="tambahProdusenModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                
                <div class="fixed inset-0 transition-opacity bg-black/50 backdrop-blur-md duration-300" onclick="closeTambahModal()"></div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full p-6 border border-gray-100">
                    <div class="flex items-center justify-between pb-4 border-b border-gray-100">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800" id="modal-title">Tambah Produsen Baru</h3>
                            <p class="text-xs text-gray-400 mt-0.5">Lengkapi formulir di bawah untuk mendaftarkan manufaktur mitra apotek baru.</p>
                        </div>
                        <button onclick="closeTambahModal()" class="text-gray-400 hover:text-gray-600 transition-colors focus:outline-none cursor-pointer">
                            <i class="fa-solid fa-xmark text-lg"></i>
                        </button>
                    </div>

                    <form action="#" method="POST" class="mt-4 space-y-4">
                        <div>
                            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Nama Produsen (Manufacturer Name)</label>
                            <input type="text" required placeholder="Masukkan nama produsen"
                                class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Alamat Email (Email Address)</label>
                            <input type="email" required placeholder="nama@emailprodusen.com"
                                class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387] font-mono text-xs">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">No. Telepon (Phone)</label>
                                <input type="tel" required placeholder="(202) 345 345 655"
                                    class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387] font-mono text-xs">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Saldo Awal (Previous Balance)</label>
                                <input type="text" placeholder="0.00"
                                    class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387]">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Alamat Lengkap (Address Line)</label>
                            <textarea rows="3" placeholder="Tuliskan detail lokasi alamat fisik pabrik..."
                                class="w-full bg-gray-50 border border-gray-200 text-gray-700 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#149387] resize-none"></textarea>
                        </div>

                        <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3 mt-6">
                            <button type="button" onclick="closeTambahModal()"
                                class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-5 py-2.5 rounded-xl text-sm font-semibold transition-all cursor-pointer">
                                Batalkan
                            </button>
                            <button type="submit"
                                class="bg-[#149387] hover:bg-[#117c71] text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-xs transition-all cursor-pointer">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openTambahModal() {
            document.getElementById('tambahProdusenModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeTambahModal();
            }
        });

        function closeTambahModal() {
            document.getElementById('tambahProdusenModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    </script>
@endsection