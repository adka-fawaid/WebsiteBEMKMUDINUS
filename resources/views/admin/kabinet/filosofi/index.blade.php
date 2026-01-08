<x-app-layout>
    <!-- Filosofi Kabinet Content -->
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
                                <a href="{{ route('admin.kabinet.index') }}"
                                    class="text-blue-600 hover:text-blue-700 font-medium transition duration-150">
                                    Kabinet
                                </a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <polyline points="9 18 15 12 9 6" />
                                </svg>
                            </li>
                            <li class="text-gray-700 font-semibold">Kelola Filosofi Kabinet</li>
                        </ol>
                    </nav>
                    <div>
                        <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Manajemen Data</p>
                        <h1 class="text-3xl font-bold text-gray-900">Kelola Filosofi Kabinet</h1>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="mb-6">
                    <a href="{{ route('admin.kabinet.index') }}"
                        class="inline-flex items-center text-gray-700 hover:bg-blue-100 border border-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="group-hover:-translate-x-1 transition-transform duration-300">
                            <polyline points="15 18 9 12 15 6" />
                        </svg>
                        <span class="tracking-wide">Kembali ke Kabinet</span>
                    </a>
                </div>

                <!-- Tabs Navigation -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="m14.31 8 5.74 9.94" />
                                        <path d="M9.69 8h11.48" />
                                        <path d="m7.38 12 5.74-9.94" />
                                        <path d="M9.69 16 3.95 6.06" />
                                        <path d="M14.31 16H2.83" />
                                        <path d="m16.62 12-5.74 9.94" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-white">Data Filosofi Kabinet</h2>
                                    <p class="text-xs text-blue-100">Informasi tentang filosofi kabinet</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Navigation -->
                    <div class="border-b border-gray-200 bg-gray-50">
                        <nav class="flex -mb-px px-6" aria-label="Tabs">
                            <button type="button"
                                class="tab-button py-4 px-6 text-center border-b-2 font-semibold text-sm transition-all duration-200 flex items-center gap-2"
                                data-tab="makna-simbol-tab" onclick="switchTab('makna-simbol-tab')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M8.3 10a.7.7 0 0 1-.626-1.079L11.4 3a.7.7 0 0 1 1.198-.043L16.3 8.9a.7.7 0 0 1-.572 1.1Z" />
                                    <rect x="3" y="14" width="7" height="7" rx="1" />
                                    <circle cx="17.5" cy="17.5" r="3.5" />
                                </svg>
                                Makna Simbol
                            </button>
                            <button type="button"
                                class="tab-button py-4 px-6 text-center border-b-2 font-semibold text-sm transition-all duration-200 flex items-center gap-2"
                                data-tab="makna-warna-tab" onclick="switchTab('makna-warna-tab')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-palette-icon lucide-palette">
                                    <path
                                        d="M12 22a1 1 0 0 1 0-20 10 9 0 0 1 10 9 5 5 0 0 1-5 5h-2.25a1.75 1.75 0 0 0-1.4 2.8l.3.4a1.75 1.75 0 0 1-1.4 2.8z" />
                                    <circle cx="13.5" cy="6.5" r=".5" fill="currentColor" />
                                    <circle cx="17.5" cy="10.5" r=".5" fill="currentColor" />
                                    <circle cx="6.5" cy="12.5" r=".5" fill="currentColor" />
                                    <circle cx="8.5" cy="7.5" r=".5" fill="currentColor" />
                                </svg>
                                Makna Warna
                            </button>
                        </nav>
                    </div>

                    <!-- Tab Content -->
                    <div class="p-6">
                        <!-- Makna Simbol Section -->
                        <div id="makna-simbol-tab" class="tab-content">
                            @include('admin.kabinet.filosofi.makna-simbol.index')
                        </div>

                        <!-- Makna Warna Section -->
                        <div id="makna-warna-tab" class="tab-content hidden">
                            @include('admin.kabinet.filosofi.makna-warna.index')
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
            switchTab('makna-simbol-tab');
        });
    </script>
</x-app-layout>
