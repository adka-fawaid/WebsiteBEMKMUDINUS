<x-app-layout>
    <!-- Rekap Pendaftaran Partnership Content -->
    <main class="ml-0 md:ml-64 peer-checked:md:ml-0 transition-all duration-300">
        <section class="pt-24 px-8 pb-10 bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-50 min-h-screen">
            <div class="max-w-7xl mx-auto px-3">
                <!-- Heading dan Breadcrumb -->
                <div class="mb-8">
                    <nav class="text-sm mb-4">
                        <ol class="flex items-center space-x-2">
                            <li>
                                <a href="{{ route('admin.dashboard') }}"
                                    class="text-blue-600 hover:text-blue-700 font-medium transition duration-150 flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                        <polyline points="9 22 9 12 15 12 15 22" />
                                    </svg>
                                    Admin
                                </a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <polyline points="9 18 15 12 9 6" />
                                </svg>
                            </li>
                            <li class="text-gray-700 font-semibold">Rekap Pendaftaran Partnership</li>
                        </ol>
                    </nav>
                    <div>
                        <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Manajemen Data
                        </p>
                        <h1 class="text-3xl font-bold text-gray-900">Rekap Pendaftaran Partnership</h1>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                    <svg class="shrink-0 w-3.5 h-3.5 text-white" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M2 6h4" />
                                        <path d="M2 10h4" />
                                        <path d="M2 14h4" />
                                        <path d="M2 18h4" />
                                        <rect width="16" height="20" x="4" y="2" rx="2" />
                                        <path d="M9.5 8h5" />
                                        <path d="M9.5 12H16" />
                                        <path d="M9.5 16H14" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-white">Rekap Pendaftaran Partnership
                                    </h2>
                                    <p class="text-xs text-blue-100">Daftar data pendaftar partnership
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Navigation -->
                    <div class="border-b border-gray-200 bg-gray-50">
                        <nav class="flex -mb-px px-6" aria-label="Tabs">
                            <button type="button"
                                class="tab-button py-4 px-6 text-center border-b-2 font-semibold text-sm transition-all duration-200 flex items-center gap-2"
                                data-tab="medpart-tab" onclick="switchTab('medpart-tab')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-tv-icon lucide-tv">
                                    <path d="m17 2-5 5-5-5" />
                                    <rect width="20" height="15" x="2" y="7" rx="2" />
                                </svg>
                                Media Partner
                            </button>
                            <button type="button"
                                class="tab-button py-4 px-6 text-center border-b-2 font-semibold text-sm transition-all duration-200 flex items-center gap-2"
                                data-tab="sponsorship-tab" onclick="switchTab('sponsorship-tab')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-badge-dollar-sign-icon lucide-badge-dollar-sign">
                                    <path
                                        d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" />
                                    <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8" />
                                    <path d="M12 18V6" />
                                </svg>
                                Sponsorship
                            </button>
                            <button type="button"
                                class="tab-button py-4 px-6 text-center border-b-2 font-semibold text-sm transition-all duration-200 flex items-center gap-2"
                                data-tab="kampusVisit-tab" onclick="switchTab('kampusVisit-tab')">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6.18L23 9 12 3z" />
                                </svg>
                                Kampus Visit
                            </button>
                            <button type="button"
                                class="tab-button py-4 px-6 text-center border-b-2 font-semibold text-sm transition-all duration-200 flex items-center gap-2"
                                data-tab="kolaborasi-tab" onclick="switchTab('kolaborasi-tab')">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.5 1.1 2.97 2.65 2.97 4.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                                </svg>
                                Kolaborasi
                            </button>
                            <button type="button"
                                class="tab-button py-4 px-6 text-center border-b-2 font-semibold text-sm transition-all duration-200 flex items-center gap-2"
                                data-tab="delegasi-tab" onclick="switchTab('delegasi-tab')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-user-round-plus-icon lucide-user-round-plus">
                                    <path d="M2 21a8 8 0 0 1 13.292-6" />
                                    <circle cx="10" cy="8" r="5" />
                                    <path d="M19 16v6" />
                                    <path d="M22 19h-6" />
                                </svg>
                                Delegasi
                            </button>
                        </nav>
                    </div>

                    <!-- Tab Content -->
                    <div class="p-6">
                        <!-- Medpart Section -->
                        <div id="medpart-tab" class="tab-content">
                            @include('admin.rekap-pendaftaran-partnership.media-partner..index', [
                                'rekapMedpart' => $rekapMedpart,
                            ])
                        </div>

                        <!-- Sponsorship Section -->
                        <div id="sponsorship-tab" class="tab-content hidden">
                            @include('admin.rekap-pendaftaran-partnership.sponsorship.index', [
                                'rekapSponsorship' => $rekapSponsorship,
                            ])
                        </div>

                        <!-- Kampus Visit Section -->
                        <div id="kampusVisit-tab" class="tab-content hidden">
                            @include('admin.rekap-pendaftaran-partnership.kampus-visit.index', [
                                'rekapKampusVisit' => $rekapKampusVisit,
                            ])
                        </div>

                        <!-- Kolaborasi Section -->
                        <div id="kolaborasi-tab" class="tab-content hidden">
                            @include('admin.rekap-pendaftaran-partnership.kolaborasi.index', [
                                'rekapKolaborasi' => $rekapKolaborasi,
                            ])
                        </div>

                        <!-- Delegasi Section -->
                        <div id="delegasi-tab" class="tab-content hidden">
                            @include('admin.rekap-pendaftaran-partnership.delegasi.index', [
                                'rekapDelegasi' => $rekapDelegasi,
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        function switchTab(tabId) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Remove active class from all tab buttons
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('border-blue-600', 'text-blue-600', 'bg-blue-50');
                button.classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700',
                    'hover:border-gray-300');
            });

            // Show selected tab content
            document.getElementById(tabId).classList.remove('hidden');

            // Add active class to selected tab button
            const activeButton = document.querySelector(`[data-tab="${tabId}"]`);
            activeButton.classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700',
                'hover:border-gray-300');
            activeButton.classList.add('border-blue-600', 'text-blue-600', 'bg-blue-50');
        }

        // Initialize first tab as active
        document.addEventListener('DOMContentLoaded', function() {
            switchTab('medpart-tab');
        });
    </script>
</x-app-layout>
