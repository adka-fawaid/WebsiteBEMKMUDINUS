@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-br from-blue-50 via-white to-orange-50/50 py-20 min-h-screen relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-orange-400/5 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <!-- Hero Section -->
            <div class="text-center mb-16 mt-12">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-4">
                    Prosedur <span class="bg-gradient-to-r from-blue-600 to-orange-500 bg-clip-text text-transparent">Media Partner</span>
                </h1>
                
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-orange-500 rounded-full mx-auto mb-6"></div>
                
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Ikuti langkah-langkah berikut untuk menjadi media partner resmi BEM KM UDINUS dan berkontribusi dalam setiap kegiatan kami.
                </p>
            </div>

            <!-- Prosedur Content -->
            <div class="max-w-5xl mx-auto">
                <!-- Step by Step -->
                <div class="space-y-5 mb-16">
                    <!-- Step 1 -->
                    <div class="group bg-white rounded-2xl p-6 md:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex gap-5 md:gap-6">
                            <div class="shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">
                                    1
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Registrasi Online</h3>
                                <p class="text-gray-600 mb-4">Melakukan registrasi melalui formulir online di link berikut:</p>
                                <a href="https://forms.gle/hnysqrJzntXvF9Q18" target="_blank"
                                    class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold px-6 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    Buka Formulir Registrasi
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="group bg-white rounded-2xl p-6 md:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex gap-5 md:gap-6">
                            <div class="shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-orange-600 to-orange-700 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">
                                    2
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Pengiriman Poster</h3>
                                <p class="text-gray-600">Pengiriman poster <span class="font-bold text-orange-600 bg-orange-50 px-3 py-1 rounded-lg">maksimal H-3</span> dari waktu publikasi yang diinginkan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="group bg-white rounded-2xl p-6 md:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex gap-5 md:gap-6">
                            <div class="shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-purple-600 to-purple-700 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">
                                    3
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Pencantuman Logo</h3>
                                <p class="text-gray-600">Pihak pengaju <span class="font-bold text-purple-600 bg-purple-50 px-3 py-1 rounded-lg">wajib mencantumkan logo BEM KM UDINUS</span> sebagai tanda kerja sama.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="group bg-white rounded-2xl p-6 md:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex gap-5 md:gap-6">
                            <div class="shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">
                                    4
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Opsi Alternatif</h3>
                                <p class="text-gray-600">Jika poin ke-3 tidak dapat terpenuhi, maka pengaju dapat <span class="font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-lg">menyebutkan BEM KM UDINUS sebagai media partner</span> saat berjalannya acara.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 5 - Payment -->
                    <div class="group bg-gradient-to-br from-pink-50 to-rose-50 rounded-2xl p-6 md:p-8 shadow-lg border-2 border-rose-200 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex gap-5 md:gap-6">
                            <div class="shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-rose-600 to-pink-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">
                                    5
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Pembayaran</h3>
                                <p class="text-gray-700 mb-5">Bagi pihak internal dan eksternal <span class="font-bold text-rose-600">wajib membayar</span> sesuai paket yang dipilih:</p>

                                <div class="grid md:grid-cols-2 gap-4 mb-4">
                                    <div class="bg-white rounded-xl p-4 border border-rose-200 shadow-md hover:shadow-lg transition-all">
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-bold text-gray-700">1x Posting 24 Jam</span>
                                            <span class="text-2xl font-bold text-rose-600">Rp 30K</span>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-xl p-4 border border-rose-200 shadow-md hover:shadow-lg transition-all">
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-bold text-gray-700">2x Posting 24 Jam</span>
                                            <span class="text-2xl font-bold text-rose-600">Rp 50K</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-4 border border-rose-200 shadow-md">
                                    <p class="text-sm font-bold text-gray-700 mb-3">💳 Metode Pembayaran:</p>
                                    <div class="flex items-start gap-4">
                                        <div class="px-4 py-2 bg-blue-600 text-white rounded-lg font-bold whitespace-nowrap">DANA</div>
                                        <div class="flex-1">
                                            <p class="text-lg font-bold text-gray-900">082314322864</p>
                                            <p class="text-sm text-gray-600">a.n. Faqih Rizqian Mahardika</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="group bg-white rounded-2xl p-6 md:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex gap-5 md:gap-6">
                            <div class="shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-green-600 to-green-700 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">
                                    6
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Konfirmasi</h3>
                                <p class="text-gray-600 mb-5">Setelah melakukan registrasi, pihak terkait <span class="font-bold text-green-600">wajib melakukan konfirmasi</span> dan mengirimkan bukti telah memenuhi persyaratan melalui Contact Person:</p>

                                <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-4 border-l-4 border-green-500 shadow-md">
                                    <div class="flex items-center gap-4">
                                        <div class="shrink-0 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center shadow-lg">
                                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm text-gray-600 font-medium">WhatsApp Contact Person</p>
                                            <a href="https://wa.me/6288225050288" target="_blank"
                                                class="text-lg font-bold text-gray-900 hover:text-green-600 transition-colors">
                                                +62 882-2505-0288
                                            </a>
                                            <p class="text-sm text-gray-600">Nata</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 7 -->
                    <div class="group bg-white rounded-2xl p-6 md:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex gap-5 md:gap-6">
                            <div class="shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-cyan-600 to-blue-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">
                                    7
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Konfirmasi Pengajuan</h3>
                                <p class="text-gray-600">Kementerian Luar Negeri BEM KM UDINUS akan mengonfirmasi pengajuan kerja sama yang telah dikirimkan <span class="font-bold text-cyan-600 bg-cyan-50 px-3 py-1 rounded-lg">selambat-lambatnya 3 hari</span>.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-600 rounded-3xl p-7 md:p-10 text-center shadow-2xl relative overflow-hidden mt-15">
                    <!-- Decorative elements -->
                    <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full blur-2xl -mr-20 -mt-20"></div>
                    <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full blur-2xl -ml-20 -mb-20"></div>
                    
                    <div class="relative z-10">
                        <h3 class="text-3xl md:text-4xl font-bold text-white mb-3">Siap Menjadi Media Partner?</h3>
                        <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">Ikuti prosedur di atas dan bergabunglah bersama BEM KM UDINUS dalam setiap kegiatan kami!</p>
                        
                        <div class="flex flex-wrap gap-4 justify-center">
                            <a href="https://forms.gle/hnysqrJzntXvF9Q18" target="_blank"
                                class="inline-flex items-center gap-2 bg-white hover:bg-blue-50 text-blue-600 font-bold px-8 py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Daftar Sekarang
                            </a>
                            <a href="{{ route('guest.partnership.media-partner.index') }}"
                                class="inline-flex items-center gap-2 bg-white/20 border-2 border-white hover:bg-white/30 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                Kembali ke Paket
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
