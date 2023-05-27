<x-app>
    <x-slot name="title">Argument Courses</x-slot>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
            <div class="flex flex-col mb-16 sm:text-center sm:mb-0">
                <a href="/" class="mb-6 sm:mx-auto">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
                        <i class="fa-solid fa-blog"></i>
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
                            <span class="relative">Keterampilan</span>
                        </span>
                        Argumentasi yang Kuat
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        Pelajari strategi-strategi penting, struktur argumen yang
                        efektif, dan cara menghadapi kontroversi dengan baik. Tingkatkan kemampuan Anda dalam berargumen
                        dan jadilah seorang pembicara yang persuasif melalui penulisan argumentasi yang berkualitas.
                    </p>
                    <div class="mt-4 card bg-base-100 shadow-xl prose">
                        <div class="card-body">
                            <span class="text-justify text-gray-700 md:text-lg">
                                <p>
                                    Struktur Argument-Claim-Evidence-Reasoning (CER) adalah kerangka kerja yang
                                    digunakan
                                    dalam penulisan akademik untuk membangun argumen yang kuat dan meyakinkan. Berikut
                                    adalah penjelasan tentang setiap elemen dalam struktur CER:
                                </p>
                                <ol>
                                    <li><span class="font-bold">Argument (Argumen):</span><br>
                                        Argumen merupakan pernyataan utama atau klaim yang ingin Anda buat dalam tulisan
                                        akademik. Argumen harus jelas, terfokus, dan dinyatakan dengan singkat. Ini
                                        adalah
                                        pernyataan yang hendak Anda buktikan atau bujukan kepada pembaca.</li>
                                    <li><span class="font-bold">Claim (Klaim): </span><br>
                                        Klaim adalah pernyataan pendukung yang mendukung argumen Anda. Klaim harus
                                        relevan,
                                        spesifik, dan terkait dengan topik yang sedang Anda bahas. Klaim menyediakan
                                        dasar atau
                                        alasan untuk mempertahankan argumen Anda.</li>
                                    <li><span class="font-bold">Evidence (Bukti):</span> <br>
                                        Bukti adalah informasi, fakta, data, atau sumber lainnya yang digunakan untuk
                                        mendukung
                                        klaim Anda. Bukti harus valid, akurat, dan kredibel. Anda dapat menggunakan
                                        hasil
                                        penelitian, studi kasus, kutipan dari sumber otoritatif, statistik, atau argumen
                                        logis
                                        sebagai bukti untuk mendukung klaim Anda.</li>
                                    <li><span class="font-bold">Reasoning (Penalaran):</span> <br>
                                        Penalaran adalah penjelasan atau analisis yang menghubungkan bukti dengan klaim
                                        Anda.
                                        Penalaran menjelaskan bagaimana bukti yang disajikan mendukung klaim Anda dan
                                        mengapa
                                        pembaca harus menerima argumen Anda. Ini membantu memperkuat kepercayaan dan
                                        persuasi
                                        dalam tulisan Anda.</li>
                                </ol>
                                <p>
                                    Dalam struktur CER, Anda mengatur informasi Anda dengan cara yang sistematis dan
                                    logis.
                                    Anda memulai dengan argumen sebagai pernyataan utama, kemudian mendukungnya dengan
                                    klaim
                                    yang didukung oleh bukti yang relevan dan akurat. Terakhir, Anda memberikan
                                    penalaran
                                    yang menghubungkan bukti dengan klaim untuk memperkuat argumen Anda.
                                    <br>
                                    Penting untuk mencatat bahwa struktur CER ini dapat bervariasi tergantung pada jenis
                                    tulisan akademik dan disiplin ilmu tertentu. Namun, inti dari CER tetap sama yaitu
                                    membangun argumen yang kuat dan didukung oleh bukti yang relevan.

                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($arguments as $key => $categoryArguments)
        <section class="px-2">
            <!-- Card Blog -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 mx-auto">
                <!-- Title -->
                <div class="max-w-2xl mb-10">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">{{ $key }}</h2>
                    <p class="mt-1 text-gray-600 dark:text-gray-400">{{ $categoryArguments['description'] }}</p>
                </div>
                <!-- End Title -->

                <!-- Grid -->
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($categoryArguments['arguments'] as $item)
                        <!-- Card -->
                        <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4]"
                            href="{{ route('details', $item->slug) }}">
                            <div class="aspect-w-16 aspect-h-11">
                                <img class="object-cover w-full h-40 rounded-xl"
                                    src="{{ Storage::url($item->thumbnail) }}" alt="Image Description">
                            </div>
                            <div class="my-6">
                                <h3 class="text-xl font-semibold text-secondary dark:group-hover:text-white">
                                    {{ $item->title }}
                                </h3>
                                <p class="py-1 text-xs font-bold">
                                    {{ $item->argumentCategory->name }}
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
    @endforeach



</x-app>
