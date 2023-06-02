<x-app>
    <x-slot name="title">Home</x-slot>
    <div class="pb-6 bg-white sm:pb-8 lg:pb-12">
        <div class=" mx-auto ">
            <section
                class="relative flex items-center justify-center flex-1 py-16 overflow-hidden bg-gray-100 shadow-lg min-h-96 shrink-0 md:py-20 xl:py-48">
                <!-- image - start -->
                <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=872&q=80" loading="lazy" alt="Photo by Fakurian Design"
                    class="absolute  mx-auto inset-0 object-cover object-center w-full h-full" />
                <!-- image - end -->

                <!-- overlay - start -->
                <div class="absolute inset-0 bg-secondary mix-blend-multiply"></div>
                <!-- overlay - end -->

                <!-- text start -->
                <div class="relative flex flex-col items-center p-4 sm:max-w-xl">
                    <h1 class="mb-8 text-4xl font-bold text-center text-white sm:text-5xl md:mb-12 md:text-6xl">
                        Pusat Penulisan Akademik Universitas Jambi</h1>
                    <p class="mb-4 text-md font-semibold text-center text-white sm:text-lg md:mb-8">Wadah Untuk
                        Pembelajaran
                        Menulis Akademik dan Menulis Argumen
                    </p>

                    <div class="flex w-full flex-col gap-2.5 sm:flex-row sm:justify-center">
                        <a href="#start"
                            class="inline-block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 bg-black rounded-lg outline-none ring-indigo-300 hover:bg-orange-400 focus-visible:ring md:text-base ">Start
                            now</a>
                    </div>
                </div>
                <!-- text end -->
            </section>
        </div>
    </div>

    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
            <div>
                <img class="rounded-xl"
                    src="https://images.unsplash.com/photo-1573643808568-4a3c26f3a06b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=900&h=900&q=80"
                    alt="Image Description">
            </div>
            <!-- End Col -->

            <div class="mt-5 sm:mt-10 lg:mt-0">
                <div class="space-y-6 sm:space-y-8">
                    <!-- Title -->
                    <div class="space-y-2 md:space-y-4">
                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-gray-200">
                            Misi Kami
                        </h2>
                        <p class="text-gray-500 text-justify">
                            Pusat Penulisan Akademik Program Studi Pendidikan Bahasa dan Sastra Indonesia di Universitas
                            Jambi berfokus membantu mahasiswa untuk mengembangkan Menulis menulis akademik mereka
                            sambil menjunjung tinggi inklusivitas, kreativitas, dan kolaborasi. Ini adalah tujuan utama kami
                            untuk menjadi platform yang banyak akal serta produktif dalam melengkapi Tridarma Universitas
                            yang ada atau Tiga Pilar Pendidikan Tinggi (pengajaran, penelitian dan keterlibatan masyarakat)
                            untuk mahasiswa. Komitmen kami adalah untuk membantu klien kami dalam mencapai kesuksesan mereka
                            dalam penulisan akademik, terutama untuk publikasi jurnal.
                        </p>
                    </div>
                    <!-- End Title -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h2
                class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                        class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="bebc38d1-bf72-4c77-a073-f0fe5abe0753" x="0" y="0"
                                width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#bebc38d1-bf72-4c77-a073-f0fe5abe0753)" width="52" height="24">
                        </rect>
                    </svg>
                    <span class="relative">Kenapa</span>
                </span>
                Menulis Akademik dan Menulis Argumen Penting ?
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                Karena menulis akademik dan Menulis argumen penting dalam mengembangkan kemampuan berpikir
                kritis dan menyampaikan ide dengan efektif.
            </p>
        </div>
        <div class="grid gap-8 row-gap-12 lg:grid-cols-2">
            <div class="max-w-md sm:mx-auto sm:text-center">
                <div
                    class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-gray-300 sm:mx-auto sm:w-24 sm:h-24">
                    <i class="text-4xl fa-solid text-black fa-graduation-cap"></i>
                </div>
                <h6 class="mb-3 text-xl font-bold leading-5"> Menulis Akademik </h6>
                <p class="mb-3 text-sm text-gray-900">
                    Belajar menyusun penulisan ilmiah seperti esai ilmiah dan artikel ilmiah.
                </p>
                <a href="{{ route('courses.academies') }}" aria-label=""
                    class="inline-flex items-center font-semibold transition-colors duration-200">Lihat
                    lebih!</a>
            </div>
            <div class="max-w-md sm:mx-auto sm:text-center">
                <div
                    class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-gray-300 sm:mx-auto sm:w-24 sm:h-24">
                    <i class="text-4xl fa-solid text-black fa-blog"></i>
                </div>
                <h6 class="mb-3 text-xl font-bold leading-5">Menulis Argumen</h6>
                <p class="mb-3 text-sm text-gray-900">
                    Menyusun argumen ilmiah pada latar belakang penelitian, kajian teori, metodologi penelitian, hasil
                    dan pembahasan.
                </p>
                <a href="{{ route('courses.arguments') }}" aria-label=""
                    class="inline-flex items-center font-semibold transition-colors duration-200">Lihat
                    lebih!</a>
            </div>
        </div>
    </div>


    <!-- Team -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Pengelola</h2>
            <p class="mt-1 text-gray-600 dark:text-gray-400">Bersama tim yang berpengalaman dan berdedikasi</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($personils as $item)
                <div class="card lg:card-side glass shadow-xl">
                    <figure><img src="{{ $item->image }}" class="object-cover w-full h-80 lg:hidden"
                            alt="Album" /></figure>
                    <div class="card-body lg:w-52 h-full">
                        <blockquote class="relative">
                            <svg class="absolute top-14 left-0 transform -translate-x-8 -translate-y-4 h-24 w-24 text-base-300"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z"
                                    fill="currentColor" />
                            </svg>

                            <div class="relative z-10">
                                <div class="flex items-center">
                                    <img class="h-12 w-12 md:mr-6 object-cover md:block hidden rounded-full"
                                        src="{{ $item->image }}" alt="Image Description">
                                    <div class="relative">
                                        <p class="font-semibold tracking-wide uppercase text-secondary">
                                            {{ $item->name }}
                                        </p>
                                        <p class="font-semibold text-sm
                                        ">
                                            {{ $item->position }}
                                        </p>
                                    </div>
                                </div>

                                <p class="text-sm lg:text-xs font-medium italic text-gray-800 mt-3">
                                    {{ $item->description }}
                                </p>
                            </div>
                        </blockquote>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Grid -->
    </div>

    <!-- End Team -->
    <!-- Team -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Mentor</h2>
            <p class="mt-1 text-gray-600 dark:text-gray-400">Belajar dengan mentor berpengalaman di situs kami</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($tutors as $item)
                <div class="card lg:card-side glass shadow-xl">
                    <figure><img src="{{ $item->image }}" class="object-cover w-full h-80 lg:hidden"
                            alt="Album" /></figure>
                    <div class="card-body lg:w-52 h-full">
                        <blockquote class="relative">
                            <svg class="absolute top-14 left-0 transform -translate-x-8 -translate-y-4 h-24 w-24 text-base-300"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z"
                                    fill="currentColor" />
                            </svg>

                            <div class="relative z-10">
                                <div class="flex items-center">
                                    <img class="h-12 w-12 md:mr-6 object-cover md:block hidden rounded-full"
                                        src="{{ $item->image }}" alt="Image Description">
                                    <div class="relative">
                                        <p class="font-semibold tracking-wide uppercase text-secondary">
                                            {{ $item->name }}
                                        </p>
                                        <p class="font-semibold text-sm
                                    ">
                                            {{ $item->position }}
                                        </p>
                                    </div>
                                </div>

                                <p class="text-sm lg:text-xs font-medium italic text-gray-800 mt-3">
                                    {{ $item->description }}
                                </p>
                            </div>
                        </blockquote>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Team -->
</x-app>
