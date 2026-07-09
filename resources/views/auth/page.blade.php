<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedStock - Autentikasi</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .transition-all-custom {
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>
<body class="bg-[#F4F5F6] min-h-screen flex items-center justify-center font-sans overflow-hidden">

    <div class="relative w-full max-w-md p-6 flex flex-col items-center">
        
        <div id="logo-wrapper" class="transition-all-custom transform translate-y-[15vh] scale-150 flex flex-col items-center z-20">
            <img id="splash-logo" src="{{ asset('picture/logoKotak.png') }}" alt="MedStock Logo" class="w-24 h-auto object-contain">
            
            <img id="login-logo" src="{{ asset('picture/logoSejajar.png') }}" alt="MedStock Logo" class="h-12 w-auto object-contain hidden opacity-0 transition-opacity duration-500">
        </div>

        <div id="login-card" class="w-full bg-white rounded-3xl shadow-xl shadow-gray-200/50 p-8 mt-8 opacity-0 translate-y-10 transition-all-custom pointer-events-none z-10">
            <h2 class="text-2xl font-bold text-[#149387] text-center mb-6">Masuk</h2>

            @if($errors->has('loginError'))
                <div class="bg-red-50 text-red-500 p-3 rounded-xl text-sm mb-4 text-center border border-red-100">
                    {{ $errors->first('loginError') }}
                </div>
            @endif

            @if(session('success'))
                <div class="bg-emerald-50 text-emerald-600 p-3 rounded-xl text-sm mb-4 text-center border border-emerald-100">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('login.submit') }}" method="POST" class="space-y-4">
                @csrf
                
                <div class="relative flex items-center">
                    <span class="absolute left-4 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5A2.25 2.25 0 0 1 2.25 17.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </span>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="w-full pl-12 pr-4 py-3 bg-[#F9FAFB] border border-gray-100 rounded-xl focus:outline-none focus:border-[#149387] focus:bg-white text-gray-700 placeholder-gray-400 transition-colors" required>
                </div>

                <div class="relative flex items-center">
                    <span class="absolute left-4 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </span>
                    <input type="password" name="password" id="password" placeholder="Password" class="w-full pl-12 pr-12 py-3 bg-[#F9FAFB] border border-gray-100 rounded-xl focus:outline-none focus:border-[#149387] focus:bg-white text-gray-700 placeholder-gray-400 transition-colors" required>
                    <button type="button" onclick="togglePassword()" class="absolute right-4 text-gray-400 hover:text-gray-600 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" id="eye-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </button>
                </div>

                <div class="relative flex items-center">
                    <span class="absolute left-4 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                        </svg>
                    </span>
                    <input type="text" name="id_pegawai" value="{{ old('id_pegawai') }}" placeholder="ID Pegawai" class="w-full pl-12 pr-4 py-3 bg-[#F9FAFB] border border-gray-100 rounded-xl focus:outline-none focus:border-[#149387] focus:bg-white text-gray-700 placeholder-gray-400 transition-colors" required>
                </div>

                <div class="text-center mt-2">
                    <a href="{{ route('password.request') }}" class="text-sm font-semibold text-[#149387] hover:underline">Lupa Password?</a>
                </div>

                <div class="pt-4 flex justify-center">
                    <button type="submit" class="w-3/4 bg-[#149387] hover:bg-[#0f7067] text-white font-semibold py-3 px-6 rounded-full shadow-lg shadow-[#149387]/30 transform active:scale-95 transition-all text-center cursor-pointer">
                        Masuk
                    </button>
                </div>
            </form>
        </div>

    </div>

    {{-- =================================================================== --}}
    {{-- MODAL NOTIFIKASI SUKSES (SETELAH RESET PASSWORD)                     --}}
    {{-- =================================================================== --}}
    @if (session('password_reset_success'))
        <!-- Modal Container -->
        <div id="successModal" class="fixed inset-0 bg-gray-800 bg-opacity-60 flex items-center justify-center z-50">
            <!-- Modal Content -->
            <div class="relative p-6 border w-full max-w-sm shadow-lg rounded-2xl bg-white transform transition-all scale-95 opacity-0" id="successModalContent">
                <div class="text-center">
                    <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-emerald-100">
                        <svg class="h-8 w-8 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <h3 class="text-xl leading-6 font-bold text-gray-800 mt-4">Sukses!</h3>
                    <div class="mt-2 px-4 py-3">
                        <p class="text-sm text-gray-600">
                            {{ session('password_reset_success') }}
                        </p>
                    </div>
                    <div class="items-center px-4 py-2">
                        <button id="closeModalBtn" class="w-full bg-[#149387] hover:bg-[#0f7067] text-white font-semibold py-2.5 px-6 rounded-lg shadow-lg shadow-[#149387]/30 transform active:scale-95 transition-all">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const modal = document.getElementById('successModal');
                const modalContent = document.getElementById('successModalContent');
                const closeModalBtn = document.getElementById('closeModalBtn');

                // Tampilkan modal dengan animasi
                setTimeout(() => {
                    modalContent.classList.remove('scale-95', 'opacity-0');
                }, 50);

                // Sembunyikan modal saat tombol 'Tutup' diklik
                closeModalBtn.addEventListener('click', () => modal.classList.add('hidden'));
            });
        </script>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const logoWrapper = document.getElementById('logo-wrapper');
            const splashLogo = document.getElementById('splash-logo');
            const loginLogo = document.getElementById('login-logo');
            const loginCard = document.getElementById('login-card');

            @if($errors->any() || session('success'))
                logoWrapper.classList.remove('translate-y-[15vh]', 'scale-150');
                splashLogo.classList.add('hidden');
                loginLogo.classList.remove('hidden', 'opacity-0');
                loginCard.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
            @else
                setTimeout(() => {
                    // 1. Geser logo ke atas & perkecil skalanya
                    logoWrapper.classList.remove('translate-y-[15vh]', 'scale-150');
                    
                    // 2. Ganti logo kotak menjadi logo sejajar secara smooth
                    splashLogo.classList.add('hidden');
                    loginLogo.classList.remove('hidden');
                    setTimeout(() => {
                        loginLogo.classList.remove('opacity-0');
                    }, 50);

                    // 3. Munculkan Form Card dengan efek fade-in up
                    loginCard.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
                }, 2000);
            @endif
        });

        // Toggle visibility Password (Show/Hide)
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.add('text-[#149387]');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('text-[#149387]');
            }
        }
    </script>
</body>
</html>