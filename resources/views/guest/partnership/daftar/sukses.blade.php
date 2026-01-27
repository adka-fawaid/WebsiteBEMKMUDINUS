@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50/50 py-20 min-h-screen">
        <div class="container mx-auto mt-5 px-4 md:px-6 max-w-5xl">
            <div class="bg-white shadow-xl rounded-2xl p-8 md:p-12">
                <!-- Icon Success -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-green-100 rounded-full mb-6">
                        <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
                        Pendaftaran Berhasil!
                    </h1>

                    <div class="w-24 h-1 bg-gradient-to-r from-green-500 to-blue-500 rounded-full mx-auto mb-6"></div>

                    <p class="text-gray-600 text-base md:text-lg">
                        Terima kasih telah mendaftar sebagai mitra
                        <span class="font-semibold text-blue-700">{{ ucwords(str_replace('-', ' ', $kategori)) }}</span>
                    </p>
                </div>

                <!-- Nomor Pendaftaran Card -->
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl p-6 mb-8">
                    <div class="text-center">
                        <p class="text-sm text-gray-600 mb-2 uppercase tracking-wide">Nomor Pendaftaran Anda</p>
                        <div class="flex items-center justify-center gap-3 mb-2">
                            <p id="nomorPendaftaran" class="text-3xl md:text-4xl font-bold text-blue-700 tracking-wider">
                                {{ $nomorPendaftaran }}
                            </p>
                            <button onclick="copyNomor()"
                                class="p-2 hover:bg-blue-100 rounded-lg transition-colors duration-200 group"
                                title="Salin Nomor Pendaftaran">
                                <svg id="iconCopy" class="w-6 h-6 text-blue-600 group-hover:text-blue-700" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                                <svg id="iconCheck" class="w-6 h-6 text-green-600 hidden" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </button>
                        </div>
                        <p class="text-sm text-gray-500">
                            Silakan simpan nomor ini untuk keperluan konfirmasi
                        </p>
                    </div>
                </div>

                <!-- Peringatan Halaman Sementara -->
                <div class="bg-red-50 border-l-4 border-red-400 p-6 mb-6 rounded-r-lg">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-red-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-semibold text-red-800 mb-2">Penting!</h3>
                            <p class="text-sm text-red-700">
                                Halaman ini bersifat <strong>sementara</strong> dan tidak dapat diakses kembali setelah
                                ditutup.
                                Silakan <strong>screenshot</strong> atau <strong>catat nomor pendaftaran</strong> Anda
                                sebelum meninggalkan halaman ini.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Informasi Selanjutnya -->
                <div class="bg-blue-50 border-l-4 border-blue-400 p-6 mb-8 rounded-r-lg">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-blue-800 mb-3">Langkah Selanjutnya</h3>
                            <p class="text-sm text-blue-700 mb-4">
                                Silakan konfirmasi pendaftaran Anda dengan menghubungi kami melalui:
                            </p>
                            <div class="space-y-3">
                                <a href="{{ $kontak->where('tipe', 'Telepon')->first()->url ?? '#' }}" target="_blank"
                                    rel="noopener noreferrer"
                                    class="flex items-center gap-3 p-3 bg-white rounded-lg hover:bg-green-100 transition-colors duration-200 group">
                                    <svg class="w-6 h-6 text-green-600 group-hover:text-green-700" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">WhatsApp</p>
                                        <p class="text-sm font-semibold text-gray-800 group-hover:text-green-700">
                                            {{ $kontak->where('tipe', 'Telepon')->first()->kontak ?? '+62 812-3456-7890' }}
                                        </p>
                                    </div>
                                    <svg class="w-5 h-5 text-gray-400 ml-auto group-hover:text-green-600" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                            <p class="text-xs text-blue-600 mt-3">
                                📝 Sertakan <strong>Nomor Pendaftaran</strong> Anda saat menghubungi kami
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('guest.partnership.index') }}"
                        class="inline-flex items-center justify-center px-6 py-3 bg-white border-2 border-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Kembali ke Partnership
                    </a>
                    <a href="{{ route('guest.kontak.index') }}"
                        class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyNomor() {
            const nomorPendaftaran = document.getElementById('nomorPendaftaran').innerText;
            const iconCopy = document.getElementById('iconCopy');
            const iconCheck = document.getElementById('iconCheck');

            navigator.clipboard.writeText(nomorPendaftaran).then(() => {
                // Tampilkan icon check
                iconCopy.classList.add('hidden');
                iconCheck.classList.remove('hidden');

                // Kembalikan ke icon copy setelah 2 detik
                setTimeout(() => {
                    iconCopy.classList.remove('hidden');
                    iconCheck.classList.add('hidden');
                }, 2000);
            }).catch(err => {
                alert('Gagal menyalin nomor pendaftaran');
                console.error('Error copying text: ', err);
            });
        }
    </script>
@endsection
