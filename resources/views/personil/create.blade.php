<form action="{{ route('personil.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row g-2">
        <div class="mb-3 col-sm">
            <label for="name" class="form-label">Nama Personil</label>
            <input type="text" value="{{ old('name') }}" name="name" id="name"
                class="form-control" placeholder="Enter name">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3 col-sm">
            <label for="image" class="form-label">Foto</label>
            <input class="form-control" type="text" name="image" id="image" placeholder="Enter image personil" required>
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="position" class="form-label">Posisi</label>
            <input class="form-control" name="position" placeholder="Enter position personil" value="{{ old('position') }}" id="editor" rows="3">
            @error('position')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>