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
        <a href="#"
            class="flex items-center space-x-3 p-3 rounded-xl bg-[#149387] text-white transition-all mb-2 shadow-xs">
            <i class="fa-solid fa-house w-5 text-center"></i>
            <span class="font-semibold text-sm">Dashboard</span>
        </a>

        <details class="group [&_summary::-webkit-details-marker]:hidden">
            <summary
                class="flex items-center justify-between p-3 rounded-xl text-gray-500 hover:bg-gray-50 hover:text-gray-800 cursor-pointer transition-all list-none">
                <div class="flex items-center space-x-3">
                    <i class="fa-regular fa-newspaper w-5 text-center text-base"></i>
                    <span class="font-medium text-sm">Article</span>
                </div>
                <i
                    class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-open:rotate-180 transition-transform duration-200"></i>
            </summary>
            <div class="mt-1 ml-5 pl-4 border-l border-gray-100 flex flex-col space-y-1">
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Article
                    List</a>
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Article
                    Ledger</a>
            </div>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden">
            <summary
                class="flex items-center justify-between p-3 rounded-xl text-gray-500 hover:bg-gray-50 hover:text-gray-800 cursor-pointer transition-all list-none">
                <div class="flex items-center space-x-3">
                    <i class="fa-regular fa-file-lines w-5 text-center text-base"></i>
                    <span class="font-medium text-sm">Reports</span>
                </div>
                <i
                    class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-open:rotate-180 transition-transform duration-200"></i>
            </summary>
            <div class="mt-1 ml-5 pl-4 border-l border-gray-100 flex flex-col space-y-1">
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Sales
                    Report</a>
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Sales
                    Return Report</a>
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Purchase
                    Report</a>
            </div>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden" open>
            <summary
                class="flex items-center justify-between p-3 rounded-xl text-gray-500 hover:bg-gray-50 hover:text-gray-800 cursor-pointer transition-all list-none">
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-chart-simple w-5 text-center text-base"></i>
                    <span class="font-medium text-sm">Stock Report</span>
                </div>
                <i
                    class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-open:rotate-180 transition-transform duration-200"></i>
            </summary>
            <div class="mt-1 ml-5 pl-4 border-l border-gray-100 flex flex-col space-y-1">
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Stock
                    Report</a>
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Stock
                    Report Batch</a>
            </div>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden">
            <summary
                class="flex items-center justify-between p-3 rounded-xl text-gray-500 hover:bg-gray-50 hover:text-gray-800 cursor-pointer transition-all list-none">
                <div class="flex items-center space-x-3">
                    <i class="fa-regular fa-user w-5 text-center text-base"></i>
                    <span class="font-medium text-sm">Manufacturer</span>
                </div>
                <i
                    class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-open:rotate-180 transition-transform duration-200"></i>
            </summary>
            <div class="mt-1 ml-5 pl-4 border-l border-gray-100 flex flex-col space-y-1">
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Manufacturer
                    List</a>
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Manufacturer
                    Ledger</a>
            </div>
        </details>

        <details class="group [&_summary::-webkit-details-marker]:hidden">
            <summary
                class="flex items-center justify-between p-3 rounded-xl text-gray-500 hover:bg-gray-50 hover:text-gray-800 cursor-pointer transition-all list-none">
                <div class="flex items-center space-x-3">
                    <i class="fa-regular fa-address-card w-5 text-center text-base"></i>
                    <span class="font-medium text-sm">Employee</span>
                </div>
                <i
                    class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-open:rotate-180 transition-transform duration-200"></i>
            </summary>
            <div class="mt-1 ml-5 pl-4 border-l border-gray-100 flex flex-col space-y-1">
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Employee</a>
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Attendance</a>
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Payroll</a>
                <a href="#"
                    class="py-2 px-3 text-sm text-gray-500 hover:text-[#149387] rounded-lg transition-colors">Expense</a>
            </div>
        </details>

        <a href="#"
            class="flex items-center space-x-3 p-3 rounded-xl text-gray-500 hover:bg-gray-50 hover:text-gray-800 transition-all">
            <i class="fa-solid fa-gear w-5 text-center text-base"></i>
            <span class="font-medium text-sm">Settings</span>
        </a>
    </nav>

    <div class="p-4 border-t border-gray-100 shrink-0 bg-white">
        <a href="{{ route('login') }}"
            class="flex items-center space-x-3 p-3 text-red-500 hover:bg-red-50 rounded-xl transition-all">
            <i class="fa-solid fa-right-from-bracket w-5 text-center"></i>
            <span class="font-medium text-sm">Logout</span>
        </a>
    </div>
</aside>