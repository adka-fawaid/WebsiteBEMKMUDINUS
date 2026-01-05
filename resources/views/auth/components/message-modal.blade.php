<!-- Modal Error Message -->
@if (session('error'))
    <div x-data="{ show: true }" x-show="show" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90" x-init="setTimeout(() => show = false, 5000)" class="fixed top-6 right-6 z-50 max-w-md">

        <div class="bg-white rounded-2xl shadow-2xl border border-red-100 overflow-hidden backdrop-blur-sm">
            <!-- Progress Bar -->
            <div class="h-1 bg-red-100">
                <div class="h-full bg-gradient-to-r from-red-500 to-red-600 animate-progress"></div>
            </div>

            <div class="p-5">
                <div class="flex items-start gap-4">
                    <!-- Icon -->
                    <div class="flex-shrink-0">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center shadow-lg shadow-red-500/30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex-1 pt-1">
                        <h3 class="text-lg font-bold text-gray-900 mb-1">
                            Terjadi Kesalahan
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ session('error') }}
                        </p>
                    </div>

                    <!-- Close Button -->
                    <button @click="show = false"
                        class="flex-shrink-0 w-8 h-8 rounded-full hover:bg-red-50 flex items-center justify-center transition-all duration-200 text-gray-400 hover:text-red-600 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 transform group-hover:rotate-90 transition-transform duration-200"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes progress {
            from {
                width: 100%;
            }

            to {
                width: 0%;
            }
        }

        .animate-progress {
            animation: progress 5s linear forwards;
        }
    </style>
@endif
