<x-layout>
    <x-slot name="title">Menulis Argumen</x-slot>
    <div class="pb-3 row g-4">
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-2 d-flex justify-content-between">
                        <h5 class="fw-bold">Total {{ $arguments->count() }} materi</h5>

                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <ul class="mb-0 list-unstyled d-flex align-items-center avatar-group">
                            @foreach ($arguments->take(10) as $item)
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-sm pull-up" aria-label="{{ $item->title }}"
                                    data-bs-original-title="{{ $item->title }}">
                                    <img class="rounded-circle" src="{{ $item->thumbnail }}" alt="Avatar">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-sm">
                        <div class="mt-3 d-flex align-items-end h-100 justify-content-center mt-sm-0">
                            <img src="/assets/img/illustrations/man-with-laptop-light.png" class="img-fluid pt-4"
                                alt="Image" width="120"
                                data-app-light-img="illustrations/sitting-girl-with-laptop-light.png"
                                data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="text-center card-body text-sm-start ps-sm-0">
                            <a class="mb-3 btn btn-primary" href="{{ Route('argumentCategory') }}">Kategori Argumen</a>
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
    <div class="card mb-3">
        <div class="card-body">
            {!! $chart->container() !!}

            <script src="{{ $chart->cdn() }}"></script>

            {{ $chart->script() }}
        </div>
    </div>
    <div class="card">
        <div class="card-header pb-5">
            <ul class="nav nav-pills card-header-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-within-card-active" role="tab">Tabel</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-within-card-link" role="tab">Tambah
                        @if ($errors->any())
                            <sup class="fw-bold text-danger">!</sup>
                        @endif
                    </button>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content p-0">
                <div class="tab-pane fade show active" id="navs-pills-within-card-active" role="tabpanel">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>thumbnail</th>
                                    <th>judul</th>
                                    <th>kategori</th>
                                    <th>pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($arguments as $no => $item)
                                    <tr>
                                        <td>{{ ++$no }}</td>
                                        <td>
                                            <img class="rounded" width="50px" height="50px" style="object-fit: cover"
                                                src="{{ $item->thumbnail }}" alt="Avatar">
                                        </td>
                                        <td>{{ Str::limit($item->title, 25, '...') }}</td>
                                        <td>{{ $item->argumentCategory->name }}</td>
                                        <td>
                                            <div class="d-inline justify-content-center">
                                                <a class="btn btn-info m-1 btn-sm"
                                                    href="{{ Route('argument.show', $item->slug) }}"><i
                                                        class="bx bx-edit-alt me-1"></i>Lihat</a>
                                                <form action="{{ route('argument.destroy', $item->slug) }}"
                                                    method="POST">
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="bx bx-trash me-1"></i>Hapus</button>
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-pills-within-card-link" role="tabpanel">
                    @include('argument.create')
                </div>
            </div>
        </div>
    </div>
    @section('css')
        @include('datatables.css')
    @endsection

    @section('js')
        @include('datatables.script')
        @include('ckeditor')
    @endsection
</x-layout>
