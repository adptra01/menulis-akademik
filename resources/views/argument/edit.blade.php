<form action="{{ route('argument.update', $argument->slug) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="mb-3 col-sm">
            <label for="title" class="form-label">Judul</label>
            <input type="text" value="{{ $argument->title ?? old('title') }}" name="title" id="title"
                class="form-control" placeholder="Enter title">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="row g-2">
        <div class="mb-3 col-sm">
            <label for="argument_category_id" class="form-label">Kategori Argumen</label>
            <select class="form-select form-select" name="argument_category_id" id="argument_category_id">
                <option disabled>Select one</option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}" @if ($argument->Argument_category_id == $item->id) selected @endif>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
            @error('argument_category_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3 col-sm">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input class="form-control" type="file" name="thumbnail" id="thumbnail">
            @error('thumbnail')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="description" class="form-label">Isi Materi</label>
            <textarea class="form-control" name="description" id="editor" rows="3">{{ $argument->description ?? old('description') }}</textarea>
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
