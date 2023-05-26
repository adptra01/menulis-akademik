<x-layout>
    <x-slot name="title">Kategori Argumen</x-slot>
    @if (session('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong>success!</strong> {{ session('success') }}
        </div>
    @elseif ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong>Failed!</strong> You should check in on some of those fields below.
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
                                    <th>Nama kategori</th>
                                    <th>Keterangan</th>
                                    <th>pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $no => $item)
                                    <tr>
                                        <td>{{ ++$no }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <div class="d-inline justify-content-center">
                                                <a class="btn btn-info m-1 btn-sm"
                                                    href="{{ Route('argumentCategory.show', $item->slug) }}"><i
                                                        class="bx bx-edit-alt me-1"></i>Lihat</a>
                                                <form id="destroy-argumentCategory"
                                                    action="{{ route('argumentCategory.destroy', $item->slug) }}"
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
                    <form action="{{ route('argumentCategory.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-sm">
                                <label for="name" class="form-label">Nama Kategori</label>
                                <input type="text" value="{{ old('name') }}" name="name" id="name"
                                    class="form-control" placeholder="Enter name">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="description" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="description" id="editor" rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('css')
        @include('datatables.css')
    @endsection

    @section('js')
        @include('datatables.script')
    @endsection
</x-layout>
