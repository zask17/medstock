<aside id="admin-sidebar"
    class="w-64 bg-white border-r border-gray-100 flex flex-col fixed inset-y-0 left-0 z-40 transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:h-screen h-full overflow-hidden">

    <div class="p-6 flex items-center justify-between shrink-0">
        <img src="{{ asset('picture/logoSejajar.png') }}" alt="Logo" class="h-10 w-auto object-contain">

        <button onclick="toggleSidebar()"
            class="text-gray-400 hover:text-black lg:hidden focus:outline-none cursor-pointer">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
    </div>

    <nav class="flex-1 px-4 space-y-1 overflow-y-auto pb-4">

        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center space-x-3 p-3 rounded-xl transition-all mb-2 shadow-xs 
            {{ request()->routeIs('admin.dashboard') ? 'text-[#149387] bg-emerald-50/50 font-semibold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
            <i class="fa-solid fa-house w-5 text-center"></i>
            <span class="text-sm">Dasbor</span>
        </a>

        <details class="group [&_summary::-webkit-details-marker]:hidden" 
            {{ request()->routeIs('artikel.*') ? 'open' : '' }}>
            <summary
                class="flex items-center justify-between p-3 rounded-xl cursor-pointer transition-all list-none
                {{ request()->routeIs('artikel.*') ? 'text-[#149387] bg-emerald-50/50 font-semibold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
                <div class="flex items-center space-x-3">
                    <i class="fa-regular fa-newspaper w-5 text-center text-base"></i>
                    <span class="text-sm">Artikel</span>
                </div>
                <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-open:rotate-180 transition-transform duration-200"></i>
            </summary>
            <div class="mt-1 ml-5 pl-4 border-l border-gray-100 flex flex-col space-y-1">
                <a href="https://medstock.framer.website/"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('artikel.index') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-list-ul text-xs w-4 text-center"></i>
                    Daftar Artikel
                </a>
                <a href="{{ route('artikel.kelola') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('artikel.kelola') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-pen-to-square text-xs w-4 text-center"></i>
                    Kelola Artikel
                </a>
                <a href="{{ route('artikel.ledger') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('artikel.ledger') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-book text-xs w-4 text-center"></i>
                    Artikel Ledger
                </a>
            </div>
        </details>

         <details class="group [&_summary::-webkit-details-marker]:hidden" 
            {{ request()->routeIs('admin.karyawan.*') ? 'open' : '' }}>
            <summary
                class="flex items-center justify-between p-3 rounded-xl cursor-pointer transition-all list-none
                {{ request()->routeIs('admin.karyawan.*') ? 'text-[#149387] bg-emerald-50/50 font-semibold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
                <div class="flex items-center space-x-3">
                    <i class="fa-regular fa-address-card w-5 text-center text-base"></i>
                    <span class="text-sm">Karyawan</span>
                </div>
                <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-open:rotate-180 transition-transform duration-200"></i>
            </summary>
            <div class="mt-1 ml-5 pl-4 border-l border-gray-100 flex flex-col space-y-1">
                <a href="{{ route('admin.karyawan.index') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('admin.karyawan.index') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-list-ul text-xs w-4 text-center"></i>
                    Daftar Karyawan
                </a>
                {{-- <a href="{{ route('admin.karyawan.tambah') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('admin.karyawan.tambah') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-user-plus text-xs w-4 text-center"></i>
                    Tambah Karyawan
                </a> --}}
                <a href="{{ route('admin.karyawan.absensi') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('admin.karyawan.absensi') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-calendar-check text-xs w-4 text-center"></i>
                    Absensi
                </a>
                <a href="{{ route('admin.karyawan.biaya') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('admin.karyawan.biaya') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-coins text-xs w-4 text-center"></i>
                    Manajemen Biaya
                </a>

                <details class="group/sub mt-1 [&_summary::-webkit-details-marker]:hidden"
                    {{ request()->routeIs('admin.karyawan.penggajian.*') ? 'open' : '' }}>
                    <summary class="flex items-center justify-between py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors cursor-pointer list-none">
                        <span class="{{ request()->routeIs('admin.karyawan.penggajian.*') ? 'text-[#149387] font-semibold' : '' }}">Penggajian Karyawan</span>
                        <i class="fa-solid fa-chevron-right text-[8px] text-gray-400 group-open/sub:rotate-90 transition-transform duration-200"></i>
                    </summary>
                    <div class="mt-1 ml-3 pl-3 border-l border-gray-200 flex flex-col space-y-1 bg-gray-50/50 rounded-lg py-1">
                        <a href="{{ route('admin.karyawan.penggajian.daftar-tunjangan') }}"
                            class="py-1.5 px-3 text-xs rounded-md transition-colors flex items-center gap-2 {{ request()->routeIs('admin.karyawan.penggajian.daftar-tunjangan') ? 'text-[#149387] font-bold bg-white shadow-2xs' : 'text-gray-500 hover:text-[#149387]' }}">
                            <i class="fa-solid fa-gift text-xs w-4 text-center"></i>
                            Daftar Tunjangan
                        </a>
                        <a href="{{ route('admin.karyawan.penggajian.daftar-pengaturan-gaji') }}"
                            class="py-1.5 px-3 text-xs rounded-md transition-colors flex items-center gap-2 {{ request()->routeIs('admin.karyawan.penggajian.daftar-pengaturan-gaji') ? 'text-[#149387] font-bold bg-white shadow-2xs' : 'text-gray-500 hover:text-[#149387]' }}">
                            <i class="fa-solid fa-gears text-xs w-4 text-center"></i>
                            Daftar Konfigurasi Gaji
                        </a>
                        <a href="{{ route('admin.karyawan.penggajian.atur-gaji-karyawan') }}"
                            class="py-1.5 px-3 text-xs rounded-md transition-colors flex items-center gap-2 {{ request()->routeIs('admin.karyawan.penggajian.atur-gaji-karyawan') ? 'text-[#149387] font-bold bg-white shadow-2xs' : 'text-gray-500 hover:text-[#149387]' }}">
                            <i class="fa-solid fa-plus-circle text-xs w-4 text-center"></i>
                            Atur Gaji Baru
                        </a>
                        <a href="{{ route('admin.karyawan.penggajian.slip-gaji') }}"
                            class="py-1.5 px-3 text-xs rounded-md transition-colors flex items-center gap-2 {{ request()->routeIs('admin.karyawan.penggajian.slip-gaji') ? 'text-[#149387] font-bold bg-white shadow-2xs' : 'text-gray-500 hover:text-[#149387]' }}">
                            <i class="fa-solid fa-print text-xs w-4 text-center"></i>
                            Cetak Slip Gaji
                        </a>
                        <a href="{{ route('admin.karyawan.penggajian.pembayaran-gaji') }}"
                            class="py-1.5 px-3 text-xs rounded-md transition-colors flex items-center gap-2 {{ request()->routeIs('admin.karyawan.penggajian.pembayaran-gaji') ? 'text-[#149387] font-bold bg-white shadow-2xs' : 'text-gray-500 hover:text-[#149387]' }}">
                            <i class="fa-solid fa-clock-rotate-left text-xs w-4 text-center"></i>
                            Log Pembayaran
                        </a>
                    </div>
                </details>
            </div>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden" 
            {{ request()->routeIs('admin_pegawaiGudang.laporan.*') ? 'open' : '' }}>
            <summary
                class="flex items-center justify-between p-3 rounded-xl cursor-pointer transition-all list-none
                {{ request()->routeIs('admin_pegawaiGudang.laporan.*') ? 'text-[#149387] bg-emerald-50/50 font-semibold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
                <div class="flex items-center space-x-3">
                    <i class="fa-regular fa-file-lines w-5 text-center text-base"></i>
                    <span class="text-sm">Laporan</span>
                </div>
                <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-open:rotate-180 transition-transform duration-200"></i>
            </summary>
            <div class="mt-1 ml-5 pl-4 border-l border-gray-100 flex flex-col space-y-1">
                <a href="{{ route('admin_pegawaiGudang.laporan.penjualan') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('admin_pegawaiGudang.laporan.penjualan') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-chart-line text-xs w-4 text-center"></i>
                    Laporan Penjualan
                </a>
                <a href="{{ route('admin_pegawaiGudang.laporan.retur-penjualan') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('admin_pegawaiGudang.laporan.retur-penjualan') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-rotate-left text-xs w-4 text-center"></i>
                    Laporan Retur Penjualan
                </a>
                <a href="{{ route('admin_pegawaiGudang.laporan.pembelian') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('admin_pegawaiGudang.laporan.pembelian') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-cart-shopping text-xs w-4 text-center"></i>
                    Laporan Pembelian
                </a>
            </div>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden" 
            {{ request()->routeIs('admin_pegawaiGudang.laporan-stok.*') ? 'open' : '' }}>
            <summary
                class="flex items-center justify-between p-3 rounded-xl cursor-pointer transition-all list-none
                {{ request()->routeIs('admin_pegawaiGudang.laporan-stok.*') ? 'text-[#149387] bg-emerald-50/50 font-semibold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-chart-simple w-5 text-center text-base"></i>
                    <span class="text-sm">Laporan Stok</span>
                </div>
                <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-open:rotate-180 transition-transform duration-200"></i>
            </summary>
            <div class="mt-1 ml-5 pl-4 border-l border-gray-100 flex flex-col space-y-1">
                <a href="{{ route('admin_pegawaiGudang.laporan-stok.index') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('admin_pegawaiGudang.laporan-stok.index') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-warehouse text-xs w-4 text-center"></i>
                    Laporan Stok
                </a>
                <a href="{{ route('admin_pegawaiGudang.laporan-stok.batch-stok') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('admin_pegawaiGudang.laporan-stok.batch-stok') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-cubes text-xs w-4 text-center"></i>
                    Laporan Batch Stok
                </a>
            </div>
        </details>
        
        <details class="group [&_summary::-webkit-details-marker]:hidden" 
            {{ request()->routeIs('admin.produsen.*') ? 'open' : '' }}>
            <summary
                class="flex items-center justify-between p-3 rounded-xl cursor-pointer transition-all list-none
                {{ request()->routeIs('admin.produsen.*') ? 'text-[#149387] bg-emerald-50/50 font-semibold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
                <div class="flex items-center space-x-3">
                    <i class="fa-regular fa-user w-5 text-center text-base"></i>
                    <span class="text-sm">Produsen</span>
                </div>
                <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-open:rotate-180 transition-transform duration-200"></i>
            </summary>
            <div class="mt-1 ml-5 pl-4 border-l border-gray-100 flex flex-col space-y-1">
                <a href="{{ route('admin.produsen.index') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('admin.produsen.index') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-list-ul text-xs w-4 text-center"></i>
                    Daftar Produsen
                </a>
                <a href="{{ route('admin.produsen.bank') }}"
                    class="py-2 px-3 text-sm rounded-lg transition-colors flex items-center gap-2 {{ request()->routeIs('admin.produsen.bank') ? 'text-[#149387] font-semibold bg-gray-50' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-building-columns text-xs w-4 text-center"></i>
                    Bank Produsen
                </a>
            </div>
        </details>

    
        <a href="#"
            class="flex items-center space-x-3 p-3 rounded-xl text-gray-500 hover:bg-gray-50 hover:text-gray-800 transition-all">
            <i class="fa-solid fa-gear w-5 text-center text-base"></i>
            <span class="font-medium text-sm">Pengaturan</span>
        </a>
    </nav>

    <div class="p-4 border-t border-gray-100 shrink-0 bg-white">
        <a href="{{ route('login') }}"
            class="flex items-center space-x-3 p-3 text-red-500 hover:bg-red-50 rounded-xl transition-all">
            <i class="fa-solid fa-right-from-bracket w-5 text-center"></i>
            <span class="font-medium text-sm">Keluar</span>
        </a>
    </div>
</aside>