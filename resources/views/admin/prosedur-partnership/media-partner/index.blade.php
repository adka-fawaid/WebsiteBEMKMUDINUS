<x-app-layout>
    <!-- Prosedur Content -->
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
                            <li>
                                <a href="{{ route('admin.prosedur-partnership.index') }}"
                                    class="text-blue-600 hover:text-blue-700 font-medium transition duration-150">
                                    Prosedur Partnership
                                </a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <polyline points="9 18 15 12 9 6" />
                                </svg>
                            </li>
                            <li class="text-gray-700 font-semibold">Kelola Prosedur Partnership</li>
                        </ol>
                    </nav>
                    <div>
                        <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Manajemen Data
                        </p>
                        <h1 class="text-3xl font-bold text-gray-900">Kelola Prosedur {{ $partnership->kategori }}</h1>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="mb-6">
                    <a href="{{ route('admin.prosedur-partnership.index') }}"
                        class="inline-flex items-center text-gray-700 hover:bg-blue-100 border border-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="group-hover:-translate-x-1 transition-transform duration-300">
                            <polyline points="15 18 9 12 15 6" />
                        </svg>
                        <span class="tracking-wide">Kembali ke Prosedur Partnership</span>
                    </a>
                </div>

                <!-- Main Content -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-white">{{ $partnership->kategori }}
                                    </h2>
                                    <p class="text-xs text-blue-100">Daftar prosedur dari {{ $partnership->kategori }}
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
                                data-tab="gratis-tab" onclick="switchTab('gratis-tab')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-banknote-x-icon lucide-banknote-x">
                                    <path d="M13 18H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5" />
                                    <path d="m17 17 5 5" />
                                    <path d="M18 12h.01" />
                                    <path d="m22 17-5 5" />
                                    <path d="M6 12h.01" />
                                    <circle cx="12" cy="12" r="2" />
                                </svg>
                                Gratis
                            </button>
                            <button type="button"
                                class="tab-button py-4 px-6 text-center border-b-2 font-semibold text-sm transition-all duration-200 flex items-center gap-2"
                                data-tab="berbayar-tab" onclick="switchTab('berbayar-tab')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-banknote-icon lucide-banknote">
                                    <rect width="20" height="12" x="2" y="6" rx="2" />
                                    <circle cx="12" cy="12" r="2" />
                                    <path d="M6 12h.01M18 12h.01" />
                                </svg>
                                Berbayar
                            </button>
                        </nav>
                    </div>

                    <!-- Tab Content -->
                    <div class="p-6">
                        <!-- Gratis Section -->
                        <div id="gratis-tab" class="tab-content">
                            @include('admin.prosedur-partnership.media-partner.gratis.index', [
                                'partnership' => $partnership,
                            ])
                        </div>

                        <!-- Berbayar Section -->
                        <div id="berbayar-tab" class="tab-content hidden">
                            @include('admin.prosedur-partnership.media-partner.berbayar.index', [
                                'partnership' => $partnership,
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
            switchTab('gratis-tab');
        });
    </script>
</x-app-layout>
