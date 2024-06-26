<x-layout>
    <x-slot name="title">Home</x-slot>
    <div class="card mb-5">
        <div class="card-body">
            {!! $chart->container() !!}

            <script src="{{ $chart->cdn() }}"></script>

            {{ $chart->script() }}
        </div>
    </div>

    <h5 class="fw-bold">Menulis Akademik</h5>
    <div class="row mb-5 row-cols-1 row-cols-md-3 g-4">
        @foreach ($academies as $item)
            <div class="col">
                <div class="card bg-dark text-secondary fw-bold">
                    <img src="{{ $item->thumbnail }}" class="card-img" alt="..."
                        style="object-fit: cover" width="200px" height="200px">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white fw-bold">{{ Str::limit($item->title, 25, '...') }}</h5>
                        <p class="card-text text-white">
                            Menulis Akademik
                        </p>
                        <a href="{{ route('academy.show', $item->slug) }}" class="btn btn-sm btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <h5 class="fw-bold">Menulis Argumen</h5>
    <div class="row mb-5 row-cols-1 row-cols-md-3 g-4">
        @foreach ($arguments as $item)
            <div class="col">
                <div class="card bg-dark text-secondary fw-bold">
                    <img src="{{ $item->thumbnail }}" class="card-img" alt="..."
                        style="object-fit: cover" width="200px" height="200px">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white fw-bold">{{ Str::limit($item->title, 25, '...') }}</h5>
                        <p class="card-text text-white">
                            {{ $item->argumentcategory->name}}
                        </p>
                        <a href="{{ route('argument.show', $item->slug) }}" class="btn btn-sm btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
