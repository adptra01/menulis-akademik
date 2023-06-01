<!doctype html>
<html data-theme="acid" class="scroll-smooth hover:scroll-auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }} Page - Akademik Menulis</title>
    <link rel="icon"
        href="https://rekreartive.com/wp-content/uploads/2018/11/Logo-UNJA-Universitas-Negeri-Jambi-Original-Hitam-Putih.png.webp">
    <script src="https://kit.fontawesome.com/21fb7efcbe.js" crossorigin="anonymous"></script>

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
                            <ul class="ml-3 bg-base-100 text-white">
                                <li><a class="active:bg-orange-500 text-black"
                                        href="{{ Route('courses.arguments') }}">Menulis
                                        Argumen</a></li>
                                <li><a class="active:bg-orange-500 text-black"
                                        href="{{ Route('courses.academies') }}">Menulis
                                        Akademik</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <img src="https://rekreartive.com/wp-content/uploads/2018/11/Logo-UNJA-Universitas-Negeri-Jambi-Original-Hitam-Putih.png.webp"
                    class="w-10">
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

    <footer class="px-3 pt-4 lg:px-9">
        <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">

            <div class="sm:col-span-2">
                <a href="/" class="inline-flex items-center">
                    <img src="https://rekreartive.com/wp-content/uploads/2018/11/Logo-UNJA-Universitas-Negeri-Jambi-Original-Hitam-Putih.png.webp"
                        alt="logo" class="h-8 w-8">
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-800">Menulis Akademik</span>
                </a>
                <div class="mt-6 lg:max-w-xl">
                    <p class="text-sm text-gray-800">
                        Menulis Akademik dan Menulis Argumentasi adalah kunci untuk mengungkapkan ide-ide secara
                        jelas dan persuasif. Di sini, kami memberikan panduan dan sumber daya yang berharga untuk
                        meningkatkan kemampuan menulis akademik Anda serta mengasah menulis argumentasi yang kuat.
                        Bersama-sama, kita akan mengembangkan keahlian yang diperlukan untuk sukses dalam dunia akademik
                        dan berkomunikasi dengan efektif.
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-2 text-sm">
                <p class="text-base mb-6 font-bold tracking-wide text-gray-900">Kontak Kami</p>
                <a href="https://api.whatsapp.com/send/?phone=085266113072&text&type=phone_number&app_absent=0"><i
                        class="fa-solid fa-phone"></i> +62 85266113072</a>
                <a href="https://goo.gl/maps/KkoirM6SEGE1aZAu8"><i class="fa-solid fa-location-dot"></i> Kampus Unja
                    Mendalo</a>
            </div>

        </div>

        <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
            <p class="text-sm text-gray-600"> © Created by <a href="https://github.com/adptra01/"
                    class="text-secondary">adptra01</a>, 2023.</p>
            <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
                <li>
                    <a href="#"
                        class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy
                        &amp; Cookies Policy
                    </a>
                </li>
                <li>
                    <a href="/login"
                        class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Administrator
                    </a>
                </li>
            </ul>
        </div>

    </footer>
</body>

</html>
