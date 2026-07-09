<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedStock Admin - @yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('picture/logoKotak.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/id.js"></script>

<body class="bg-[#F4F5F6] font-sans text-gray-700 antialiased">
    <div class="flex h-screen w-screen overflow-hidden relative">

        <div id="sidebar-overlay"
            class="fixed inset-0 bg-black/40 z-30 opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden"
            onclick="toggleSidebar()"></div>

        @include('layouts.admin.sidebar')

        <div class="flex-1 flex flex-col min-w-0 h-full overflow-hidden">
            @include('layouts.admin.navbar')

            <main class="flex-1 overflow-y-auto p-4 sm:p-6 focus:outline-none">
                @yield('content')
            </main>

            @include('layouts.admin.footer')
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('admin-sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('opacity-0');
            overlay.classList.toggle('pointer-events-none');
        }
    </script>
</body>

</html>