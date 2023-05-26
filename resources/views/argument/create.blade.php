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
                                            src="{{ Storage::url($item->thumbnail) }}" alt="Avatar">
                                    </td>
                                    <td>{{ Str::limit($item->title, 25, '...') }}</td>
                                    <td>{{ $item->argumentCategory->name }}</td>
                                    <td>
                                        <div class="d-inline justify-content-center">
                                            <a class="btn btn-info m-1 btn-sm"
                                                href="{{ Route('argument.show', $item->slug) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>Lihat</a>
                                            <form action="{{ route('argument.destroy', $item->slug) }}" method="POST">
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
                <form action="{{ route('argument.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-sm">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" value="{{ old('title') }}" name="title" id="title"
                                class="form-control" placeholder="Enter title">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="mb-3 col-sm">
                            <label for="argument_category_id" class="form-label">Kategori Argumen</label>
                            <select class="form-select form-select" name="argument_category_id"
                                id="argument_category_id">
                                <option selected disabled>Select one</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('argument_category_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3 col-sm">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input class="form-control" type="file" name="thumbnail" id="thumbnail" required>
                            @error('thumbnail')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="description" class="form-label">Isi Materi</label>
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
    @include('ckeditor')
@endsection
