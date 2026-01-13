<!-- Extends Layout -->
@extends('auth.components.layout')
<!-- Section Content -->
@section('content')
    <!-- Include Message Modal Component -->
    @include('auth.components.message-modal')

    <!-- Wrapper -->
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50"
        style="background-image: url('{{ asset('img/background/login-background.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-blend-mode: overlay;">
        <!-- Main container -->
        <div class="w-[900px] max-w-[95%] bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            <div class="flex w-full bg-white rounded-2xl overflow-hidden">
                <!-- Left side (form) -->
                <div class="w-1/2 p-10 bg-gradient-to-br from-white to-blue-50">
                    <!-- Title -->
                    <div class="mb-6">
                        <div class="flex items-center justify-center gap-3 mb-3">
                            <img src="{{ asset('img/logo/logo-bemkm-udinus.png') }}" alt="Logo"
                                class="h-10 w-auto object-contain">
                            <h2 class="text-3xl font-bold text-gray-900">
                                <span
                                    class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">BEMKM
                                    UDINUS</span>
                            </h2>
                        </div>
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="mb-5">
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Alamat Email
                            </label>
                            <div class="relative">
                                <span id="emailIconWrap"
                                    class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400 transition-colors duration-200">
                                    <svg id="emailIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-5 h-5">
                                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                                        <rect x="2" y="4" width="20" height="16" rx="2" />
                                    </svg>
                                </span>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" required
                                    autofocus autocomplete="username"
                                    class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm transition-all duration-200 hover:border-blue-400"
                                    placeholder="nama@email.com" />
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                                Kata Sandi
                            </label>
                            <div class="relative">
                                <!-- Icon kiri (lock) -->
                                <span id="passwordIconWrap"
                                    class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400 transition-colors duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-5 h-5">
                                        <circle cx="12" cy="16" r="1" />
                                        <rect x="3" y="10" width="18" height="12" rx="2" />
                                        <path d="M7 10V7a5 5 0 0 1 10 0v3" />
                                    </svg>
                                </span>

                                <!-- Input password -->
                                <input id="password" name="password" type="password" required
                                    autocomplete="current-password"
                                    class="block w-full pl-12 pr-12 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm transition-all duration-200 hover:border-blue-400"
                                    placeholder="Masukkan kata sandi" />

                                <!-- Icon kanan (toggle visibility) -->
                                <button type="button" id="togglePassword"
                                    class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400 hover:text-blue-600 focus:outline-none transition-colors duration-200">
                                    <!-- Eye (default visible) -->
                                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>

                                    <!-- Eye Closed (hidden by default) -->
                                    <svg id="eyeClosedIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="hidden">
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
                        {{-- @if (Route::has('password.request'))
                            <div class="text-right mb-6">
                                <a href="{{ route('password.request') }}"
                                    class="text-sm text-blue-600 hover:text-blue-700 font-medium inline-flex items-center gap-1 transition-colors duration-200">
                                    Lupa Kata Sandi?
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </div>
                        @endif --}}

                        <!-- Login Button -->
                        <div class="mt-6">
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center gap-2">
                                <span>Masuk</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                                    <polyline points="10 17 15 12 10 7" />
                                    <line x1="15" y1="12" x2="3" y2="12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Login with Others -->
                        <div class="my-6 flex items-center">
                            <div class="flex-1 h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent"></div>
                            <div class="px-4 text-center text-gray-500 text-sm font-medium">Atau masuk dengan</div>
                            <div class="flex-1 h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent"></div>
                        </div>

                        <div class="space-y-3">
                            <a href="{{ route('auth.redirect') }}"
                                class="group w-full flex items-center justify-center gap-3 border-2 border-gray-300 rounded-xl py-3 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:border-blue-400 transition-all duration-200 hover:shadow-md">
                                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5"
                                    alt="google">
                                <span
                                    class="text-sm font-semibold text-gray-700 group-hover:text-blue-700 transition-colors">Masuk
                                    dengan Google</span>
                            </a>
                        </div>
                    </form>
                </div>

                <!-- Right side (image + visual graphic background with slider) -->
                <div
                    class="w-1/2 flex items-center justify-center p-10 bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-600 relative overflow-hidden">
                    <!-- Slider Container -->
                    <div class="relative w-full h-full flex items-center justify-center z-10" id="sliderContainer">
                        <!-- Decorative animated circles -->
                        <div aria-hidden="true"
                            class="absolute top-10 left-10 w-32 h-32 rounded-full bg-white/10 backdrop-blur-sm animate-pulse">
                        </div>
                        <div aria-hidden="true"
                            class="absolute bottom-20 right-16 w-40 h-40 rounded-full bg-white/10 backdrop-blur-sm animate-pulse delay-75">
                        </div>
                        <div aria-hidden="true"
                            class="absolute top-1/2 right-10 w-24 h-24 rounded-full bg-white/10 backdrop-blur-sm animate-pulse delay-150">
                        </div>

                        <!-- Diagonal gradient overlay -->
                        <div aria-hidden="true" class="absolute inset-0 pointer-events-none">
                            <div
                                class="absolute -left-20 top-1/4 w-[420px] h-[220px] bg-gradient-to-r from-white/5 to-transparent transform -skew-x-12 rotate-6">
                            </div>
                            <div
                                class="absolute -right-20 bottom-1/4 w-[420px] h-[220px] bg-gradient-to-l from-white/5 to-transparent transform skew-x-12 -rotate-6">
                            </div>
                        </div>

                        <!-- Slides Wrapper -->
                        <div class="relative w-full h-full overflow-hidden">
                            <!-- Slide 1 -->
                            <div
                                class="slider-item absolute inset-0 flex items-center justify-center transition-transform duration-700 ease-in-out translate-x-0">
                                <div class="relative text-center">
                                    <div
                                        class="mb-6 inline-block p-8 rounded-2xl bg-white/10 backdrop-blur-md shadow-2xl border border-white/20">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-[200px] h-[200px] text-white drop-shadow-2xl" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                    </div>
                                    <div class="mt-8 px-8">
                                        <h3 class="text-2xl font-bold text-white mb-3 drop-shadow-lg">
                                            Portal Admin
                                        </h3>
                                        <p class="text-blue-100 text-sm leading-relaxed drop-shadow-md">
                                            Akses penuh untuk mengelola seluruh konten, kegiatan, dan fitur website BEM KM
                                            UDINUS
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div
                                class="slider-item absolute inset-0 flex items-center justify-center transition-transform duration-700 ease-in-out translate-x-full">
                                <div class="relative text-center">
                                    <div
                                        class="mb-6 inline-block p-8 rounded-2xl bg-white/10 backdrop-blur-md shadow-2xl border border-white/20">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-[200px] h-[200px] text-white drop-shadow-2xl" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="mt-8 px-8">
                                        <h3 class="text-2xl font-bold text-white mb-3 drop-shadow-lg">
                                            Manajemen Konten
                                        </h3>
                                        <p class="text-blue-100 text-sm leading-relaxed drop-shadow-md">
                                            Kelola berita, program kerja, dan informasi organisasi secara terpusat
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div
                                class="slider-item absolute inset-0 flex items-center justify-center transition-transform duration-700 ease-in-out translate-x-full">
                                <div class="relative text-center">
                                    <div
                                        class="mb-6 inline-block p-8 rounded-2xl bg-white/10 backdrop-blur-md shadow-2xl border border-white/20">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-[200px] h-[200px] text-white drop-shadow-2xl" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </div>
                                    <div class="mt-8 px-8">
                                        <h3 class="text-2xl font-bold text-white mb-3 drop-shadow-lg">
                                            Data Anggota & Unit
                                        </h3>
                                        <p class="text-blue-100 text-sm leading-relaxed drop-shadow-md">
                                            Kelola data anggota, unit organisasi, dan struktur kepengurusan BEM KM
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider Navigation Dots -->
                        <div class="absolute bottom-1 left-1/2 transform -translate-x-1/2 flex gap-3 z-20">
                            <button onclick="goToSlide(0)"
                                class="slider-dot w-3 h-3 rounded-full bg-white transition-all duration-300 opacity-100 scale-110"
                                aria-label="Slide 1"></button>
                            <button onclick="goToSlide(1)"
                                class="slider-dot w-3 h-3 rounded-full bg-white/40 hover:bg-white/60 transition-all duration-300"
                                aria-label="Slide 2"></button>
                            <button onclick="goToSlide(2)"
                                class="slider-dot w-3 h-3 rounded-full bg-white/40 hover:bg-white/60 transition-all duration-300"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>

                    <!-- Abstract shapes -->
                    <svg aria-hidden="true" class="absolute right-0 top-0 w-64 h-64 opacity-10" viewBox="0 0 200 200"
                        xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="g1" x1="0" x2="1">
                                <stop offset="0%" stop-color="#ffffff" stop-opacity="0.3" />
                                <stop offset="100%" stop-color="#ffffff" stop-opacity="0.1" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#g1)"
                            d="M43.6,-55.6C57.9,-47.2,71.7,-36.6,76.8,-22.9C82,-9.2,78.5,8.6,69.7,22.3C60.8,36,46.6,45.6,31.1,52C15.6,58.5,-0.2,61.8,-17.6,59.3C-35.1,56.8,-54.1,48.4,-61.6,34.4C-69,20.5,-65,0.9,-56.1,-12.7C-47.2,-26.4,-33.4,-33.2,-19.4,-40.6C-5.5,-48,8.8,-56.1,22.6,-59.1C36.3,-62,50.6,-60,43.6,-55.6Z"
                            transform="translate(100 100)" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Script -->
    <script>
        let currentSlide = 0;
        const totalSlides = 3;
        let autoSlideInterval;

        function goToSlide(index) {
            const slides = document.querySelectorAll('.slider-item');
            const dots = document.querySelectorAll('.slider-dot');

            // Reset current slide
            slides[currentSlide].classList.remove('translate-x-0');
            slides[currentSlide].classList.add('-translate-x-full');
            dots[currentSlide].classList.remove('opacity-100', 'scale-110');
            dots[currentSlide].classList.add('opacity-40');

            // Set new slide
            currentSlide = index;
            slides[currentSlide].classList.remove('translate-x-full', '-translate-x-full');
            slides[currentSlide].classList.add('translate-x-0');
            dots[currentSlide].classList.remove('opacity-40');
            dots[currentSlide].classList.add('opacity-100', 'scale-110');

            // Reset inactive slides position
            slides.forEach((slide, i) => {
                if (i !== currentSlide) {
                    slide.classList.remove('translate-x-0', '-translate-x-full');
                    slide.classList.add('translate-x-full');
                }
            });

            // Reset auto slide timer
            clearInterval(autoSlideInterval);
            startAutoSlide();
        }

        function nextSlide() {
            const nextIndex = (currentSlide + 1) % totalSlides;
            goToSlide(nextIndex);
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 4000); // Change slide every 4 seconds
        }

        // Start auto slide when page loads
        document.addEventListener('DOMContentLoaded', function() {
            startAutoSlide();
        });
    </script>
@endsection
