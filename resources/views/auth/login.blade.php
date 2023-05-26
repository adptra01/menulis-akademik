<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,800;1,600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <section>
        <div class="px-4 py-12 mx-auto max-w-16xl sm:px-6 md:px-12 lg:px-24 lg:py-24">
            <div
                class="justify-center mx-auto text-left align-bottom transition-all transform bg-white rounded-lg sm:align-middle sm:max-w-2xl sm:w-full">
                <div
                    class="grid flex-wrap items-center justify-center grid-cols-1 px-4 mx-auto shadow-xl lg:grid-cols-2 rounded-xl">
                    <div class="w-full px-6 py-3">
                        <div>
                            <div class="mt-3 text-left sm:mt-5">
                                <div class="inline-flex items-center w-full">
                                    <h3 class="text-lg font-bold text-neutral-600 l eading-6 lg:text-5xl">Sign up</h3>
                                </div>
                                <div class="mt-4 text-base text-gray-500">
                                    <p>Sign up and get our newest news.</p>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mt-6 space-y-2">
                                <div>
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="text" name="email" id="email"
                                        class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg text-neutral-600 bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300"
                                        placeholder="Enter your email">
                                    @error('email')
                                        <small class="font-bold text-red-500">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password"
                                        class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg text-neutral-600 bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300"
                                        placeholder="Enter your password">
                                    @error('password')
                                        <small class="font-bold text-red-500">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="flex mt-4 lg:space-y-2">
                                    <div class="form-control">
                                        <label class="label cursor-pointer">
                                            <input type="checkbox" class="checkbox" name="remember"
                                                {{ old('remember') ? 'checked' : '' }} />
                                            <span class="px-3">Remember me</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="flex flex-col mt-4 lg:space-y-2">
                                    <button type="submit"
                                        class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign
                                        up</button>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"
                                            class="inline-flex justify-center py-4 text-base font-medium text-gray-500 focus:outline-none hover:text-neutral-600 focus:text-blue-600 sm:text-sm">
                                            Forgot your Password? </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="order-first hidden w-full lg:block px-3">
                        <img class="object-cover h-full bg-cover rounded-l-lg"
                            src="https://images.unsplash.com/photo-1491933382434-500287f9b54b?" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
