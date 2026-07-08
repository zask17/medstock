<aside id="apoteker-sidebar"
    class="w-64 bg-white border-r border-gray-100 flex flex-col fixed inset-y-0 left-0 z-40 transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:h-screen h-full overflow-hidden">
    
    <div class="p-6 flex items-center justify-between shrink-0">
        <img src="{{ asset('picture/logoSejajar.png') }}" alt="Logo" class="h-10 w-auto object-contain">

        <button onclick="toggleSidebar()"
            class="text-gray-400 hover:text-black lg:hidden focus:outline-none cursor-pointer">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
    </div>

    <nav class="flex-1 px-4 space-y-1 overflow-y-auto pb-4 custom-scrollbar">

        <a href="{{ route('apoteker.dashboard') }}"
            class="flex items-center space-x-3 p-3 rounded-xl transition-all mb-2 {{ request()->routeIs('apoteker.dashboard') ? 'bg-[#149387] text-white shadow-xs' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
            <i class="fa-solid fa-house w-5 text-center"></i>
            <span class="text-sm {{ request()->routeIs('apoteker.dashboard') ? 'font-semibold' : 'font-medium' }}">Dasbor</span>
        </a>

        <!-- Artikel -->
        <a href="{{ route('artikel.index') }}"
            class="flex items-center space-x-3 p-3 rounded-xl transition-all mb-2 shadow-xs {{ request()->routeIs('artikel.*') ? 'bg-[#149387] text-white font-semibold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800 font-medium' }}">
            <i class="fa-regular fa-newspaper w-5 text-center text-base"></i>
            <span class="text-sm">Artikel</span>
        </a>

        <details class="group [&_summary::-webkit-details-marker]:hidden" {{ request()->routeIs('apoteker.dispenser.*') ? 'open' : '' }}>
            <summary
                class="flex items-center justify-between p-3 rounded-xl cursor-pointer transition-all list-none
                {{ request()->routeIs('apoteker.dispenser.*') ? 'text-[#149387] bg-emerald-50/50 font-semibold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-capsules w-5 text-center text-base"></i>
                    <span class="text-sm">Dispenser</span>
                </div>
                <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-open:rotate-180 transition-transform duration-200"></i>
            </summary>
            
            <div class="mt-1 ml-5 pl-4 border-l border-gray-100 flex flex-col space-y-1">
                <a href="{{ route('apoteker.dispenser.kasir') }}"
                    class="py-1.5 px-3 text-xs rounded-md transition-colors flex items-center gap-2 {{ request()->routeIs('apoteker.dispenser.kasir') ? 'text-[#149387] font-bold bg-white shadow-2xs' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-cash-register text-xs w-4 text-center"></i>
                    Kasir
                </a>
                
                <a href="{{ route('apoteker.dispenser.daftar-penjualan') }}"
                    class="py-1.5 px-3 text-xs rounded-md transition-colors flex items-center gap-2 {{ request()->routeIs('apoteker.dispenser.daftar-penjualan') ? 'text-[#149387] font-bold bg-white shadow-2xs' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-receipt text-xs w-4 text-center"></i>
                    Daftar Penjualan
                </a>
                
                <a href="{{ route('apoteker.dispenser.penagihan') }}"
                    class="py-1.5 px-3 text-xs rounded-md transition-colors flex items-center gap-2 {{ request()->routeIs('apoteker.dispenser.penagihan') ? 'text-[#149387] font-bold bg-white shadow-2xs' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-file-invoice text-xs w-4 text-center"></i>
                    Penagihan
                </a>
                
                <a href="{{ route('apoteker.dispenser.retur-penjualan') }}"
                    class="py-1.5 px-3 text-xs rounded-md transition-colors flex items-center gap-2 {{ request()->routeIs('apoteker.dispenser.retur-penjualan') ? 'text-[#149387] font-bold bg-white shadow-2xs' : 'text-gray-500 hover:text-[#149387]' }}">
                    <i class="fa-solid fa-arrow-rotate-left text-xs w-4 text-center"></i>
                    Retur Penjualan
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
            class="flex items-center space-x-3 p-3 text-red-500 hover:bg-red-50 rounded-xl transition-all cursor-pointer">
            <i class="fa-solid fa-right-from-bracket w-5 text-center"></i>
            <span class="font-medium text-sm">Keluar</span>
        </a>
    </div>
</aside>