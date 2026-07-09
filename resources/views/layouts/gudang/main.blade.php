<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedStock Gudang - @yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e5e7eb;
            border-radius: 2px;
        }
    </style>
</head>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/id.js"></script>

<body class="bg-[#F4F5F6] font-sans antialiased text-gray-700">
    <div class="flex h-screen w-screen overflow-hidden relative">

        <div id="sidebar-overlay"
            class="fixed inset-0 bg-black/40 z-30 opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden"
            onclick="toggleSidebar()"></div>

        @include('layouts.gudang.sidebar')

        <div class="flex-1 flex flex-col min-w-0 h-full overflow-hidden">
            @include('layouts.gudang.navbar')

            <main class="flex-1 overflow-y-auto p-4 sm:p-6 focus:outline-none">
                @yield('content')
            </main>

            @include('layouts.gudang.footer')
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('gudang-sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            sidebar.classList.toggle('-translate-x-full');

            if (!sidebar.classList.contains('-translate-x-full')) {
                overlay.classList.remove('pointer-events-none', 'opacity-0');
                overlay.classList.add('opacity-100');
            } else {
                overlay.classList.remove('opacity-100');
                overlay.classList.add('pointer-events-none', 'opacity-0');
            }
        }

        function openModal(id) {
            const modal = document.getElementById(id);
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(id) {
            const modal = document.getElementById(id);
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('[id^="modal"]').forEach(m => m.classList.add('hidden'));
                document.body.style.overflow = 'auto';
            }
        });
    </script>
</body>

</html>