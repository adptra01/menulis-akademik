<x-layout>
    <x-slot name="title">Menulis Akademik</x-slot>
    <div class="card pt-3 mb-3">
        <div class="row">
            <div class="col-sm-5">
                <div class="mt-3 d-flex align-items-end justify-content-center mt-sm-0">
                    <img src="/assets/img/illustrations/man-with-laptop-light.png" class="img-fluid" alt="Image"
                        width="120" data-app-light-img="illustrations/sitting-girl-with-laptop-light.png"
                        data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="text-center card-body text-sm-start ps-sm-0">
                    <p class="mb-0">Add role, if it does not exist</p>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong><i class="bx bxs-bell bx-tada"></i>
                Success!</strong> {{ session('success') }}
        </div>
    @elseif ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong><i class="bx bx-error bx-flashing"></i>
                Failed</strong> You should check in on some of those fields below.
        </div>
    @endif
    @include('academy.create')
</x-layout>
