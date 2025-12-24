<x-app-layout>
    <!-- Visi Misi Content -->
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
                            <li class="text-gray-700 font-semibold">Visi & Misi</li>
                        </ol>
                    </nav>
                    <div>
                        <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Manajemen Data
                        </p>
                        <h1 class="text-3xl font-bold text-gray-900">Kelola Visi & Misi</h1>
                    </div>
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
                                        <path d="M21 10.656V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h12.344" />
                                        <path d="m9 11 3 3L22 4" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-white">Data Visi & Misi</h2>
                                    <p class="text-xs text-blue-100">Informasi tentang visi dan misi organisasi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Navigation -->
                    <div class="border-b border-gray-200 bg-gray-50">
                        <nav class="flex -mb-px px-6" aria-label="Tabs">
                            <button type="button"
                                class="tab-button py-4 px-6 text-center border-b-2 font-semibold text-sm transition-all duration-200 flex items-center gap-2"
                                data-tab="visi-tab" onclick="switchTab('visi-tab')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335" />
                                    <path d="m9 11 3 3L22 4" />
                                </svg>
                                Visi
                            </button>
                            <button type="button"
                                class="tab-button py-4 px-6 text-center border-b-2 font-semibold text-sm transition-all duration-200 flex items-center gap-2"
                                data-tab="misi-tab" onclick="switchTab('misi-tab')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335" />
                                    <path d="m9 11 3 3L22 4" />
                                </svg>
                                Misi
                            </button>
                        </nav>
                    </div>

                    <!-- Tab Content -->
                    <div class="p-6">
                        <!-- Visi Section -->
                        <div id="visi-tab" class="tab-content">
                            @include('admin.visi-misi.visi.index')
                        </div>

                        <!-- Misi Section -->
                        <div id="misi-tab" class="tab-content hidden">
                            @include('admin.visi-misi.misi.index')
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
            switchTab('visi-tab');
        });
    </script>
</x-app-layout>
