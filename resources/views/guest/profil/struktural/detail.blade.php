@extends('guest.components.layout')

@section('content')
    <!-- detail struktural -->
    <section id="detail-struktural"
        class="min-h-screen bg-gradient-to-br from-blue-50/30 via-white to-orange-50/30 py-16 md:py-20 lg:py-24 relative overflow-hidden">
        <!-- Decorative Background -->
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-orange-400/10 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">

            @if ($anggotaUnits && $anggotaUnits->isNotEmpty())
                <!-- Unit Info Header -->
                <div class="text-center mt-4 mb-6">
                    <h2
                        class="font-bold bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent text-3xl md:text-4xl lg:text-5xl mb-4">
                        {{ $anggotaUnits->first()->unitOrganisasi->nama }}
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                    <p class="text-gray-600 text-sm md:text-base max-w-3xl mx-auto">
                        {{ $anggotaUnits->first()->unitOrganisasi->deskripsi }}
                    </p>
                </div>

                <!-- Anggota Unit Grid -->
                <div class="mb-6">
                    @php
                        $kategori = $anggotaUnits->first()->unitOrganisasi->kategori;
                    @endphp

                    @if (in_array($kategori, ['Presiden Mahasiswa', 'Wakil Presiden Mahasiswa', 'Sekretaris Jenderal']))
                        {{-- Layout 1 Card Center --}}
                        <div class="flex justify-center">
                            <div class="max-w-sm w-full">
                                @foreach ($anggotaUnits as $anggota)
                                    <div class="group">
                                        <div
                                            class="bg-white rounded-3xl overflow-visible border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                                            <div class="relative rounded-2xl aspect-[1/1] overflow-hidden m-2 shadow-inner">
                                                <img src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                                    class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                                    alt="{{ $anggota->nama }}">
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                                </div>
                                            </div>

                                            <!-- Info Section -->
                                            <div class="px-4 pb-6 -mt-8 relative z-10">
                                                <div
                                                    class="bg-white rounded-xl p-3 shadow-lg border border-gray-50 text-center transform transition-all">
                                                    <!-- Jabatan -->
                                                    <div
                                                        class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase mb-2">
                                                        {{ $anggota->jabatan }}
                                                    </div>
                                                    <!-- Nama -->
                                                    <h4
                                                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-blue-900 font-extrabold text-base mb-1 uppercase tracking-tight">
                                                        {{ $anggota->nama }}
                                                    </h4>
                                                    <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2"></div>
                                                    <!-- NIM -->
                                                    <p class="text-gray-600 text-xs uppercase">
                                                        {{ $anggota->nim }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div
                                                class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @elseif ($kategori == 'Biro')
                        {{-- Layout Biro --}}
                        @php
                            $kepalaAndSekretaris = $anggotaUnits->whereIn('jabatan', ['Kepala Biro', 'Sekretaris']);
                            $staffAndEksekutif = $anggotaUnits->whereIn('jabatan', ['Staff Biro', 'Staff Ahli', 'Eksekutif Muda']);
                        @endphp

                        {{-- Grid 2: Kepala Biro & Sekretaris --}}
                        @if ($kepalaAndSekretaris->count() > 0)
                            <div class="flex justify-center mb-8">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 max-w-3xl w-full">
                                    @foreach ($kepalaAndSekretaris as $anggota)
                                        <div class="group">
                                            <div
                                                class="bg-white rounded-3xl overflow-visible border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                                                <div
                                                    class="relative rounded-2xl aspect-[1/1] overflow-hidden m-2 shadow-inner">
                                                    <img src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                                        class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                                        alt="{{ $anggota->nama }}">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                                    </div>
                                                </div>

                                                <!-- Info Section -->
                                                <div class="px-4 pb-6 -mt-8 relative z-10">
                                                    <div
                                                        class="bg-white rounded-xl p-3 shadow-lg border border-gray-50 text-center transform transition-all">
                                                        <!-- Jabatan -->
                                                        <div
                                                            class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase mb-2">
                                                            {{ $anggota->jabatan }}
                                                        </div>
                                                        <!-- Nama -->
                                                        <h4
                                                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-blue-900 font-extrabold text-base mb-1 uppercase tracking-tight">
                                                            {{ $anggota->nama }}
                                                        </h4>
                                                        <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2">
                                                        </div>
                                                        <!-- NIM -->
                                                        <p class="text-gray-600 text-xs uppercase">
                                                            {{ $anggota->nim }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Grid 3: Staff Ahli & Eksekutif Muda --}}
                        @if ($staffAndEksekutif->count() > 0)
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                                @foreach ($staffAndEksekutif as $anggota)
                                    <div class="group">
                                        <div
                                            class="bg-white rounded-3xl overflow-visible border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                                            <div class="relative rounded-2xl aspect-[1/1] overflow-hidden m-2 shadow-inner">
                                                <img src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                                    class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                                    alt="{{ $anggota->nama }}">
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                                </div>
                                            </div>

                                            <!-- Info Section -->
                                            <div class="px-4 pb-6 -mt-8 relative z-10">
                                                <div
                                                    class="bg-white rounded-xl p-3 shadow-lg border border-gray-50 text-center transform transition-all">
                                                    <!-- Jabatan -->
                                                    <div
                                                        class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase mb-2">
                                                        {{ $anggota->jabatan }}
                                                    </div>
                                                    <!-- Nama -->
                                                    <h4
                                                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-blue-900 font-extrabold text-base mb-1 uppercase tracking-tight">
                                                        {{ $anggota->nama }}
                                                    </h4>
                                                    <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2"></div>
                                                    <!-- NIM -->
                                                    <p class="text-gray-600 text-xs uppercase">
                                                        {{ $anggota->nim }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div
                                                class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @else
                        {{-- Layout Kementerian --}}
                        @php
                            $menteriAndSekretaris = $anggotaUnits->whereIn('jabatan', ['Menteri', 'Sekretaris']);
                            $ketuaBidang = $anggotaUnits->where('jabatan', 'Ketua Bidang');
                            $staffAndEksekutif = $anggotaUnits->whereIn('jabatan', ['Staff Biro', 'Staff Ahli', 'Eksekutif Muda']);
                        @endphp

                        {{-- Grid 2: Menteri & Sekretaris --}}
                        @if ($menteriAndSekretaris->count() > 0)
                            <div class="flex justify-center mb-8">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 max-w-3xl w-full">
                                    @foreach ($menteriAndSekretaris as $anggota)
                                        <div class="group">
                                            <div
                                                class="bg-white rounded-3xl overflow-visible border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                                                <div
                                                    class="relative rounded-2xl aspect-[1/1] overflow-hidden m-2 shadow-inner">
                                                    <img src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                                        class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                                        alt="{{ $anggota->nama }}">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                                    </div>
                                                </div>

                                                <!-- Info Section -->
                                                <div class="px-4 pb-6 -mt-8 relative z-10">
                                                    <div
                                                        class="bg-white rounded-xl p-3 shadow-lg border border-gray-50 text-center transform transition-all">
                                                        <!-- Jabatan -->
                                                        <div
                                                            class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase mb-2">
                                                            {{ $anggota->jabatan }}
                                                        </div>
                                                        <!-- Nama -->
                                                        <h4
                                                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-blue-900 font-extrabold text-base mb-1 uppercase tracking-tight">
                                                            {{ $anggota->nama }}
                                                        </h4>
                                                        <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2">
                                                        </div>
                                                        <!-- NIM -->
                                                        <p class="text-gray-600 text-xs uppercase">
                                                            {{ $anggota->nim }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Grid 2: Ketua Bidang --}}
                        @if ($ketuaBidang->count() > 0)
                            <div class="flex justify-center mb-8">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 max-w-3xl w-full">
                                    @foreach ($ketuaBidang as $anggota)
                                        <div class="group">
                                            <div
                                                class="bg-white rounded-3xl overflow-visible border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                                                <div
                                                    class="relative rounded-2xl aspect-[1/1] overflow-hidden m-2 shadow-inner">
                                                    <img src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                                        class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                                        alt="{{ $anggota->nama }}">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                                    </div>
                                                </div>

                                                <!-- Info Section -->
                                                <div class="px-4 pb-6 -mt-8 relative z-10">
                                                    <div
                                                        class="bg-white rounded-xl p-3 shadow-lg border border-gray-50 text-center transform transition-all">
                                                        <!-- Jabatan -->
                                                        <div
                                                            class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase mb-2">
                                                            {{ $anggota->jabatan }}
                                                        </div>
                                                        <!-- Nama -->
                                                        <h4
                                                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-blue-900 font-extrabold text-base mb-1 uppercase tracking-tight">
                                                            {{ $anggota->nama }}
                                                        </h4>
                                                        <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2">
                                                        </div>
                                                        <!-- NIM -->
                                                        <p class="text-gray-600 text-xs uppercase">
                                                            {{ $anggota->nim }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Grid 3: Staff Ahli & Eksekutif Muda --}}
                        @if ($staffAndEksekutif->count() > 0)
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                                @foreach ($staffAndEksekutif as $anggota)
                                    <div class="group">
                                        <div
                                            class="bg-white rounded-3xl overflow-visible border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                                            <div class="relative rounded-2xl aspect-[1/1] overflow-hidden m-2 shadow-inner">
                                                <img src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                                    class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                                    alt="{{ $anggota->nama }}">
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                                </div>
                                            </div>

                                            <!-- Info Section -->
                                            <div class="px-4 pb-6 -mt-8 relative z-10">
                                                <div
                                                    class="bg-white rounded-xl p-3 shadow-lg border border-gray-50 text-center transform transition-all">
                                                    <!-- Jabatan -->
                                                    <div
                                                        class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase mb-2">
                                                        {{ $anggota->jabatan }}
                                                    </div>
                                                    <!-- Nama -->
                                                    <h4
                                                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-blue-900 font-extrabold text-base mb-1 uppercase tracking-tight">
                                                        {{ $anggota->nama }}
                                                    </h4>
                                                    <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2"></div>
                                                    <!-- NIM -->
                                                    <p class="text-gray-600 text-xs uppercase">
                                                        {{ $anggota->nim }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div
                                                class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endif
                </div>

                <!-- Decorative Divider -->
                <div class="flex items-center justify-center mt-12 md:mt-16">
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent to-blue-500 max-w-xs"></div>
                    <div class="w-4 h-4 mx-4 bg-blue-500 rotate-45 transform origin-center"></div>
                    <div class="flex-1 h-px bg-gradient-to-l from-transparent to-blue-500 max-w-xs"></div>
                </div>
            @else
                <!-- Empty State -->
                <div class="text-center py-16 md:py-20">
                    <div class="max-w-md mx-auto">
                        <!-- Icon -->
                        <div class="mb-6">
                            <div
                                class="inline-flex items-center justify-center w-24 h-24 rounded-full bg-gradient-to-br from-blue-100 to-orange-100 shadow-lg">
                                <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>

                        <!-- Message -->
                        <h3
                            class="font-bold bg-gradient-to-r from-blue-700 to-orange-500 bg-clip-text text-transparent text-2xl md:text-3xl mb-3">
                            Belum Ada Data Anggota
                        </h3>
                        <div class="w-16 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                        <p class="text-gray-600 text-sm md:text-base mb-8">
                            Saat ini belum ada data anggota untuk unit organisasi ini. Silakan cek kembali nanti.
                        </p>

                        <!-- Back Button -->
                        <a href="{{ route('guest.profil.struktural.index') }}"
                            class="inline-flex items-center gap-2 font-bold rounded-full px-8 py-3 text-base bg-gradient-to-r from-blue-600 to-blue-700 text-white hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18">
                                </path>
                            </svg>
                            <span>Kembali ke Struktural</span>
                        </a>
                    </div>
                </div>

                <!-- Decorative Divider -->
                <div class="flex items-center justify-center mt-12 md:mt-16">
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent to-orange-500 max-w-xs"></div>
                    <div class="w-4 h-4 mx-4 bg-orange-500 rotate-45 transform origin-center"></div>
                    <div class="flex-1 h-px bg-gradient-to-l from-transparent to-orange-500 max-w-xs"></div>
                </div>
            @endif

        </div>
    </section>
    <!-- detail struktural -->
@endsection
