<form action="{{ route('argumentCategory.update', $category->slug) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="mb-3 col-sm">
            <label for="name" class="form-label">Nama Kategori</label>
            <input type="text" value="{{ $category->name }}" name="name" id="name" class="form-control"
                placeholder="Enter name">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="description" class="form-label">Keterangan</label>
            <textarea class="form-control" name="description" id="editor" rows="3">{{ $category->description }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
