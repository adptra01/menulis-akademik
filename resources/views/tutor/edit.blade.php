<form action="{{ route('tutor.update', $tutor->slug) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row g-2">
        <div class="mb-3 col-sm">
            <label for="name" class="form-label">Nama tutor</label>
            <input type="text" value="{{ $tutor->name }}" name="name" id="name" class="form-control"
                placeholder="Enter name">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3 col-sm">
            <label for="image" class="form-label">Foto</label>
            <input class="form-control" type="text" value="{{ $tutor->image}}" name="image" id="image">
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="position" class="form-label">Posisi</label>
            <input class="form-control" name="position" value="{{ $tutor->position }}">
            @error('position')
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
