<x-app>
    <x-slot name="title">Academies Courses</x-slot>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
            <div class="flex flex-col mb-16 sm:text-center sm:mb-0">
                <a href="/" class="mb-6 sm:mx-auto">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                </a>
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">
                            <svg viewBox="0 0 52 24" fill="currentColor"
                                class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                                <defs>
                                    <pattern id="e77df901-b9d7-4b9b-822e-16b2d410795b" x="0" y="0"
                                        width=".135" height=".30">
                                        <circle cx="1" cy="1" r=".7"></circle>
                                    </pattern>
                                </defs>
                                <rect fill="url(#e77df901-b9d7-4b9b-822e-16b2d410795b)" width="52" height="24">
                                </rect>
                            </svg>
                            <span class="relative">Keajaiban</span>
                        </span>
                        dari Menulis Akademik
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        Temukan keajaiban kata-kata yang mampu menginspirasi, mempengaruhi, dan menyampaikan gagasan
                        secara mendalam. Lengkapi ketrampilan Anda dalam menulis karya akademik yang berbobot dan
                        memikat hati pembaca. Bersiaplah untuk menjelajahi teknik penulisan yang kreatif, struktur yang
                        solid, dan pendekatan yang cerdas dalam menyampaikan ide.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="px-2">
        <!-- Card Blog -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 mx-auto">
            <!-- Title -->
            <div class="max-w-2xl mb-10">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Menulis Akademik</h2>
                <p class="mt-1 text-gray-600 dark:text-gray-400">Menulis akademik adalah proses menyusun tulisan yang
                    memiliki ciri khas ilmiah dan berfokus pada penelitian, analisis, dan argumen yang didasarkan pada
                    bukti dan referensi yang akurat.</p>
            </div>
            <!-- End Title -->

            <!-- Grid -->
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($academies as $item)
                    <!-- Card -->
                    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4]"
                        href="{{ route('details', $item->slug) }}">
                        <div class="aspect-w-16 aspect-h-11">
                            <img class="object-cover w-full h-40 rounded-xl" src="{{ Storage::url($item->thumbnail) }}"
                                alt="Image Description">
                        </div>
                        <div class="my-6">
                            <h3 class="text-xl font-semibold text-secondary dark:group-hover:text-white">
                                {{ $item->title }}
                            </h3>
                            <p class="py-1 text-xs font-bold">
                                Menulis Akademik
                            </p>
                        </div>
                        <div class="flex items-center mt-auto gap-x-3">
                            <div>
                                <h5 class="text-sm text-gray-800 dark:text-gray-200">
                                    {{ Carbon\carbon::parse($item->created_at)->diffForHumans() }}</h5>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                @endforeach

            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Blog -->
    </section>
</x-app>
