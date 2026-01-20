<section class="bg-[#0c3a59] py-12">
    <div class="container">
        <h2 class="text-center font-bold mb-1 text-[#f6b43b] text-2xl md:text-3xl">Berita Terbaru BEM KM UDINUS</h2>
        <p class="text-center text-white/50 mb-4 small">Update kegiatan, acara, dan informasi terbaru seputar BEM KM
            UDINUS</p>

        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            {{-- contoh 3 card statis, nanti bisa kamu ganti dinamis --}}
            @for ($i = 1; $i <= 3; $i++)
                <div class="col">
                    <div class="bg-black/[0.18] rounded-2xl overflow-hidden border border-white/[0.08] relative">
                        <img src="{{ asset('assets/images/foto_bersama.jpeg') }}" class="w-100 h-[220px] object-cover"
                            alt="Berita">
                        <div
                            class="absolute left-3 top-3 bg-[#f6b43b] text-[#111] font-bold px-3 py-2.5 rounded-xl leading-tight text-xs">
                            Webinar<br>International</div>
                        <div class="p-3">
                            <div class="font-semibold text-white">Webinar International</div>
                            <div class="text-white/50 small">BEM KM UDINUS</div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
