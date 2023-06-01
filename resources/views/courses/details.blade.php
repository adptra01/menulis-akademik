<x-app>
    <x-slot name="title">Courses Details - {{ $details->title }}</x-slot>
    <section class="px-10 pt-5">
        <!-- Blog Article -->
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6 lg:gap-x-12">
                <!-- Content -->
                <div class="lg:col-span-2">
                    <div class="py-8 lg:pr-4 lg:pr-8">
                        <div class="space-y-5 lg:space-y-8">
                            <img src="{{ $details->thumbnail }}" class="object-cover w-11/12 lg:w-full h-96"
                                alt="thumbnail">

                            <h2 class="text-3xl font-bold lg:text-4xl lg:text-5xl dark:text-white">{{ $details->title }}
                            </h2>

                            <div class="flex items-center gap-x-5">
                                @if (isset($details->argumentCategory->name))
                                    <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-800 dark:text-gray-200"
                                        href="{{ Route('courses.arguments')}}">
                                        {{ $details->argumentCategory->name }}
                                    </a>
                                @else
                                    <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-800 dark:text-gray-200"
                                        href="{{ Route('courses.academies')}}">
                                        Menulis Akademik
                                    </a>
                                @endif

                                <p class="text-xs text-gray-800 sm:text-sm dark:text-gray-200">
                                    {{ Carbon\carbon::parse($details->created_at)->format('M d, Y') }}</p>
                            </div>

                            <article class="prose-poppins text-justify text-base lg:prose-xl prose-iframe:w-full prose-iframe:h-96 prose-iframe:lg:h-auto prose-iframe:lg:max-h-[600px]">
                                @if (strip_tags($details->description) != $details->description)
                                    {!! $details->description !!}
                                @else
                                    {{ $details->description }}
                                @endif
                            </article>
                        </div>
                    </div>
                </div>
                <!-- End Content -->

                <!-- Sidebar -->
                <div
                    class="lg:col-span-1 lg:w-full lg:h-full lg:bg-gradient-to-r lg:from-base-200 lg:via-transparent lg:to-transparent dark:from-slate-800">
                    <div class="sticky top-0 left-0 py-8 lg:pl-4 lg:pl-8">
                        <!-- Avatar Media -->
                        <div
                            class="flex items-center p-4 mb-4 rounded-lg group gap-x-3 bg-gradient-to-r from-orange-500">
                            <a class="flex-shrink-0 block" href="#">
                                <img class="w-10 h-10 rounded-full"
                                    src="https://api.dicebear.com/6.x/lorelei/svg?seed={{ rand(0, 100) }}"
                                    alt="Image Description">
                            </a>

                            <a class="block group grow" href="">
                                <h5 class="text-sm font-semibold text-white">
                                    Author
                                </h5>
                                <p class="text-sm text-white">
                                    Admin
                                </p>
                            </a>
                        </div>
                        <!-- End Avatar Media -->

                        <div class="space-y-6">
                            <h3 class="p-0 m-0 font-bold underline underline-offset-8">Menulis Akademik</h3>
                            <!-- Media -->
                            @foreach ($randAcadmies as $item)
                                <a class="flex items-center group gap-x-6" href="{{ Route('details', $item->slug) }}">
                                    <div class="grow">
                                        <span
                                            class="text-sm font-bold text-gray-800 group-hover:text-orange-600 dark:text-gray-200 dark:group-hover:text-orange-500">
                                            {{ $item->title }}
                                        </span>
                                        <p class="pt-2 text-sm">
                                            {{ Carbon\carbon::parse($item->created_at)->diffForHumans() }}</p>
                                    </div>

                                    <div class="relative flex-shrink-0 w-20 h-20 overflow-hidden rounded-lg">
                                        <img class="absolute top-0 left-0 object-cover w-full h-full rounded-lg"
                                            src="{{ $item->thumbnail }}" alt="Image Description">
                                    </div>
                                </a>
                            @endforeach
                            <!-- End Media -->
                            <h3 class="p-0 m-0 font-bold underline underline-offset-8">Menulis Argument</h3>
                            <!-- Media -->
                            @foreach ($randArguments as $item)
                                <a class="flex items-center group gap-x-6" href="{{ Route('details', $item->slug) }}">
                                    <div class="grow">
                                        <span
                                            class="text-sm font-bold text-gray-800 group-hover:text-orange-600 dark:text-gray-200 dark:group-hover:text-orange-500">
                                            {{ $item->title }}
                                        </span>
                                        <p class="pt-2 text-sm">
                                            {{ Carbon\carbon::parse($item->created_at)->diffForHumans() }}</p>
                                    </div>

                                    <div class="relative flex-shrink-0 w-20 h-20 overflow-hidden rounded-lg">
                                        <img class="absolute top-0 left-0 object-cover w-full h-full rounded-lg"
                                            src="{{ $item->thumbnail }}" alt="Image Description">
                                    </div>
                                </a>
                            @endforeach
                            <!-- End Media -->
                        </div>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
        <!-- End Blog Article -->
    </section>
</x-app>
