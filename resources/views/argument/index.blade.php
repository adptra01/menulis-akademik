<x-layout>
    <x-slot name="title">Menulis Argumen</x-slot>
    <div class="pb-3 row g-4">
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-2 d-flex justify-content-between">
                        <h6 class="fw-normal">Total {{ $arguments->count() }} materi</h6>
                        
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <ul class="mb-0 list-unstyled d-flex align-items-center avatar-group">
                            @foreach ($arguments->take(10) as $item)
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-sm pull-up" aria-label="{{ $item->title}}"
                                data-bs-original-title="{{ $item->title}}">
                                <img class="rounded-circle" src="{{ Storage::url($item->thumbnail)}}"
                                    alt="Avatar">
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card h-100">
                <div class="row h-100">
                    <div class="col-sm-5">
                        <div class="mt-3 d-flex align-items-end h-100 justify-content-center mt-sm-0">
                            <img src="/assets/img/illustrations/man-with-laptop-light.png" class="img-fluid"
                                alt="Image" width="120"
                                data-app-light-img="illustrations/sitting-girl-with-laptop-light.png"
                                data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="text-center card-body text-sm-start ps-sm-0">
                            <a class="mb-3 btn btn-primary" href="{{ Route('argumentCategory') }}">Kategori Argumen</a>
                            <p class="mb-0">Add role, if it does not exist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong><i class="bx bxs-bell bx-tada"></i>
                Success!</strong> {{ session('success') }}.
        </div>
    @elseif ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong>Failed!</strong>{{ $errors->any() }} You should check in on some of those fields below.
        </div>
    @endif

    @include('argument.create')
</x-layout>
