<form action="{{ route('academy.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row g-2">
        <div class="mb-3 col-sm">
            <label for="title" class="form-label">Judul</label>
            <input type="text" value="{{ old('title') }}" name="title" id="title"
                class="form-control" placeholder="Enter title">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3 col-sm">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input class="form-control" type="text" placeholder="Enter thumbnail" name="thumbnail" id="thumbnail" required>
            @error('thumbnail')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="description" class="form-label">Isi Materi</label>
            <textarea class="form-control" name="description" value="{{ old('description') }}" id="editor" rows="3"></textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>