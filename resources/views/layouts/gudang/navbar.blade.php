<header class="h-16 bg-white border-b border-gray-100 flex items-center justify-between px-4 sm:px-8 sticky top-0 z-20">
    <div class="flex items-center space-x-4">
        <button onclick="toggleSidebar()" class="p-2 rounded-lg hover:bg-gray-50 text-gray-600 lg:hidden focus:outline-none cursor-pointer">
            <i class="fa-solid fa-bars text-xl"></i>
        </button>

        <div class="hidden sm:flex items-center bg-gray-50 rounded-full px-4 py-2 w-64 md:w-96">
            <i class="fa-solid fa-magnifying-glass text-gray-400 mr-2"></i>
            <input type="text" placeholder="Cari obat, supplier, nomor batch..." class="bg-transparent border-none focus:outline-none text-sm w-full">
        </div>
    </div>

    <div class="flex items-center space-x-4 sm:space-x-6">
        <div class="relative p-2 hover:bg-gray-50 rounded-full cursor-pointer group">
            <i class="fa-solid fa-bell text-gray-400 text-xl"></i>
            <span class="absolute top-2 right-2 bg-amber-500 w-2 h-2 rounded-full"></span>
        </div>
        
        <div class="flex items-center space-x-3 sm:border-l sm:pl-6">
            <div class="text-right hidden md:block">
                <p class="text-sm font-bold text-gray-800">{{ session('user_nama', 'Pegawai Gudang') }}</p>
                <p class="text-xs text-gray-400 capitalize">{{ session('user_role', 'Gudang') }}</p>
            </div>
            <img src="https://ui-avatars.com/api/?name={{ urlencode(session('user_nama', 'Gudang')) }}&background=149387&color=fff" class="w-10 h-10 rounded-full border-2 border-[#149387]/20 object-contain" alt="User Avatar">
        </div>
    </div>
</header>