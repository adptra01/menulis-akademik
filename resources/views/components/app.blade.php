<!doctype html>
<html data-theme="acid" class="scroll-smooth hover:scroll-auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }} Page - Akademik Menulis</title>
    <script src="https://kit.fontawesome.com/21fb7efcbe.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.4.x/dist/typography.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-white">
    <header class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="rounded-lg navbar bg-white">
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </label>
                    <ul tabindex="0"
                        class="p-2 mt-3 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                        <li><a href="/" class="active:bg-orange-500">Home</a></li>
                        <li><a href="{{ Route('courses.abouts') }}" class="active:bg-orange-500">Tentang</a></li>
                        <li><a href="{{ Route('courses.services') }}" class="active:bg-orange-500">Pelayanan</a></li>
                        <li><a href="{{ Route('courses.guidelines') }}" class="active:bg-orange-500">Pedoman</a></li>
                        <li tabindex="0">
                            <a class="justify-between active:bg-orange-500">
                                Sumber Belajar
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                                </svg>
                            </a>
                            <ul class="p-2 bg-black text-white">
                                <li><a class="active:bg-orange-500" href="{{ Route('courses.academies') }}">Menulis
                                        Akademik</a></li>
                                <li><a class="active:bg-orange-500" href="{{ Route('courses.arguments') }}">Menulis
                                        Argumen</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <a href="/" class="text-xl normal-case btn btn-ghost text-secondary">Menulis</a>
            </div>
            <div class="hidden navbar-center lg:flex">
                <ul class="px-1 menu menu-horizontal">
                    <li><a href="/" class="active:bg-orange-500">Home</a></li>
                    <li><a href="{{ Route('courses.abouts') }}" class="active:bg-orange-500">Tentang</a></li>
                    <li><a href="{{ Route('courses.services') }}" class="active:bg-orange-500">Pelayanan</a></li>
                    <li><a href="{{ Route('courses.guidelines') }}" class="active:bg-orange-500">Pedoman</a></li>
                    <li class="dropdown">
                        <label tabindex="0" class="m-1 active:bg-orange-500">Sumber Belajar <svg class="fill-current"
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                            </svg>
                        </label>
                        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="{{ Route('courses.arguments') }}" class="active:bg-orange-500">Menulis
                                    Argumen</a></li>
                            <li><a href="{{ Route('courses.academies') }}" class="active:bg-orange-500">Menulis
                                    Akademik</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navbar-end">
                <a href="https://api.whatsapp.com/send/?phone=085266113072&text&type=phone_number&app_absent=0"
                    class="btn text-white btn-secondary">Get started</a>
            </div>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
            <div class="md:max-w-md lg:col-span-2">
                <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                    <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round"
                        stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor"
                        fill="none">
                        <rect x="3" y="1" width="7" height="12"></rect>
                        <rect x="3" y="17" width="7" height="6"></rect>
                        <rect x="14" y="1" width="7" height="6"></rect>
                        <rect x="14" y="11" width="7" height="12"></rect>
                    </svg>
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Menulis</span>
                </a>
                <div class="mt-4 lg:max-w-sm">
                    <p class="text-sm text-gray-800">
                        Menulis Akademik dan Ketrampilan Argumentasi adalah kunci untuk mengungkapkan ide-ide secara
                        jelas dan persuasif. Di sini, kami memberikan panduan dan sumber daya yang berharga untuk
                        meningkatkan kemampuan menulis akademik Anda serta mengasah ketrampilan argumentasi yang kuat.
                    </p>
                    <p class="mt-4 text-sm text-gray-800">
                        Bersama-sama, kita akan mengembangkan keahlian yang diperlukan untuk sukses dalam dunia akademik
                        dan berkomunikasi dengan efektif.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                <div>
                    <p class="font-semibold tracking-wide text-gray-800">Materi</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="{{ route('courses.academies') }}"
                                class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Menulis
                                Akademik</a>
                        </li>
                        <li>
                            <a href="{{ route('courses.arguments') }}"
                                class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Menulis
                                Argumen</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-gray-800">Kontak</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="https://api.whatsapp.com/send/?phone=085266113072&text&type=phone_number&app_absent=0"
                                class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Whatsapp</a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
        <div class="flex flex-col justify-between pt-5 pb-10 border-t sm:flex-row">
            <p class="text-sm text-gray-600">
                © Created by Administrator, 2023.
            </p>
            <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                <a href="{{ route('login') }}"
                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                    <i class="fa-solid fa-door-open"></i>
                    <a href="/"
                        class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                            <circle cx="15" cy="15" r="4"></circle>
                            <path
                                d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                            </path>
                        </svg>
                    </a>
                    <a href="/"
                        class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                                d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                            </path>
                        </svg>
                    </a>
            </div>
        </div>
    </div>
</body>

</html>
