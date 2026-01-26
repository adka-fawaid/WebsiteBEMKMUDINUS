@extends('guest.components.layout')

@section('content')
    <!-- detail struktural -->
    <section id="detail-struktural"
        class="min-h-screen bg-gradient-to-br from-blue-50/30 via-white to-orange-50/30 py-16 md:py-20 lg:py-24 relative overflow-hidden">
        <!-- Decorative Background -->
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-orange-400/10 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">

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
                                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                                        <div class="relative overflow-hidden aspect-[2/3]">
                                            <img src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                                class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                                alt="{{ $anggota->nama }}">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                            </div>
                                            <div
                                                class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-4 text-center">
                                                <div
                                                    class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase mb-2">
                                                    {{ $anggota->jabatan }}
                                                </div>
                                                <h4
                                                    class="text-white font-extrabold text-base mb-1 uppercase tracking-tight">
                                                    {{ $anggota->nama }}
                                                </h4>
                                                <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2"></div>
                                                <p class="text-white/90 text-xs uppercase">
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
                        $kepalaAndSekretaris = $anggotaUnits->whereIn('jabatan', ['Kepala', 'Sekretaris']);
                        $staffAndEksekutif = $anggotaUnits->whereIn('jabatan', ['Staff Ahli', 'Eksekutif Muda']);
                    @endphp

                    {{-- Grid 2: Kepala & Sekretaris --}}
                    @if ($kepalaAndSekretaris->count() > 0)
                        <div class="flex justify-center mb-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 max-w-3xl w-full">
                                @foreach ($kepalaAndSekretaris as $anggota)
                                    <div class="group">
                                        <div
                                            class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                                            <div class="relative overflow-hidden aspect-[2/3]">
                                                <img src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                                    class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                                    alt="{{ $anggota->nama }}">
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                                </div>
                                                <div
                                                    class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-4 text-center">
                                                    <div class="bg-white rounded-lg p-2">
                                                        <div
                                                            class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase mb-2">
                                                            {{ $anggota->jabatan }}
                                                        </div>
                                                        <h4
                                                            class="text-gray-900 font-extrabold text-base mb-1 uppercase tracking-tight">
                                                            {{ $anggota->nama }}
                                                        </h4>
                                                        <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2">
                                                        </div>
                                                        <p class="text-gray-600 text-xs uppercase">
                                                            {{ $anggota->nim }}
                                                        </p>
                                                    </div>
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
                                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                                        <div class="relative overflow-hidden aspect-[2/3]">
                                            <img src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                                class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                                alt="{{ $anggota->nama }}">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                            </div>
                                            <div
                                                class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-4 text-center">
                                                <div class="bg-white rounded-lg p-2">
                                                    <div
                                                        class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase mb-2">
                                                        {{ $anggota->jabatan }}
                                                    </div>
                                                    <h4
                                                        class="text-gray-900 font-extrabold text-base mb-1 uppercase tracking-tight">
                                                        {{ $anggota->nama }}
                                                    </h4>
                                                    <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2"></div>
                                                    <p class="text-gray-600 text-xs uppercase">
                                                        {{ $anggota->nim }}
                                                    </p>
                                                </div>
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
                        $staffAndEksekutif = $anggotaUnits->whereIn('jabatan', ['Staff Ahli', 'Eksekutif Muda']);
                    @endphp

                    {{-- Grid 2: Menteri & Sekretaris --}}
                    @if ($menteriAndSekretaris->count() > 0)
                        <div class="flex justify-center mb-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 max-w-3xl w-full">
                                @foreach ($menteriAndSekretaris as $anggota)
                                    <div class="group">
                                        <div
                                            class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                                            <div class="relative overflow-hidden aspect-[2/3]">
                                                <img src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                                    class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                                    alt="{{ $anggota->nama }}">
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                                </div>
                                                <div
                                                    class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-4 text-center">
                                                    <div class="bg-white rounded-lg p-2">
                                                        <div
                                                            class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase mb-2">
                                                            {{ $anggota->jabatan }}
                                                        </div>
                                                        <h4
                                                            class="text-gray-900 font-extrabold text-base mb-1 uppercase tracking-tight">
                                                            {{ $anggota->nama }}
                                                        </h4>
                                                        <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2">
                                                        </div>
                                                        <p class="text-gray-600 text-xs uppercase">
                                                            {{ $anggota->nim }}
                                                        </p>
                                                    </div>
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
                                            class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                                            <div class="relative overflow-hidden aspect-[2/3]">
                                                <img src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                                    class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                                    alt="{{ $anggota->nama }}">
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                                </div>
                                                <div
                                                    class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-4 text-center">
                                                    <div class="bg-white rounded-lg p-2">
                                                        <div
                                                            class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase mb-2">
                                                            {{ $anggota->jabatan }}
                                                        </div>
                                                        <h4
                                                            class="text-gray-900 font-extrabold text-base mb-1 uppercase tracking-tight">
                                                            {{ $anggota->nama }}
                                                        </h4>
                                                        <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2">
                                                        </div>
                                                        <p class="text-gray-600 text-xs uppercase">
                                                            {{ $anggota->nim }}
                                                        </p>
                                                    </div>
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
                                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                                        <div class="relative overflow-hidden aspect-[2/3]">
                                            <img src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                                class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                                alt="{{ $anggota->nama }}">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                            </div>
                                            <div
                                                class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-4 text-center">
                                                <div class="bg-white rounded-lg p-2">
                                                    <div
                                                        class="inline-flex items-center justify-center px-3 py-0.5 rounded-full bg-orange-50 text-orange-700 text-[10px] md:text-xs font-bold tracking-wide uppercase mb-2">
                                                        {{ $anggota->jabatan }}
                                                    </div>
                                                    <h4
                                                        class="text-gray-900 font-extrabold text-base mb-1 uppercase tracking-tight">
                                                        {{ $anggota->nama }}
                                                    </h4>
                                                    <div class="w-8 h-0.5 bg-orange-500 mx-auto rounded-full mb-2"></div>
                                                    <p class="text-gray-600 text-xs uppercase">
                                                        {{ $anggota->nim }}
                                                    </p>
                                                </div>
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

        </div>
    </section>
    <!-- detail struktural -->
@endsection
