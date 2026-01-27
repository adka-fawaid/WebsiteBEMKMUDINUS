@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50/50 py-20 min-h-screen">
        <div class="container mx-auto px-4 md:px-6 max-w-[1600px]">
            <!-- Header -->
            <div class="text-center mt-5 mb-4 md:mb-5">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl mb-4">
                    <span
                        class="bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent box-decoration-clone inline">
                        Pendaftaran Kegiatan {{ $kegiatan->nama }}
                    </span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto inline">
                    Silakan isi formulir di bawah ini untuk mendaftar pada kegiatan <strong>{{ $kegiatan->nama }}</strong>.
                </p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-6 max-w-5xl">
            <div class="bg-white shadow-md rounded-lg p-6 md:p-8 overflow-hidden">
                @if (!$pendaftaran)
                    <div class="text-center py-12">
                        <h3 class="text-gray-700 font-bold text-lg mb-2">Pendaftaran belum dibuka atau sudah ditutup</h3>
                        <p class="text-gray-500 text-sm">Silakan cek kembali periode pendaftaran kegiatan ini.</p>
                    </div>
                @else
                    <form action="{{ route('guest.kegiatan.storeDaftar', $kegiatan->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-6">
                            @forelse ($pertanyaanPendaftarans as $pertanyaan)
                                <div
                                    class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                                    <label
                                        class="block text-sm font-semibold text-gray-700 mb-2">{{ $pertanyaan->pertanyaan }}</label>
                                    @if ($pertanyaan->tipe_jawaban === 'Jawaban Panjang')
                                        <textarea name="jawaban[{{ $pertanyaan->id }}]" rows="4" required
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"></textarea>
                                    @elseif($pertanyaan->tipe_jawaban === 'Jawaban Singkat')
                                        <input type="text" name="jawaban[{{ $pertanyaan->id }}]" required
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                                    @elseif($pertanyaan->tipe_jawaban === 'Opsi')
                                        <div>
                                            @if ($pertanyaan->opsiJawaban && count($pertanyaan->opsiJawaban))
                                                <select name="jawaban[{{ $pertanyaan->id }}]" required
                                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                                                    <option value="" disabled selected>Pilih salah satu</option>
                                                    @foreach ($pertanyaan->opsiJawaban as $opsi)
                                                        <option value="{{ $opsi->opsi }}">{{ $opsi->opsi }}</option>
                                                    @endforeach
                                                </select>
                                            @else
                                                <span class="text-gray-400 italic">Opsi belum tersedia</span>
                                            @endif
                                        </div>
                                    @elseif($pertanyaan->tipe_jawaban === 'File')
                                        <div class="relative">
                                            <input type="file" name="jawaban[{{ $pertanyaan->id }}]"
                                                id="file-{{ $pertanyaan->id }}" required
                                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                                            <button type="button" onclick="clearFileInput('file-{{ $pertanyaan->id }}')"
                                                class="hidden absolute right-2 top-1/2 -translate-y-1/2 p-2 text-red-500 hover:text-red-700 hover:bg-red-50 rounded-lg transition"
                                                id="clear-file-{{ $pertanyaan->id }}">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                        @push('scripts')
                                            <script>
                                                function clearFileInput(inputId) {
                                                    const input = document.getElementById(inputId);
                                                    const clearBtn = document.getElementById('clear-' + inputId);
                                                    if (input) {
                                                        input.value = '';
                                                    }
                                                    if (clearBtn) {
                                                        clearBtn.classList.add('hidden');
                                                    }
                                                }
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    document.querySelectorAll('input[type="file"]').forEach(function(input) {
                                                        input.addEventListener('change', function() {
                                                            const clearBtn = document.getElementById('clear-' + input.id);
                                                            if (input.files.length > 0 && clearBtn) {
                                                                clearBtn.classList.remove('hidden');
                                                            } else if (clearBtn) {
                                                                clearBtn.classList.add('hidden');
                                                            }
                                                        });
                                                    });
                                                });
                                            </script>
                                        @endpush
                                    @endif

                                </div>
                            @empty
                                <div class="text-center text-gray-500">Tidak ada pertanyaan pendaftaran.</div>
                            @endforelse
                        </div>
                        <div class="mt-8 flex flex-col sm:flex-row justify-between items-center gap-4">
                            <a href="{{ route('guest.kegiatan.detail', $kegiatan->id) }}"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 bg-white border-2 border-gray-300 hover:border-blue-500 text-gray-700 hover:text-blue-700 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                <span>Kembali ke Detail</span>
                            </a>
                            <button type="submit"
                                class="w-full sm:w-auto bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold px-8 py-3 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                <span class="flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Kirim Pendaftaran
                                </span>
                            </button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
