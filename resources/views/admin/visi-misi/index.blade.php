<x-app-layout>
    <!-- Dashboard Content -->
    <main class="ml-0 md:ml-64 peer-checked:md:ml-0 transition-all duration-300">
        <section class="pt-24 px-8 pb-10 bg-[#e8eaf0] min-h-screen">
            <div class="max-w-7xl mx-auto px-3">
                <!-- Heading dan Breadcrumb -->
                <div class="mb-6">
                    <nav class="text-sm text-gray-500">
                        <ol class="list-reset flex items-center space-x-2">
                            <li><a href="{{ route('admin.dashboard') }}" class="hover:underline text-blue-600">Admin</a>
                            </li>
                            <li><span class="text-blue-400">></span></li>
                            <li class="text-blue-700 font-semibold">Visi Misi</li>
                        </ol>
                        <h1 class="text-3xl font-bold text-gray-800 mt-2">Kelola Visi Misi</h1>
                    </nav>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
