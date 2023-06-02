<x-layout>
    <x-slot name="title">Tim Pengelola</x-slot>
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
                                    <th>foto</th>
                                    <th>Nama Personil</th>
                                    <th>posisi</th>
                                    <th>pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($personils as $no => $item)
                                    <tr>
                                        <td>{{ ++$no }}</td>
                                        <td>
                                            <img class="rounded" width="50px" height="50px" style="object-fit: cover"
                                                src="{{ $item->image }}" alt="Avatar">
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->position }}</td>
                                        <td>
                                            <div class="d-inline justify-content-center">
                                                <a class="btn btn-info m-1 btn-sm"
                                                    href="{{ Route('personil.show', $item->slug) }}"><i
                                                        class="bx bx-edit-alt me-1"></i>Lihat</a>
                                                <form action="{{ route('personil.destroy', $item->slug) }}" method="POST">
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
                    @include('personil.create')
                </div>
            </div>
        </div>
    </div>
    @section('css')
        @include('datatables.css')
    @endsection
    
    @section('js')
        @include('datatables.script')
        {{-- @include('ckeditor') --}}
    @endsection
    
</x-layout>
