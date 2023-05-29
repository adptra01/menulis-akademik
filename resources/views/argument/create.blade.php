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
            <input class="form-control" type="text" name="thumbnail" id="thumbnail" required>
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