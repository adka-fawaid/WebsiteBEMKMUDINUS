@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-16 min-h-screen">
        <div class="container mx-auto px-4 md:px-8">
            <!-- Header -->
            <div class="text-center mt-5 mb-8 md:mb-12">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl mb-4">
                    <span class="bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent box-decoration-clone inline">
                        Prosedur Media Partner
                    </span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                    Ikuti langkah-langkah berikut untuk mengajukan kemitraan media dengan BEM-KM UDINUS
                </p>
            </div>

            <!-- Prosedur Content -->
            <div class="max-w-4xl mx-auto">
                <!-- Step by Step -->
                <div class="space-y-6 mb-12">
                    <!-- Step 1 -->
                    <div
                        class="bg-white rounded-2xl p-6 shadow-lg border border-blue-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex gap-4">
                            <div class="shrink-0">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                    1
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Kirim Proposal</h3>
                                <p class="text-gray-600">Kirim proposal partnership ke email resmi BEM-KM UDINUS atau
                                    melalui contact person yang tersedia.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div
                        class="bg-white rounded-2xl p-6 shadow-lg border border-blue-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex gap-4">
                            <div class="shrink-0">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                    2
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Verifikasi Proposal</h3>
                                <p class="text-gray-600">Proposal akan diverifikasi oleh tim BEM-KM UDINUS dalam waktu <span
                                        class="font-bold text-blue-600">3-5 hari kerja</span> untuk memastikan kelengkapan
                                    dan kesesuaian kerja sama.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div
                        class="bg-white rounded-2xl p-6 shadow-lg border border-blue-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex gap-4">
                            <div class="shrink-0">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                    3
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Konfirmasi & Kerjasama</h3>
                                <p class="text-gray-600">Jika proposal <span
                                        class="font-bold text-blue-600">disetujui</span>, tim kami akan menghubungi Anda
                                    untuk membahas detail kerja sama dan langkah-langkah selanjutnya.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-8 text-center shadow-2xl">
                    <h3 class="text-2xl font-bold text-white mb-4">Siap Bermitra dengan Kami?</h3>
                    <p class="text-blue-100 mb-6">Ikuti prosedur di atas dan mari berkolaborasi untuk menciptakan dampak
                        positif!</p>
                    <div class="flex flex-wrap gap-4 justify-center">
                        <a href="{{ route('guest.partnership.index') }}"
                            class="inline-flex items-center gap-2 bg-white hover:bg-blue-50 text-blue-600 font-bold px-8 py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>
                            Lihat Kategori Partnership
                        </a>
                        <a href="{{ route('guest.kontak.index') }}"
                            class="inline-flex items-center gap-2 bg-transparent border-2 border-white hover:bg-white/10 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
