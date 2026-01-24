<section
    class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-orange-50/50 flex items-center py-16 md:py-20 lg:py-24 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-orange-400/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-start">
            {{-- FOTO PRESMA --}}
            <div class="lg:col-span-5 text-center lg:-ml-20">
                <div class="relative inline-block group">
                    <!-- Card Container -->
                    <div class="group bg-white rounded-3xl shadow-xl shadow-blue-500/10 border border-gray-100 transform transition-all duration-500 hover:-translate-y-2 overflow-visible max-w-lg mx-auto">
                        
                        <!-- Foto Section: Dikecilkan dengan margin yang pas -->
                        <div class="relative rounded-2xl aspect-[1/1] overflow-hidden m-2 shadow-inner">
                            <img src="{{ asset('assets/images/presma.JPG') }}"
                                class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110"
                                alt="Presiden Mahasiswa">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>

                        <!-- Info Section: Padding dikurangi (p-3) dan Margin Top disesuaikan (-mt-8) -->
                        <div class="px-4 pb-6 -mt-8 relative z-10">
                            <div class="bg-white rounded-xl p-3 shadow-lg border border-gray-50 text-center transform transition-all">
                                <!-- Nama: Font size dikecilkan ke text-base -->
                                <h4 class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-blue-900 font-extrabold text-base mb-1 uppercase tracking-tight">
                                    {{ $sambutan->nama }}
                                </h4>
                                
                                <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2"></div>

                                <!-- Jabatan: Font size dikecilkan ke text-[10px] atau text-xs -->
                                <div class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase">
                                    Presiden Mahasiswa 2025/2026
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Decorative Accent -->
                    <div
                        class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-br from-orange-400 to-orange-500 rounded-full opacity-20 blur-xl">
                    </div>
                    <div
                        class="absolute -bottom-4 -left-4 w-24 h-24 bg-gradient-to-br from-blue-400 to-blue-500 rounded-full opacity-20 blur-xl">
                    </div>
                </div>
            </div>

            {{-- TEKS SAMBUTAN --}}
            <div class="lg:col-span-7">
                <div class="mb-5">
                    <h2
                        class="font-bold bg-gradient-to-r from-blue-700 to-blue-900 bg-clip-text text-transparent mb-4 text-3xl md:text-4xl lg:text-5xl leading-tight whitespace-nowrap">
                        Sambutan Presiden Mahasiswa
                    </h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-blue-600 rounded-full"></div>
                </div>

                <div class="space-y-6">
                    <div
                            class="relative bg-white/80 backdrop-blur-sm rounded-2xl p-6 border-l-4 border-blue-500 shadow-lg shadow-blue-500/5">

                            <div class="flex items-start gap-2">

                                <span class="text-3xl text-orange-500 font-serif leading-none mt-1">“</span>

                                <!-- Teks -->
                                <p class="text-gray-700 leading-relaxed text-sm md:text-base lg:text-lg text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia a laboriosam maxime
                                    perspiciatis impedit eos incidunt ducimus non corrupti expedita nisi, quam natus corporis,
                                    quaerat aspernatur cumque, qui molestiae placeat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia a laboriosam maxime
                                    perspiciatis impedit eos incidunt ducimus non corrupti expedita nisi, quam natus corporis,
                                    quaerat aspernatur cumque, qui molestiae placeat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia a laboriosam maxime
                                    perspiciatis impedit eos incidunt ducimus non corrupti expedita nisi, quam natus corporis,
                                    quaerat aspernatur cumque, qui molestiae placeat.
                                </p>
                                <span class="absolute bottom-4 right-6 text-3xl text-orange-500 font-serif leading-none">”</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Divider -->
        <div class="flex items-center justify-center mt-16 md:mt-20">
            <div class="flex-1 h-px bg-gradient-to-r from-transparent to-orange-500 max-w-xs"></div>
            <div class="w-4 h-4 mx-4 bg-orange-500 rotate-45 transform origin-center"></div>
            <div class="flex-1 h-px bg-gradient-to-l from-transparent to-orange-500 max-w-xs"></div>
        </div>
    </div>
</section>
