<section
    class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-blue-50 flex items-center py-16 md:py-20 lg:py-24 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-orange-400/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-start">
            {{-- FOTO PRESMA --}}
            <div class="lg:col-span-5 text-center">
                <div class="relative inline-block group">
                    <!-- Card Container -->
                    <div
                        class="bg-white rounded-3xl p-6 shadow-2xl shadow-blue-500/10 border border-gray-100 transform transition-all duration-500 group-hover:scale-105">
                        <div class="relative overflow-hidden rounded-2xl aspect-square w-full max-w-[400px] mx-auto">
                            <img src="{{ asset('storage/img/presiden-mahasiswa/' . $sambutan->foto) }}"
                                class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"
                                alt="Presiden Mahasiswa">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-blue-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
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

                <div class="text-center mt-6 space-y-2">
                    <span
                        class="inline-block bg-gradient-to-r from-orange-500 to-orange-600 text-white px-8 py-3 rounded-full font-bold text-base md:text-lg shadow-lg shadow-orange-500/30">
                        {{ $sambutan->nama }}
                    </span>
                    <div class="text-sm md:text-base text-gray-600 font-medium">Presiden Mahasiswa Periode 2025/2026
                    </div>
                </div>
            </div>

            {{-- TEKS SAMBUTAN --}}
            <div class="lg:col-span-7">
                <div class="mb-8">
                    <h2
                        class="font-bold bg-gradient-to-r from-blue-700 to-blue-900 bg-clip-text text-transparent mb-4 text-3xl md:text-4xl lg:text-5xl leading-tight whitespace-nowrap">
                        Sambutan Presiden Mahasiswa
                    </h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-blue-600 rounded-full"></div>
                </div>

                <div class="space-y-6">
                    <div
                        class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 border-l-4 border-blue-500 shadow-lg shadow-blue-500/5 hover:shadow-xl hover:shadow-blue-500/10 transition-all duration-300">
                        <span class="text-3xl text-orange-500 font-serif leading-none float-left mr-2 mt-1">"</span>
                        <p class="text-gray-700 leading-relaxed text-sm md:text-base lg:text-lg">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia a laboriosam maxime
                            perspiciatis impedit eos incidunt ducimus non corrupti expedita nisi, quam natus corporis,
                            quaerat aspernatur cumque, qui molestiae placeat.
                        </p>
                        <span class="text-3xl text-orange-500 font-serif leading-none float-left mr-2 mt-1">"</span>
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
