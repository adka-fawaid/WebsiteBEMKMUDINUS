<section id="hero-home"
    class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-blue-50 via-white to-indigo-50">

    <!-- Enhanced Background Pattern -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Animated gradient orbs -->
        <div class="absolute top-10 right-10 w-96 h-96 bg-gradient-to-br from-blue-200/30 to-blue-300/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 left-20 w-[500px] h-[500px] bg-gradient-to-tr from-indigo-200/25 to-blue-200/15 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 right-1/3 w-80 h-80 bg-gradient-to-bl from-orange-200/20 to-orange-100/10 rounded-full blur-3xl"></div>
        
        <!-- Subtle geometric patterns -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle at 2px 2px, #1e40af 1px, transparent 0); background-size: 40px 40px;"></div>
        
        <!-- Floating accent elements -->
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-blue-400/30 rounded-full animate-ping"></div>
        <div class="absolute top-3/4 right-1/4 w-3 h-3 bg-orange-400/30 rounded-full animate-ping" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-1/3 left-1/2 w-2 h-2 bg-indigo-400/30 rounded-full animate-ping" style="animation-delay: 2s;"></div>
    </div>

    <!-- Decorative top border -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-blue-500/50 to-transparent"></div>

    <!-- Content -->
    <div class="relative z-10 w-full">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center min-h-screen py-20">
                <!-- Left Content -->
                <div class="flex flex-col justify-center pl-0 lg:pl-8">
                    <!-- Main Heading with enhanced styling -->
                    <h1 class="font-extrabold tracking-tight text-blue-900 mb-2 text-5xl sm:text-6xl md:text-7xl leading-tight drop-shadow-sm">
                        BEM KM UDINUS
                    </h1>

                    <h1 class="font-extrabold tracking-tight text-[#1C4D8D] mb-[2rem] text-1xl sm:text-4xl md:text-5xl leading-tight drop-shadow-sm">
                        Kabinet <span class="text-[#FF8C00]">Aksa Sinergi</span>
                    </h1>

                    <!-- Decorative Divider -->
                    <div class="flex items-center mb-4">
                        <div class="h-1 w-28 bg-gradient-to-r from-blue-600 via-orange-500 to-blue-400 rounded-full"></div>
                    </div>  
                    
                    <!-- Tagline with improved shadow -->
                    <p class="text-[#ff7700] font-bold mb-4 text-2xl sm:text-3xl md:text-4xl"
                    style="font-family: 'Dancing Script', cursive; text-shadow: 2px 2px 4px rgba(255, 119, 0, 0.1), 0 0 20px rgba(255, 119, 0, 0.05);">
                        <span class="text-[#4A1A00]">"</span>Bersinergi dalam Satu Aksi<span class="text-[#4A1A00]">"</span>
                    </p>

                    <!-- Description -->
                    <p class="text-gray-700 mb-5 text-md sm:text-lg font-medium leading-relaxed max-w-2xl">
                        Bukan hanya tentang bekerja bersama tetapi tentang saling memahami dan tumbuh bersama.<br>
                        Kami bergerak dengan hati, menyatukan ide, tenaga, dan harapan demi membawa perubahan positif untuk Keluarga Besar mahasiswa UDINUS.
                    </p>

                    <!-- CTA Button with enhanced effects -->
                    <div class="flex justify-start">
                        <a href="/kabinet"
                            class="group inline-flex items-center gap-3 font-bold rounded-full px-12 py-3 text-lg bg-gradient-to-r from-blue-600 to-blue-700 text-white hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/50 hover:scale-105 transform ring-2 ring-blue-500/20 hover:ring-blue-500/40">
                            <span>Selengkapnya</span>
                            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Image Slider -->
                <div class="hidden lg:flex justify-center items-center">
                    <div class="w-full relative">
                        <!-- Slider Container with improved styling -->
                        <div class="group relative rounded-2xl overflow-hidden shadow-2xl shadow-blue-900/20 border-4 border-white/40 backdrop-blur-sm bg-white/10"
                            style="aspect-ratio: 16 / 9;">
                            
                            <!-- Slides -->
                            <div class="swiper-slider w-full h-full relative" id="heroSlider">
                                <!-- Slide 1: Struktural -->
                                <div class="swiper-slide absolute inset-0 transition-opacity duration-700 opacity-100" data-slide="0"
                                    style="background-image: url('{{ asset('img/background/foto_bersama.jpeg') }}'); background-position: center; background-size: cover;">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
                                        <div class="inline-flex items-center gap-2.5 bg-gradient-to-r from-blue-600/90 to-blue-700/90 backdrop-blur-md px-4 py-2.5 rounded-lg border-2 border-white/40 shadow-2xl hover:shadow-blue-500/50 transform hover:scale-105 transition-all duration-300 cursor-pointer">
                                            <!-- Lucide: users icon -->
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                                <circle cx="9" cy="7" r="4"/>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                            </svg>
                                            <div>
                                                <h3 class="text-white text-xl font-bold drop-shadow-lg leading-tight">Struktural</h3>
                                                <p class="text-blue-100 text-xs font-medium">Tim Inti Organisasi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 2: Webinter 2026 -->
                                <div class="swiper-slide absolute inset-0 transition-opacity duration-700 opacity-0 pointer-events-none" data-slide="1"
                                    style="background-image: url('{{ asset('img/background/foto_bersama.jpeg') }}'); background-position: center; background-size: cover;">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
                                        <div class="inline-flex items-center gap-2.5 bg-gradient-to-r from-orange-600/90 to-orange-700/90 backdrop-blur-md px-4 py-2.5 rounded-lg border-2 border-white/40 shadow-2xl hover:shadow-orange-500/50 transform hover:scale-105 transition-all duration-300 cursor-pointer">
                                            <!-- Lucide: globe icon -->
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <circle cx="12" cy="12" r="10"/>
                                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
                                                <path d="M2 12h20"/>
                                            </svg>
                                            <div>
                                                <h3 class="text-white text-xl font-bold drop-shadow-lg leading-tight">Webinter 2026</h3>
                                                <p class="text-orange-100 text-xs font-medium">Program Unggulan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 3: Kebersamaan -->
                                <div class="swiper-slide absolute inset-0 transition-opacity duration-700 opacity-0 pointer-events-none" data-slide="2"
                                    style="background-image: url('{{ asset('img/background/foto_bersama.jpeg') }}'); background-position: center; background-size: cover;">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
                                        <div class="inline-flex items-center gap-2.5 bg-gradient-to-r from-purple-600/90 to-purple-700/90 backdrop-blur-md px-4 py-2.5 rounded-lg border-2 border-white/40 shadow-2xl hover:shadow-purple-500/50 transform hover:scale-105 transition-all duration-300 cursor-pointer">
                                            <!-- Lucide: heart-handshake icon -->
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                                                <path d="M12 5 9.04 7.96a2.17 2.17 0 0 0 0 3.08v0c.82.82 2.13.85 3 .07l2.07-1.9a2.82 2.82 0 0 1 3.79 0l2.96 2.66"/>
                                                <path d="m18 15-2-2"/>
                                                <path d="m15 18-2-2"/>
                                            </svg>
                                            <div>
                                                <h3 class="text-white text-xl font-bold drop-shadow-lg leading-tight">Kebersamaan</h3>
                                                <p class="text-purple-100 text-xs font-medium">Solidaritas & Kolaborasi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Navigation Buttons - Hidden by default, shown on hover with slide animation -->
                            <button class="slider-prev absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white/30 hover:bg-white/50 backdrop-blur-sm text-white rounded-full p-3 shadow-lg opacity-0 -translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 hover:scale-110"
                                onclick="heroSliderPrev()">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                            <button class="slider-next absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-white/30 hover:bg-white/50 backdrop-blur-sm text-white rounded-full p-3 shadow-lg opacity-0 translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 hover:scale-110"
                                onclick="heroSliderNext()">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>

                            <!-- Dots Indicator with improved styling -->
                            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 flex gap-3">
                                <button class="slider-dot w-3 h-3 rounded-full bg-white/80 shadow-md transition-all cursor-pointer hover:scale-125" data-dot="0" onclick="heroSliderGo(0)"></button>
                                <button class="slider-dot w-3 h-3 rounded-full bg-white/40 shadow-md transition-all cursor-pointer hover:scale-125" data-dot="1" onclick="heroSliderGo(1)"></button>
                                <button class="slider-dot w-3 h-3 rounded-full bg-white/40 shadow-md transition-all cursor-pointer hover:scale-125" data-dot="2" onclick="heroSliderGo(2)"></button>
                            </div>
                        </div>

                        <!-- Decorative glow behind slider -->
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-400/20 to-indigo-400/20 rounded-3xl blur-2xl -z-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Script -->
    <script>
        let currentSlide = 0;
        const totalSlides = 3;
        let autoSlideInterval;

        function updateSlider() {
            // Update slides opacity and pointer events
            document.querySelectorAll('.swiper-slide').forEach((slide, index) => {
                slide.classList.toggle('opacity-100', index === currentSlide);
                slide.classList.toggle('opacity-0', index !== currentSlide);
                slide.classList.toggle('pointer-events-none', index !== currentSlide);
            });

            // Update dots
            document.querySelectorAll('.slider-dot').forEach((dot, index) => {
                if (index === currentSlide) {
                    dot.classList.add('bg-white/80', 'scale-125');
                    dot.classList.remove('bg-white/40');
                } else {
                    dot.classList.add('bg-white/40');
                    dot.classList.remove('bg-white/80', 'scale-125');
                }
            });

            // Reset auto-slide timer
            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(() => {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateSlider();
            }, 5000); // Change slide every 5 seconds
        }

        function heroSliderNext() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        function heroSliderPrev() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        function heroSliderGo(index) {
            currentSlide = index;
            updateSlider();
        }

        // Initialize slider
        updateSlider();
    </script>
</section>