<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BEMKMUDINUS') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Tailwind + Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Blink animation -->
    <style>
        @keyframes blinkSlow {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.3;
            }
        }

        .animate-blink-slow {
            animation: blinkSlow 2.5s ease-in-out infinite;
        }
    </style>
</head>

<body class="antialiased font-inter bg-[#ebe7ff] text-gray-900">

    <!-- Include Message Modal Component -->
    @include('auth.components.message-modal')

    {{-- Toast error login (pojok kanan atas) --}}
    {{-- @php
        $loginError = $errors->first('email') ?: $errors->first('password');
    @endphp
    @if ($loginError)
        <div id="toast-error" class="fixed top-4 right-4 z-50 transition-all duration-300">
            <div class="flex items-start gap-3 bg-red-600 text-white px-4 py-3 rounded-lg shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 mt-0.5" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path
                        d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                    <line x1="12" y1="9" x2="12" y2="13" />
                    <line x1="12" y1="17" x2="12.01" y2="17" />
                </svg>
                <div class="text-sm font-medium">{{ $loginError }}</div>
                <button type="button" id="toastClose" class="ml-2 text-white/80 hover:text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>
            </div>
        </div>
    @endif --}}

    <!-- Wrapper -->
    <div class="min-h-screen flex items-center justify-center"
        style="background-image: url('{{ asset('img/background/login-background.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <!-- Main container -->
        <div class="flex w-[900px] max-w-[95%] bg-white rounded-3xl shadow-lg overflow-hidden">
            <div class="flex w-[900px] bg-white rounded-3xl shadow-lg overflow-hidden">
                <!-- Left side (form) -->
                <div class="w-1/2 p-10">
                    <!-- Title -->
                    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Selamat Datang <span
                            class="text-blue-900">Aksa Sinergi</span></h2>
                    <p class="text-center text-gray-500 mb-6 text-xs">Silahkan masuk untuk bersinergi dalam satu aksi
                        bersama BEMKM</p>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="mb-5">
                            <div class="relative mt-1">
                                <span id="emailIconWrap"
                                    class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 transition-colors duration-150">
                                    <svg id="emailIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                                        <rect x="2" y="4" width="20" height="16" rx="2" />
                                    </svg>
                                </span>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" required
                                    autofocus autocomplete="username"
                                    class="block w-full pl-9 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                                    placeholder="Masukkan Alamat Email" />
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <div class="relative mt-1">
                                <!-- Icon kiri (lock) -->
                                <span id="passwordIconWrap"
                                    class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-lock-keyhole w-4 h-4">
                                        <circle cx="12" cy="16" r="1" />
                                        <rect x="3" y="10" width="18" height="12" rx="2" />
                                        <path d="M7 10V7a5 5 0 0 1 10 0v3" />
                                    </svg>
                                </span>

                                <!-- Input password -->
                                <input id="password" name="password" type="password" required
                                    autocomplete="current-password"
                                    class="block w-full pl-9 pr-10 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                                    placeholder="Masukkan Kata Sandi" />

                                <!-- Icon kanan (toggle visibility) -->
                                <button type="button" id="togglePassword"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 focus:outline-none">
                                    <!-- Eye (default visible) -->
                                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>

                                    <!-- Eye Closed (hidden by default) -->
                                    <svg id="eyeClosedIcon" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-eye-closed hidden">
                                        <path d="m15 18-.722-3.25" />
                                        <path d="M2 8a10.645 10.645 0 0 0 20 0" />
                                        <path d="m20 15-1.726-2.05" />
                                        <path d="m4 15 1.726-2.05" />
                                        <path d="m9 18 .722-3.25" />
                                    </svg>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Forgot Password Link -->
                        @if (Route::has('password.request'))
                            <div class="text-right mb-3">
                                <a href="{{ route('password.request') }}"
                                    class="text-sm text-blue-500 hover:text-blue-800 font-medium">
                                    Lupa Kata Sandi?
                                </a>
                            </div>
                        @endif

                        <!-- Login Button -->
                        <div class="mt-6">
                            <button type="submit"
                                class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg font-semibold shadow-sm transition duration-200">
                                Login
                            </button>
                        </div>

                        <!-- Login with Others -->
                        <div class="my-4 flex items-center">
                            <div class="flex-1 h-px bg-gray-300"></div>
                            <div class="px-4 text-center text-gray-500 text-sm">Atau login dengan</div>
                            <div class="flex-1 h-px bg-gray-300"></div>
                        </div>

                        <div class="space-y-3">
                            <a href="{{ route('auth.redirect') }}"
                                class="w-full flex items-center justify-center gap-2 border border-gray-300 rounded-lg py-2 hover:bg-gray-50 transition">
                                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5"
                                    alt="google">
                                <span class="text-sm text-gray-700">Login with Google</span>
                            </a>
                        </div>
                    </form>
                </div>

                <!-- Right side (image + visual graphic background) -->
                <div class="w-1/2 flex items-center justify-center p-8">
                    <div class="relative w-full h-full flex items-center justify-center">
                        <!-- Background base with soft gradient -->
                        <div
                            class="absolute inset-0 rounded-3xl bg-gradient-to-br from-indigo-100 via-purple-50 to-white">
                        </div>

                        <!-- Decorative blurred circles / blobs -->
                        <div aria-hidden="true"
                            class="absolute -top-8 -left-8 w-48 h-48 rounded-full bg-indigo-300 opacity-40 filter blur-xl transform rotate-12">
                        </div>
                        <div aria-hidden="true"
                            class="absolute -bottom-10 -right-6 w-64 h-64 rounded-full bg-purple-300 opacity-30 filter blur-2xl transform -rotate-12">
                        </div>

                        <!-- Subtle SVG wave / abstract shape -->
                        <svg aria-hidden="true" class="absolute right-0 top-0 -mt-6 -mr-6 w-56 h-56 opacity-20"
                            viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="g1" x1="0" x2="1">
                                    <stop offset="0%" stop-color="#7c3aed" stop-opacity="0.35" />
                                    <stop offset="100%" stop-color="#60a5fa" stop-opacity="0.15" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#g1)"
                                d="M43.6,-55.6C57.9,-47.2,71.7,-36.6,76.8,-22.9C82,-9.2,78.5,8.6,69.7,22.3C60.8,36,46.6,45.6,31.1,52C15.6,58.5,-0.2,61.8,-17.6,59.3C-35.1,56.8,-54.1,48.4,-61.6,34.4C-69,20.5,-65,0.9,-56.1,-12.7C-47.2,-26.4,-33.4,-33.2,-19.4,-40.6C-5.5,-48,8.8,-56.1,22.6,-59.1C36.3,-62,50.6,-60,43.6,-55.6Z"
                                transform="translate(100 100)" />
                        </svg>

                        <!-- Diagonal stripe overlay -->
                        <div aria-hidden="true" class="absolute inset-0 pointer-events-none">
                            <div
                                class="absolute -left-20 top-1/4 w-[420px] h-[220px] bg-white/5 transform -skew-x-12 rotate-6">
                            </div>
                        </div>

                        <!-- Image container with subtle glass effect -->
                        <div class="relative">
                            <img src="{{ asset('img/logo/logo-kabinet2.png') }}" alt="Login Illustration"
                                class="rounded-3xl w-[300px] h-auto object-contain animate-blink-slow">
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // Toast auto-hide for login error (top-right)
                document.addEventListener('DOMContentLoaded', function() {
                    const toast = document.getElementById('toast-error');
                    const closeBtn = document.getElementById('toastClose');
                    if (!toast) return;

                    function hideToast() {
                        toast.classList.add('opacity-0', 'translate-x-2');
                        setTimeout(() => toast.remove(), 300);
                    }

                    const timer = setTimeout(hideToast, 5000);
                    if (closeBtn) {
                        closeBtn.addEventListener('click', function() {
                            clearTimeout(timer);
                            hideToast();
                        });
                    }
                });

                // Toggle Password Visibility
                document.addEventListener('DOMContentLoaded', function() {
                    const passwordInput = document.getElementById('password');
                    const togglePassword = document.getElementById('togglePassword');
                    const eyeIcon = document.getElementById('eyeIcon');
                    const eyeClosedIcon = document.getElementById('eyeClosedIcon');

                    togglePassword.addEventListener('click', function() {
                        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                        passwordInput.setAttribute('type', type);

                        // Toggle icons
                        eyeIcon.classList.toggle('hidden');
                        eyeClosedIcon.classList.toggle('hidden');
                    });
                });

                // Dynamic Email Icon Color Change
                document.addEventListener('DOMContentLoaded', function() {
                    const emailInput = document.getElementById('email');
                    const iconWrap = document.getElementById('emailIconWrap');

                    if (!emailInput || !iconWrap) return;

                    function updateIcon() {
                        if (document.activeElement === emailInput || emailInput.value.trim() !== '') {
                            iconWrap.classList.remove('text-gray-400');
                            iconWrap.classList.add('text-blue-500');
                        } else {
                            iconWrap.classList.remove('text-blue-500');
                            iconWrap.classList.add('text-gray-400');
                        }
                    }

                    ['focus', 'blur', 'input', 'change'].forEach(evt => {
                        emailInput.addEventListener(evt, updateIcon);
                    });

                    // initialize state
                    updateIcon();
                });

                // Dynamic Password Icon Color Change
                document.addEventListener('DOMContentLoaded', function() {
                    const passwordInput = document.getElementById('password');
                    const passwordIconWrap = document.getElementById('passwordIconWrap');
                    const eyeIcon = document.getElementById('eyeIcon');
                    const eyeClosedIcon = document.getElementById('eyeClosedIcon');

                    if (!passwordInput || !passwordIconWrap) return;

                    function updatePasswordIcon() {
                        const active = (document.activeElement === passwordInput || passwordInput.value.trim() !== '');

                        if (active) {
                            passwordIconWrap.classList.remove('text-gray-400');
                            passwordIconWrap.classList.add('text-blue-500');

                            if (eyeIcon) {
                                eyeIcon.classList.remove('text-gray-400');
                                eyeIcon.classList.add('text-blue-500');
                            }
                            if (eyeClosedIcon) {
                                eyeClosedIcon.classList.remove('text-gray-400');
                                eyeClosedIcon.classList.add('text-blue-500');
                            }
                        } else {
                            passwordIconWrap.classList.remove('text-blue-500');
                            passwordIconWrap.classList.add('text-gray-400');

                            if (eyeIcon) {
                                eyeIcon.classList.remove('text-blue-500');
                                eyeIcon.classList.add('text-gray-400');
                            }
                            if (eyeClosedIcon) {
                                eyeClosedIcon.classList.remove('text-blue-500');
                                eyeClosedIcon.classList.add('text-gray-400');
                            }
                        }
                    }

                    ['focus', 'blur', 'input', 'change'].forEach(evt => {
                        passwordInput.addEventListener(evt, updatePasswordIcon);
                    });

                    // initialize state
                    updatePasswordIcon();
                });
            </script>
        </div>
    </div>

</body>

</html>
