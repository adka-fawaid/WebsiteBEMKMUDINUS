<section class="min-h-screen bg-[#0c3a59] flex items-center py-16 md:py-20 lg:py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="mb-8 md:mb-12">
            <h2 class="text-center font-bold mb-3 text-[#f6b43b] text-2xl md:text-3xl lg:text-4xl">Berita Terbaru BEM KM
                UDINUS</h2>
            <p class="text-center text-white/50 text-sm md:text-base">Update kegiatan, acara, dan informasi terbaru
                seputar BEM KM UDINUS</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            {{-- contoh 3 card statis, nanti bisa kamu ganti dinamis --}}
            @for ($i = 1; $i <= 3; $i++)
                <div class="group">
                    <div
                        class="bg-black/[0.18] rounded-2xl overflow-hidden border border-white/[0.08] relative transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:border-[#f6b43b]/30">
                        <img src="{{ asset('assets/images/foto_bersama.jpeg') }}"
                            class="w-full h-48 md:h-56 lg:h-64 object-cover transition-transform duration-300 group-hover:scale-110"
                            alt="Berita">
                        <div
                            class="absolute left-3 top-3 bg-[#f6b43b] text-[#111] font-bold px-3 py-2.5 rounded-xl leading-tight text-xs shadow-lg">
                            Webinar<br>International</div>
                        <div class="p-4 md:p-5">
                            <div class="font-semibold text-white text-base md:text-lg mb-1">Webinar International</div>
                            <div class="text-white/50 text-sm">BEM KM UDINUS</div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
