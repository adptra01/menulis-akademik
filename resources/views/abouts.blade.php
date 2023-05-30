<x-app>
    <x-slot name="title">Abouts Page</x-slot>
    <div class="mx-auto max-w-2xl mt-8 lg:mt-14 text-center px-6">
        <h2 class="text-3xl lg:text-4xl text-gray-800 font-bold dark:text-gray-200">
            Tentang Kami
        </h2>
        <p class="mt-3 text-gray-800 dark:text-gray-200">
            Kami percaya bahwa kemampuan menulis yang kuat dan kemahiran berargumentasi yang efektif adalah kunci untuk
            kesuksesan akademik dan profesional.
        </p>
    </div>
    <!-- Features -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="aspect-w-16 aspect-h-7">
            <img class="w-full mb-10 object-cover max-h-96 rounded-xl"
                src="https://images.unsplash.com/photo-1455390582262-044cdead277a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d3JpdGluZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=987&q=80"
                alt="Image Description">
        </div>

        <!-- Grid -->
        <div class="max-w-2xl prose px-6 text-justify lg:px-8">
            {!! $abouts->description !!}
        </div>

        <!-- End Grid -->
    </div>
    <!-- End Features -->
</x-app>
