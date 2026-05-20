<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedStock - Forgot Password</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#F4F5F6] min-h-screen flex items-center justify-center font-sans overflow-hidden">

    <div class="relative w-full max-w-md p-6 flex flex-col items-center">
        
        <div class="mb-8">
            <img src="{{ asset('picture/logoSejajar.png') }}" alt="MedStock Logo" class="h-12 w-auto object-contain">
        </div>

        <div class="w-full bg-white rounded-3xl shadow-xl shadow-gray-200/50 p-8 relative z-10">
            
            <a href="{{ $step == 1 ? route('login') : route('password.request', ['step' => $step - 1, 'method' => $method, 'target' => $target]) }}" class="absolute top-6 left-6 text-gray-600 hover:text-black transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </a>

            @if($errors->has('error'))
                <div class="bg-red-50 text-red-500 p-3 rounded-xl text-xs mb-4 text-center border border-red-100">
                    {{ $errors->first('error') }}
                </div>
            @endif

            <form action="{{ route('password.process') }}" method="POST" class="space-y-6">
                @csrf
                <input type="hidden" name="step" value="{{ $step }}">
                <input type="hidden" name="method" id="method-hidden" value="{{ $method }}">

                @if($step == 1)
                    <div class="text-center space-y-2">
                        <h2 class="text-2xl font-bold text-gray-700">Forgot Your Password?</h2>
                        <p class="text-xs text-gray-400 px-4">Enter your email or your phone number, we will send you confirmation code</p>
                    </div>

                    <div class="bg-[#F9FAFB] p-1 rounded-full flex border border-gray-100">
                        <button type="button" onclick="switchMethod('email')" id="btn-email" class="w-1/2 py-2 text-sm font-semibold rounded-full transition-all cursor-pointer {{ $method == 'email' ? 'bg-white text-[#149387] shadow-sm' : 'text-gray-400' }}">
                            Email
                        </button>
                        <button type="button" onclick="switchMethod('phone')" id="btn-phone" class="w-1/2 py-2 text-sm font-semibold rounded-full transition-all cursor-pointer {{ $method == 'phone' ? 'bg-white text-[#149387] shadow-sm' : 'text-gray-400' }}">
                            Phone
                        </button>
                    </div>

                    <div class="relative flex items-center">
                        <span id="icon-email" class="absolute left-4 text-gray-400 {{ $method == 'phone' ? 'hidden' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5A2.25 2.25 0 0 1 2.25 17.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" /></svg>
                        </span>
                        <span id="icon-phone" class="absolute left-4 text-gray-400 {{ $method == 'email' ? 'hidden' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.387a12.035 12.035 0 0 1-7.108-7.108c-.157-.44.009-.926.386-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>
                        </span>

                        <input type="text" name="target" id="target-input" value="{{ old('target', $target) }}" placeholder="{{ $method == 'email' ? 'jamesschleifer@gmail.com' : '085281882151' }}" class="w-full pl-12 pr-12 py-3 bg-[#F9FAFB] border border-gray-100 rounded-xl focus:outline-none focus:border-[#149387] focus:bg-white text-gray-700 transition-colors" required>
                        
                        <span class="absolute right-4 text-emerald-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                        </span>
                    </div>

                    <div class="pt-2 flex justify-center">
                        <button type="submit" class="w-3/4 bg-[#149387] hover:bg-[#0f7067] text-white font-semibold py-3 px-6 rounded-full shadow-lg shadow-[#149387]/30 transform active:scale-95 transition-all text-center cursor-pointer">
                            Reset Password
                        </button>
                    </div>
                @endif


                @if($step == 2)
                    <div class="text-center space-y-2">
                        <h2 class="text-2xl font-bold text-gray-700">Enter Verification Code</h2>
                        <p class="text-xs text-gray-400 px-4">
                            Enter code that we have sent to your {{ $method }} <br>
                            <span class="text-gray-700 font-medium">
                                {{ $method == 'email' ? substr($target, 0, 4).'***'.strrchr($target, '@') : substr($target, 0, 7).'***' }}
                            </span>
                        </p>
                    </div>

                    <input type="hidden" name="target" value="{{ $target }}">

                    <div class="flex justify-center gap-3 my-4">
                        <input type="text" name="otp[]" maxlength="1" class="otp-box w-14 h-14 bg-gray-100 rounded-2xl text-center text-xl font-bold text-gray-800 focus:outline-none focus:bg-white focus:ring-2 focus:ring-[#149387]" required>
                        <input type="text" name="otp[]" maxlength="1" class="otp-box w-14 h-14 bg-gray-100 rounded-2xl text-center text-xl font-bold text-gray-800 focus:outline-none focus:bg-white focus:ring-2 focus:ring-[#149387]" required>
                        <input type="text" name="otp[]" maxlength="1" class="otp-box w-14 h-14 bg-gray-100 rounded-2xl text-center text-xl font-bold text-gray-800 focus:outline-none focus:bg-white focus:ring-2 focus:ring-[#149387]" required>
                        <input type="text" name="otp[]" maxlength="1" class="otp-box w-14 h-14 bg-gray-100 rounded-2xl text-center text-xl font-bold text-gray-800 focus:outline-none focus:bg-white focus:ring-2 focus:ring-[#149387]" required>
                    </div>

                    <div class="pt-2 flex justify-center">
                        <button type="submit" class="w-3/4 bg-[#149387] hover:bg-[#0f7067] text-white font-semibold py-3 px-6 rounded-full shadow-lg shadow-[#149387]/30 transform active:scale-95 transition-all text-center cursor-pointer">
                            Verify
                        </button>
                    </div>
                @endif


                @if($step == 3)
                    <div class="text-center space-y-2">
                        <h2 class="text-2xl font-bold text-gray-700">Create New Password</h2>
                        <p class="text-xs text-gray-400 px-4">Create your new password to login</p>
                    </div>

                    <div class="space-y-4">
                        <div class="relative flex items-center">
                            <span class="absolute left-4 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" /></svg>
                            </span>
                            <input type="password" name="password" placeholder="Password" class="w-full pl-12 pr-12 py-3 bg-[#F9FAFB] border border-gray-100 rounded-xl focus:outline-none focus:border-[#149387] text-gray-700" required>
                        </div>

                        <div class="relative flex items-center">
                            <span class="absolute left-4 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" /></svg>
                            </span>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full pl-12 pr-12 py-3 bg-[#F9FAFB] border border-gray-100 rounded-xl focus:outline-none focus:border-[#149387] text-gray-700" required>
                        </div>
                    </div>

                    <div class="pt-2 flex justify-center">
                        <button type="submit" class="w-3/4 bg-[#149387] hover:bg-[#0f7067] text-white font-semibold py-3 px-6 rounded-full shadow-lg shadow-[#149387]/30 transform active:scale-95 transition-all text-center cursor-pointer">
                            Create Password
                        </button>
                    </div>
                @endif
            </form>
        </div>
    </div>

    @if($step == 4)
        <div class="fixed inset-0 bg-gray-500/30 backdrop-blur-xs flex items-center justify-center z-50 animate-fade-in">
            <div class="bg-white rounded-3xl p-10 max-w-sm w-full mx-6 text-center shadow-2xl space-y-6 flex flex-col items-center">
                <div class="w-24 h-24 bg-emerald-50 rounded-full flex items-center justify-center text-[#149387]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75 6 6 9-13.5" />
                    </svg>
                </div>
                
                <div class="space-y-2">
                    <h3 class="text-xl font-bold text-gray-800">Success</h3>
                    <p class="text-sm text-gray-400">You have successfully reset your password.</p>
                </div>

                <a href="{{ route('login') }}" class="w-2/3 bg-[#149387] hover:bg-[#0f7067] text-white font-semibold py-2.5 px-6 rounded-full shadow-md text-center transition-all transform active:scale-95">
                    Login
                </a>
            </div>
        </div>
    @endif

    <script>
        function switchMethod(type) {
            const btnEmail = document.getElementById('btn-email');
            const btnPhone = document.getElementById('btn-phone');
            const iconEmail = document.getElementById('icon-email');
            const iconPhone = document.getElementById('icon-phone');
            const targetInput = document.getElementById('target-input');
            const methodHidden = document.getElementById('method-hidden');

            methodHidden.value = type;

            if (type === 'email') {
                btnEmail.className = "w-1/2 py-2 text-sm font-semibold rounded-full bg-white text-[#149387] shadow-sm transition-all cursor-pointer";
                btnPhone.className = "w-1/2 py-2 text-sm font-semibold rounded-full text-gray-400 transition-all cursor-pointer";
                iconEmail.classList.remove('hidden');
                iconPhone.classList.add('hidden');
                targetInput.placeholder = "jamesschleifer@gmail.com";
            } else {
                btnPhone.className = "w-1/2 py-2 text-sm font-semibold rounded-full bg-white text-[#149387] shadow-sm transition-all cursor-pointer";
                btnEmail.className = "w-1/2 py-2 text-sm font-semibold rounded-full text-gray-400 transition-all cursor-pointer";
                iconPhone.classList.remove('hidden');
                iconEmail.classList.add('hidden');
                targetInput.placeholder = "085281882151";
            }
        }

        const fields = document.querySelectorAll('.otp-box');
        fields.forEach((field, index) => {
            field.addEventListener('input', (e) => {
                if (e.target.value.length >= 1 && index < fields.length - 1) {
                    fields[index + 1].focus();
                }
            });
            field.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && e.target.value.length === 0 && index > 0) {
                    fields[index - 1].focus();
                }
            });
        });
    </script>
</body>
</html>