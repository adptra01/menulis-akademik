<x-layout>
    <x-slot name="title">Pelayanan</x-slot>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong><i class="bx bx-error bx-flashing"></i>
                Failed</strong> You should check in on some of those fields below.
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header-banner">
                    <img src="https://source.unsplash.com/random/?course&1
                " alt="Banner image"
                        width="100%" height="200px" style="object-fit: cover" class="rounded-top">
                </div>
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Edit Pelayanan
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse mb-5" id="collapseExample">
                        <div class="p-3 border rounded">
                            <div class="alert alert-primary" role="alert">
                                <strong><i class="bx bx-bell"></i> Peringatan !!!</strong>
                                <p>Jangan menginputkan ulang gambar atau thumbnail jika tidak ingin melakukan perubahan
                                    gambar.</p>
                            </div>
                            <form action="{{ Route('service.update', $service->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="description" class="form-label">Pelayanan</label>
                                    <textarea class="form-control" name="description" value="" id="editor" rows="3">{{ $service->description }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="container">
                        <div class="card-body">

                            {!! $service->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('js')
        @include('ckeditor')
    @endsection
</x-layout>
