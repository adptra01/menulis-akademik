<form action="{{ route('academy.update', $academy->slug) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row g-2">
        <div class="mb-3 col-sm">
            <label for="title" class="form-label">Judul</label>
            <input type="text" value="{{ $academy->title ?? old('title') }}" name="title" id="title"
                class="form-control" placeholder="Enter title">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3 col-sm">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input class="form-control" value="{{ $academy->thumbnail }}" type="text" name="thumbnail"
                id="thumbnail">
            @error('thumbnail')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="description" class="form-label">Isi Materi</label>
            <textarea class="form-control" name="description" id="editor" rows="3">{{ $academy->description ?? old('description') }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button class="btn btn-secondary me-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
        aria-expanded="false" aria-controls="collapseExample">
        Batal
    </button>
</form>

@section('js')
    @include('ckeditor')
@endsection
